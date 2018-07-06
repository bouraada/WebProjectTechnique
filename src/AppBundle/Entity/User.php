<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\OneToOne(targetEntity="abonne", inversedBy="iduser")
     * @ORM\JoinColumn(name="abonne_id", referencedColumnName="id")
     *      
     */
    private $idabonne;

    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
