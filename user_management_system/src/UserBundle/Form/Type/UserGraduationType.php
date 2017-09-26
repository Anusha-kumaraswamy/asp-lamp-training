<?php


namespace UserBundle\Form\Type;

use UserBundle\Entity\UserGraduation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class UserGraduationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('graduation', EntityType::class, array(
                'class' => 'UserBundle:Graduation',
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false,
                ))
                ->add('instituteName');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => UserGraduation::class,
        ));
    }
}