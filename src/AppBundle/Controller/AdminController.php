<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \AppBundle\Entity\Programmes;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use \Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use \AppBundle\Entity\Seance;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;

class AdminController extends Controller {

    /**
     * @Route("/coach/dashboard", name="adminDashboard")
     */
    public function indexAction() {
        $id = $this->getUser()->getId();

        $charte = $this->getDoctrine()
                ->getRepository('AppBundle:Seance')
                ->findBy(array('idUser' => $id));

        return $this->render('Admin/Dashboard.html.twig', [
                    'seancesList' => $charte
        ]);
    }

    /**
     * @Route("/coach/monprogramme", name="coachMonProgramme")
     */
    public function MonProgrammeAction() {

        $id = $this->getUser()->getId();

        $programm = $this->getDoctrine()
                ->getRepository('AppBundle:Programmes')
                ->findBy(array('idUser' => $id));


        return $this->render('Admin/MonProgramme.html.twig', ['programmesList' => $programm]);
    }

    /**
     * @Route("/coach/profil", name="coachProfil")
     */
    public function profilAction() {
        $profil = $this->getUser();

        dump($profil);

        return $this->render('Admin/profil.html.twig', ['$profil' => $profil]);
    }

    /**
     * @Route("/coach/ajouterprogramme", name="ajouterprogrammecoach")
     */
    public function ajouterprogrammeAction(Request $request) {

        $prog = new Programmes();

        $form = $this->createFormBuilder($prog)
                ->add('Titre', TextType::class, array('label' => 'Titre', 'attr' => array('class' => 'form-control')))
                ->add('Description', TextType::class, array('label' => 'Description', 'attr' => array('class' => 'form-control')))
                ->add('Statut', ChoiceType::class, array('label' => 'Statut',
                    'choices' => array('Active' => true, 'Desactive' => false), 'attr' => array('class' => 'form-control')))
                ->add('save', SubmitType::class, array('label' => 'Save', 'attr' => array('class' => 'btn col-lg-4 btn-success')))
                ->add('Renitialiser', ResetType::class, array('label' => 'Renitialiser', 'attr' => array('class' => 'btn col-lg-4 btn-danger')))
                ->getForm();

        $iduser = $this->getUser()->getId();
        $submittedForm = $form->handleRequest($request);

        if ($submittedForm->isSubmitted() && $submittedForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $prog->setIdUser($this->getUser());
            $prog->setStatut(1);
            $em->persist($prog);
            $em->flush();

            return $this->redirectToRoute('coachMonProgramme', ['form' => $form->createView()]);
        }

        return $this->render('Admin/ajouterprogramme.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/coach/messeances", name="coachMesSeances")
     */
    public function MesSeancesAction() {
        $id = $this->getUser()->getId();

        $seance = $this->getDoctrine()
                ->getRepository('AppBundle:Seance')
                ->findBy(array('idUser' => $id));

        return $this->render('Admin/MesSeances.html.twig', ['seancesList' => $seance]);
    }

    /**
     * @Route("/coach/ajouterseance", name="ajouterseancecoach")
     */
    public function ajouterseanceAction(Request $request) {

        $seance = new Seance;

        $form = $this->createFormBuilder($seance)   
                ->add('debut', DateTimeType::class)
                ->add('fin', DateTimeType::class)
              
              
                ->add('statut', ChoiceType::class, array(
                    'label' => 'Statut',
                    'choices' => array('Active' => true, 'Desactive' => false),
                    'attr' => array('class' => 'form-control')))
                ->add('save', SubmitType::class, array('label' => 'Save', 'attr' => array('class' => 'btn col-lg-4 btn-success')))
                ->add('Renitialiser', ResetType::class, array('label' => 'Renitialiser', 'attr' => array('class' => 'btn col-lg-4 btn-danger')))
                ->getForm();

           $submittedForm = $form->handleRequest($request);
           dump($submittedForm->getData());

            if ($submittedForm->isSubmitted() && $submittedForm->isValid()) {          
                //$em = $this->getDoctrine()->getManager();

                //$dateAsObject = $serializer->denormalize('2016-01-01T00:00:00+00:00', \DateTime::class);
                //$seance->setDebut(new \DateTime("now"));
                //$seance->setFin(new \DateTime("now"));
                //$seance->setIdUser(($this->getUser()));
                //$seance->setStatut(1);
                //$em->persist($seance);
                //$em->flush();

            return $this->redirectToRoute('coachMesSeances', ['form' => $form->createView()]);
        }

        return $this->render('Admin/ajouterseance.html.twig', ['form' => $form->createView()]);
    }

}
