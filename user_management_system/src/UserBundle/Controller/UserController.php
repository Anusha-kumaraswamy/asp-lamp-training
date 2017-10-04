<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\User;
use UserBundle\Entity\UserAreaOfInterest;
use UserBundle\Entity\UserContactNumber;
use UserBundle\Entity\UserMailAddress;
use UserBundle\Entity\UserGraduation;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\Type\UserType;

class UserController extends Controller
{
    /**
     * @Route("/users", name="user_list")
     */
    public function listAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('UserBundle:User');
        $users = $repo->findAll();
        
        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
                    $users, 
                    $request->query->getInt('page', 1),
                    $request->query->getInt('limit', 5)
                );
        return $this->render('UserBundle:User:users.html.twig', array('limitedUsers' => $result));
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
        $user->addEmailId(new UserMailAddress());
        $user->addMobileNumber(new UserContactNumber());
//        $user->addEducation(new UserGraduation());
//        $user->addInterest(new UserAreaOfInterest());
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request); 
      
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_list');
        } 
        
        return $this->render('UserBundle:User:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/users/{id}/edit", name="user_edit", requirements={"id": "\d+"})
     */
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('UserBundle:User');
        $entities = $repo->find($id);
        
        $form = $this->createForm(UserType::class, $entities);
        $form->handleRequest($request); 
               
        if ($form->isSubmitted() && $form->isValid()) {
            $entities = $form->getData();          
            $em->flush();

            return $this->redirectToRoute('user_list');
        } 
        
        return $this->render('UserBundle:User:form.html.twig', array('entities' => $entities, 'form' => $form->createView()));
    }

}
