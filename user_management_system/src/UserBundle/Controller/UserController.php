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
use Doctrine\ORM\Decorator\EntityManagerDecorator;


class UserController extends Controller
{
    /**
     * @Route("/users", name="user_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('UserBundle:User');
        $users = $repo->findAll();
        if ($users == null) {
            echo "No user Found";
            die();
        }
        return $this->render('UserBundle:User:users.html.twig', array('users' => $users));
    }
    
    /**
     * @Route("/users/{id}", name="user_display", requirements={"page": "\d+"})
     */
    public function displayAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('UserBundle:User');
        $entities = $repo->find($id);
        if ($entities == null) {
            echo "No user Found";
            die();
        }
        return $this->render('UserBundle:User:user.html.twig', array('entities' => $entities));
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
     * @Route("/users/{id}/edit", name="user_edit", requirements={"id": "\d+"})
     */
    public function editAction($id, Request $request)
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
        
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('UserBundle:User');
        $entities = $repo->find($id);
        return $this->render('UserBundle:User:edit.html.twig', array('entities' => $entities, 'form' => $form->createView()));
    }

}
