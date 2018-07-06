<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/user/home", name="userhome")
     */
    public function homeAction()
    {
        $user = $this->getUser()->getId();
        dump($user);

        
        return $this->render('User/Dashboard.html.twig', [ 'id'=> $user ]);
    }
 
    /**
     * @Route("/user/profil/{id}", name="userProfil")
     */
    public function profilAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $abonne=$em->getRepository('AppBundle:abonne')->find($id);
        dump($abonne);

        return$this->render('User/profil.html.twig',['abonne'=>$abonne]);
    }

    /**
     * @Route("/user/calendrier", name="userDashboard")
     */
    public function CalendrierAction()
    {
        return $this->render('User/Calendrier.html.twig', [
        ]);
    }

    /**
     * @Route("/user/mesperformances", name="userMesPerformances")
     */
    public function PerformancesAction()
    {
        return $this->render('User/MesPerformances.html.twig', [
        ]);
    }

    /**
     * @Route("/user/messeances", name="userMesSeances")
     */
    public function MesSeancesAction()
    {
        return $this->render('User/MesSeances.html.twig', [
        ]);
    }

    /**
     * @Route("/user/monprogramme", name="userMonProgramme")
     */
    public function MonProgrammeAction()
    {
        return $this->render('User/MonProgramme.html.twig', [
        ]);
    }

        /**
     * @Route("/user/ficheprogramme/{nom}", name="userPresentationProgramme")
     */
    public function PresentationProgrammeAction($nom)
    {
        
        
        return $this->render('User/PresentationProgramme.html.twig', [
        ]);
    }

    
}
