<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin/dashboard", name="userDashboard")
     */
    public function indexAction()
    {
        return $this->render('Admin/Dashboard.html.twig', [
        ]);
    }
}
