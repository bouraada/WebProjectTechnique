<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoachController extends Controller
{
    /**
     * @Route("/coach/dashboard", name="coachDashboard")
     */
    public function indexAction()
    {
        return $this->render('Coach/Dashboard.html.twig', [
        ]);
    }
}
