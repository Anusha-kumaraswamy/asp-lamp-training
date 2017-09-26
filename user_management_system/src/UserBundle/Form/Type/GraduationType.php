<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\Graduation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class GraduationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', EntityType::class, array(
                        'class' => 'UserBundle:Graduation',
                        'choice_label' => 'name',
                        'expanded' => true,
                        'multiple' =>true
                    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Graduation::class,
        ));
    }
}
