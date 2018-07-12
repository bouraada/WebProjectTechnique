<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\abonneType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Programmes;

class UserController extends Controller {

    /**
     * @Route("/user/home", name="userhome")
     */
    public function homeAction() {

        $id = $this->getUser()->getId();

        $charte = $this->getDoctrine()
                ->getRepository('AppBundle:Seance')
                ->findBy(array('idUser' => $id));

        return $this->render('User/Dashboard.html.twig', ['seancesList' => $charte]);
    }
    
    /**
     * @Route("/user/inscription", name="inscription")
     */
    public function inscriptionAction() {

        return $this->render('User/inscription.html.twig', []);
    }

    /**
     * @Route("/user/profil", name="userProfil")
     */
    public function profilAction() {
        $profil = $this->getUser();

        dump($profil);

        return $this->render('User/profil.html.twig', ['$profil' => $profil]);
    }

    /**
     * @Route("/user/calendrier", name="userDashboard")
     */
    public function CalendrierAction() {
        return $this->render('User/Calendrier.html.twig', [
        ]);
    }

    /**
     * @Route("/user/boutique", name="boutique")
     */
    public function BoutiqueAction() {

        $id = $this->getUser()->getId();

        $programm = $this->getDoctrine()
                ->getRepository('AppBundle:Programmes')
                ->findAll();

        return $this->render('User/boutique.html.twig', ['programmesList' => $programm
        ]);
    }

    /**
     * @Route("/user/mesperformances", name="userMesPerformances")
     */
    public function PerformancesAction() {
        return $this->render('User/MesPerformances.html.twig', [
        ]);
    }

    /**
     * @Route("/user/messeances", name="userMesSeances")
     */
    public function MesSeancesAction() {
        $id = $this->getUser()->getId();

        $seance = $this->getDoctrine()
                ->getRepository('AppBundle:Seance')
                ->findBy(array('idUser' => $id));

        return $this->render('User/MesSeances.html.twig', ['seancesList' => $seance]);
    }

    /**
     * @Route("/user/monabonnement", name="userMonProgramme")
     */
    public function MonProgrammeAction() {

        $id = $this->getUser()->getId();

        $programm = $this->getDoctrine()
                ->getRepository('AppBundle:Programmes')
                ->findBy(array('idUser' => $id));


        return $this->render('User/MonProgramme.html.twig', ['programmesList' => $programm]);
    }


    /**
     * @Route("/user/ficheprogramme/{nom}", name="userPresentationProgramme")
     */
    public function PresentationProgrammeAction($nom) {


        return $this->render('User/PresentationProgramme.html.twig', [
        ]);
    }

    /**
     * @Route("/user/payement", name="payement")
     */
    public function PayementAction() {
        return $this->render('User/Payement.html.twig', [
        ]);
    }

}
