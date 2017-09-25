<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use UserBundle\Entity\BloodGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BloodGroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', EntityType::class, array(
                        'class' => 'UserBundle:BloodGroup',
                        'choice_label' => 'name',
                    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => BloodGroup::class,
        ));
    }
}
