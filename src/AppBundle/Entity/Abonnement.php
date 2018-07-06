<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeAbonnement", type="string", length=255)
     */
    private $typeAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="NomAbonnement", type="string", length=255)
     */
    private $nomAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="PrixAbonneent", type="string", length=255)
     */
    private $prixAbonneent;

    /**
     * @var int
     *
     * @ORM\Column(name="PrixAbonnement", type="integer")
     */
    private $prixAbonnement;

    /**
     * @var int
     *
     * @ORM\Column(name="DureeAbonnement", type="integer")
     */
    private $dureeAbonnement;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeAbonnement
     *
     * @param string $typeAbonnement
     *
     * @return Abonnement
     */
    public function setTypeAbonnement($typeAbonnement)
    {
        $this->typeAbonnement = $typeAbonnement;

        return $this;
    }

    /**
     * Get typeAbonnement
     *
     * @return string
     */
    public function getTypeAbonnement()
    {
        return $this->typeAbonnement;
    }

    /**
     * Set nomAbonnement
     *
     * @param string $nomAbonnement
     *
     * @return Abonnement
     */
    public function setNomAbonnement($nomAbonnement)
    {
        $this->nomAbonnement = $nomAbonnement;

        return $this;
    }

    /**
     * Get nomAbonnement
     *
     * @return string
     */
    public function getNomAbonnement()
    {
        return $this->nomAbonnement;
    }

    /**
     * Set prixAbonneent
     *
     * @param string $prixAbonneent
     *
     * @return Abonnement
     */
    public function setPrixAbonneent($prixAbonneent)
    {
        $this->prixAbonneent = $prixAbonneent;

        return $this;
    }

    /**
     * Get prixAbonneent
     *
     * @return string
     */
    public function getPrixAbonneent()
    {
        return $this->prixAbonneent;
    }

    /**
     * Set prixAbonnement
     *
     * @param integer $prixAbonnement
     *
     * @return Abonnement
     */
    public function setPrixAbonnement($prixAbonnement)
    {
        $this->prixAbonnement = $prixAbonnement;

        return $this;
    }

    /**
     * Get prixAbonnement
     *
     * @return int
     */
    public function getPrixAbonnement()
    {
        return $this->prixAbonnement;
    }

    /**
     * Set dureeAbonnement
     *
     * @param integer $dureeAbonnement
     *
     * @return Abonnement
     */
    public function setDureeAbonnement($dureeAbonnement)
    {
        $this->dureeAbonnement = $dureeAbonnement;

        return $this;
    }

    /**
     * Get dureeAbonnement
     *
     * @return int
     */
    public function getDureeAbonnement()
    {
        return $this->dureeAbonnement;
    }
}