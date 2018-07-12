<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * Abonnement Service.
 */
class AbonnementService {

    private $em;
    private $emAuth;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    /**
     * 
     * @return type
     */
    public function getAllAbonnement() {
        $abonnement = $this->em->getRepository('AppBundle:Abonnement')->findAll();

        return $abonnement;
    }

}
