<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBundle\Form\Type;

use UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('loginName', TextType::class)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('dateOfBirth', DateType::class)
            ->add('gender', EntityType::class, array(
                        'class' => 'UserBundle:Gender',
                        'choice_label' => 'name',
                        'expanded' => true,
                    ))
            ->add('bloodGroup', EntityType::class, array(
                        'class' => 'UserBundle:BloodGroup',
                        'choice_label' => 'name',
                    ))
            ->add('emailIds', CollectionType::class, array(
                'entry_type'   => UserMailAddressType::class,
                'entry_options'  => array(
                    'attr'      => array('class' => 'emailId'),
                ),
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true
             ))
            ->add('mobileNumbers', CollectionType::class, array(
                'entry_type'   => UserContactNumberType::class,
                'entry_options'  => array(
                    'attr'      => array('class' => 'number'),
                ),
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true
             ))
            ->add('education', CollectionType::class, array(
                'entry_type'   => UserGraduationType::class,
                'entry_options'  => array(
                    'attr'      => array('class' => 'graduation_type'),
                ),
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true
             ))
            ->add('interests', CollectionType::class, array(
                'entry_type'   => UserAreaOfInterestType::class,
                'entry_options'  => array(
                    'attr'      => array('class' => 'interest'),
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
            'data_class' => User::class,
        ));
    }
}
