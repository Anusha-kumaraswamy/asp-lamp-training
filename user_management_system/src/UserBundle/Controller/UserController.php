<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\User;
use UserBundle\Entity\UserAreaOfInterest;
use UserBundle\Entity\UserContactNumber;
use UserBundle\Entity\UserMailAddress;
use UserBundle\Entity\UserGraduation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Form\Type\UserType;
use Doctrine\ORM\EntityManagerInterface;


class UserController extends Controller
{
    /**
     * @Route("/users", name="user_list")
     */
    public function listAction()
    {
        $users = array (['login_name' => 'aarthi','id' =>1], ['login_name' => 'anu','id' =>2], ['login_name' => 'pavi','id' =>3]); 
        return $this->render('UserBundle:User:userList.html.twig', array('users' => $users));
    }
    
    /**
     * @Route("/users/{id}", name="user_display", requirements={"page": "\d+"})
     */
    public function displayAction()
    {
        $entities = array (['login_name' => 'aarthi','first_name' =>'aarthi', 'last_name' => 'kumar']);
        return $this->render('UserBundle:User:userProfile.html.twig', array('entities' => $entities));
    }
    
    /**
     * @Route("/users/new", name="user_new")
     */
    public function newAction(Request $request)
    {
        $user = new User();
       
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request); 
               
        if ($form->isSubmitted()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new Response(
                'Saved'
                
            );
        } 
        
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
