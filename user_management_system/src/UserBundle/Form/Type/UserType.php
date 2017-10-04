<?php

namespace UserBundle\Form\Type;

use UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('loginName', TextType::class, array('attr' => ['data-required' => 'true']))
            ->add('firstName', TextType::class, array('attr' => ['data-required' => 'true']))
            ->add('lastName', TextType::class)
            ->add('dateOfBirth', DateType::class, array(
                    'widget' => 'single_text',
                    'html5' => false,
                    'attr' => ['class' => 'js-datepicker','data-required' => 'true'],
                    'format' => 'dd/MM/yyyy',
            ))
            ->add('gender', EntityType::class, array(
                        'class' => 'UserBundle:Gender',
                        'choice_label' => 'name',
                        'expanded' => true,
                        'attr' => ['data-required' => 'true']
                    ))
            ->add('bloodGroup', EntityType::class, array(
                        'class' => 'UserBundle:BloodGroup',
                        'choice_label' => 'name',
                        'attr' => ['data-required' => 'true']
                    ))
            ->add('emailIds', CollectionType::class, array(
                'entry_type'   => UserMailAddressType::class,
                'entry_options'  => array(
                'attr'      => array('class' => 'emailId', 'data-required' => 'true')
            ),
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'label' => false,
                ))
            ->add('mobileNumbers', CollectionType::class, array(
                'entry_type'   => UserContactNumberType::class,
                'entry_options'  => array(
                    'attr'      => array('class' => 'number', 'data-required' => 'true'),
                ),
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true
             ))
            ->add('education', CollectionType::class, array(
                'entry_type'   => UserGraduationType::class,
                'entry_options'  => array(
                    'attr'      => array('class' => 'graduation_type', 'data-required' => 'true'),
                ),
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true
             ))
            ->add('interests', CollectionType::class, array(
                'entry_type'   => UserAreaOfInterestType::class,
                'entry_options'  => array(
                    'attr'      => array('class' => 'interest', 'data-required' => 'true'),
                ),
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true
             ))
            ->add('register', SubmitType::class, array('label' => 'Register'));               
    }

     public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class
        ));
    }
}
