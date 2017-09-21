<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UserController extends Controller
{
    /**
     * @Route("/users", name="user_list")
     */
    public function listAction()
    {
        $users = array (['loginName' => 'aarthi','id' =>1], ['loginName' => 'anu','id' =>2], ['loginName' => 'pavi','id' =>3]); 
        return $this->render('UserBundle:User:userList.html.twig', array('users' => $users));
    }
    
    /**
     * @Route("/users/{id}", name="user_display", requirements={"page": "\d+"})
     */
    public function displayAction()
    {
        return $this->render('UserBundle:User:userProfile.html.twig');
    }
    
    /**
     * @Route("/users/new", name="user_new")
     */
    public function newAction()
    {
        $formElements = new Form();
        $form = $this->createFormBuilder($formElements)
            ->add('loginName', TextType::class)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('dateOfBirth', DateType::class)
            ->add('bloodGroup', ChoiceType::class,  array(
               'choices' => array(
                    'A+' => 'A+',
                    'B+' => 'B+',
                    'AB+' => 'AB+',
                )))
            ->add('gender', ChoiceType::class,   array(
                'choices' => array(
                    'male' => 'male',
                    'female' => 'female',
                ),
                'expanded' => true,
                ))
            ->add('areaOfInterest', ChoiceType::class,   array(
                'choices' => array(
                    'c' => 'c',
                    'c++' => 'c++',
                ),
                'expanded' => true,
                'multiple' => true
                ))
            ->add('register', SubmitType::class, array('label' => 'Register'))
            ->getForm();

        return $this->render('UserBundle:User:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/users/edit/{id}", name="user_edit", requirements={"id": "\d+"})
     */
    public function editAction()
    {
        return $this->render('UserBundle:User:edit.html.twig');
    }
    
}
