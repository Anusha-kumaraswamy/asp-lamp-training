<?php

namespace UserBundle\Form\Type;

use UserBundle\Entity\UserAreaOfInterest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class UserAreaOfInterestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('interest', EntityType::class, array(
                'class' => 'UserBundle:UserAreaOfInterest',
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false,
                ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => UserAreaOfInterest::class,
        ));
    }
}