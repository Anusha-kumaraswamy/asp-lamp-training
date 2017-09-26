<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\AreaOfInterest;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class AreaOfInterestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', EntityType::class, array(
                        'class' => 'UserBundle:AreaOfInterest',
                        'choice_label' => 'name',
                        'expanded' => true,
                        'multiple' => true,
                    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => AreaOfInterest::class,
        ));
    }
}
