<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use UserBundle\Entity\Gender;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class GenderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', EntityType::class, array(
                        'class' => 'UserBundle:Gender',
                        'choice_label' => 'name',
                        'expanded' => true,
                    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Gender::class,
        ));
    }
}
