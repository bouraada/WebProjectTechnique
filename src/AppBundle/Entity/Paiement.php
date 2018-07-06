<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\Column(name="IdAbonne", type="string", length=255)
     */
    private $idAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="IdAbonnement", type="string", length=255)
     */
    private $idAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="DatePayement", type="string", length=255)
     */
    private $datePayement;

    /**
     * @var string
     *
     * @ORM\Column(name="DatePaiement", type="string", length=255)
     */
    private $datePaiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTransactionPaiement", type="date")
     */
    private $dateTransactionPaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="DernierChiffreCINPaiement", type="integer", nullable=true)
     */
    private $dernierChiffreCINPaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="TitulaireCINPaiement", type="string", length=255)
     */
    private $titulaireCINPaiement;


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
     * Set idAbonne
     *
     * @param string $idAbonne
     *
     * @return Paiement
     */
    public function setIdAbonne($idAbonne)
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }

    /**
     * Get idAbonne
     *
     * @return string
     */
    public function getIdAbonne()
    {
        return $this->idAbonne;
    }

    /**
     * Set idAbonnement
     *
     * @param string $idAbonnement
     *
     * @return Paiement
     */
    public function setIdAbonnement($idAbonnement)
    {
        $this->idAbonnement = $idAbonnement;

        return $this;
    }

    /**
     * Get idAbonnement
     *
     * @return string
     */
    public function getIdAbonnement()
    {
        return $this->idAbonnement;
    }

    /**
     * Set datePayement
     *
     * @param string $datePayement
     *
     * @return Paiement
     */
    public function setDatePayement($datePayement)
    {
        $this->datePayement = $datePayement;

        return $this;
    }

    /**
     * Get datePayement
     *
     * @return string
     */
    public function getDatePayement()
    {
        return $this->datePayement;
    }

    /**
     * Set datePaiement
     *
     * @param string $datePaiement
     *
     * @return Paiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return string
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set dateTransactionPaiement
     *
     * @param \DateTime $dateTransactionPaiement
     *
     * @return Paiement
     */
    public function setDateTransactionPaiement($dateTransactionPaiement)
    {
        $this->dateTransactionPaiement = $dateTransactionPaiement;

        return $this;
    }

    /**
     * Get dateTransactionPaiement
     *
     * @return \DateTime
     */
    public function getDateTransactionPaiement()
    {
        return $this->dateTransactionPaiement;
    }

    /**
     * Set dernierChiffreCINPaiement
     *
     * @param integer $dernierChiffreCINPaiement
     *
     * @return Paiement
     */
    public function setDernierChiffreCINPaiement($dernierChiffreCINPaiement)
    {
        $this->dernierChiffreCINPaiement = $dernierChiffreCINPaiement;

        return $this;
    }

    /**
     * Get dernierChiffreCINPaiement
     *
     * @return int
     */
    public function getDernierChiffreCINPaiement()
    {
        return $this->dernierChiffreCINPaiement;
    }

    /**
     * Set titulaireCINPaiement
     *
     * @param string $titulaireCINPaiement
     *
     * @return Paiement
     */
    public function setTitulaireCINPaiement($titulaireCINPaiement)
    {
        $this->titulaireCINPaiement = $titulaireCINPaiement;

        return $this;
    }

    /**
     * Get titulaireCINPaiement
     *
     * @return string
     */
    public function getTitulaireCINPaiement()
    {
        return $this->titulaireCINPaiement;
    }
}

