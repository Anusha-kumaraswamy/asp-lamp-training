<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\BloodGroup;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\Type\BloodGroupType;
use UserBundle\Entity\Gender;
use UserBundle\Form\Type\GenderType;
use UserBundle\Form\Type\GraduationType;
use UserBundle\Form\Type\AreaOfInterestType;
use UserBundle\Entity\Graduation;
use UserBundle\Entity\AreaOfInterest;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function manageAction(Request $request)
    {        
        $em = $this->getDoctrine()->getManager();
        $genders = $em->getRepository('UserBundle:Gender')->findAll();
        $bloodGroups = $em->getRepository('UserBundle:BloodGroup')->findAll();
        $graduationLevels = $em->getRepository('UserBundle:Graduation')->findAll();
        $interests = $em->getRepository('UserBundle:AreaOfInterest')->findAll();
        
        $newGender = new Gender();
        $genderForm = $this->createForm(GenderType::class, $newGender);
        $genderForm->handleRequest($request);
        
        if ($genderForm->isSubmitted() && $genderForm->isValid()) {
            $genders = $genderForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($genders);
            $em->flush();

            return $this->redirectToRoute('admin');
        } 
        
        $newBloodGroup = new BloodGroup();
        $bloodGroupForm = $this->createForm(BloodGroupType::class, $newBloodGroup);
        $bloodGroupForm->handleRequest($request);
        
        if ($bloodGroupForm->isSubmitted() && $bloodGroupForm->isValid()) {
            $bloodGroups = $bloodGroupForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($bloodGroups);
            $em->flush();

            return $this->redirectToRoute('admin');
        } 
        
        $newGraduationLevel = new Graduation();
        $graduationLevelForm = $this->createForm(GraduationType::class, $newGraduationLevel);
        $graduationLevelForm->handleRequest($request);
        
        if ($graduationLevelForm->isSubmitted() && $graduationLevelForm->isValid()) {
            $graduationLevels = $graduationLevelForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($graduationLevels);
            $em->flush();

            return $this->redirectToRoute('admin');
        } 
        
        $newInterest = new AreaOfInterest();
        $interestForm = $this->createForm(AreaOfInterestType::class, $newInterest);
        $interestForm->handleRequest($request);
        
        if ($interestForm->isSubmitted() && $interestForm->isValid()) {
            $interests = $interestForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($interests);
            $em->flush();

            return $this->redirectToRoute('admin');
        } 
        
        return $this->render('UserBundle:User:admin.html.twig', array('genders' => $genders,
                                                                      'bloodGroups' => $bloodGroups,
                                                                      'graduationLevels' => $graduationLevels,
                                                                      'interests' => $interests,
                                                                      'genderForm' => $genderForm->createView(),                                                                      
                                                                      'bloodGroupForm' => $bloodGroupForm->createView(),
                                                                      'graduationForm' => $graduationLevelForm->createView(),
                                                                      'interestForm' => $interestForm->createView()
                                                                    ));
    }
    
    /**
     * @Route("/admin/remove/{$tableName}/{$id}", name="admin_remove")
     */
    public function removeAction($id, $tableName)
    {        
        $em = $this->getDoctrine()->getManager();
        switch ($tableName) {
        case 'gender':
            $entity = $em->getRepository(Gender::class)->find($id);
            break;
        case 'bloodGroup':
            $entity = $em->getRepository(BloodGroup::class)->find($id);
            break;
        case 'graduation':
            $entity = $em->getRepository(Graduation::class)->find($id);
            break;
        case 'areaOfInterest':
            $entity = $em->getRepository(AreaOfInterest::class)->find($id);
            break;
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirectToRoute('admin');
    }
}