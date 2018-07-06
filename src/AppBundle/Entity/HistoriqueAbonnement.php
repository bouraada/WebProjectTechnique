<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueAbonnement
 *
 * @ORM\Table(name="historique_abonnement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HistoriqueAbonnementRepository")
 */
class HistoriqueAbonnement
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
     * @ORM\Column(name="id_abonne", type="string", length=255)
     */
    private $idAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="ancienAbonnement", type="string", length=255)
     */
    private $ancienAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="nouveauAbonnement", type="string", length=255)
     */
    private $nouveauAbonnement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateChangementAbonnement", type="date")
     */
    private $dateChangementAbonnement;
    
    

    /**
     * @ORM\OneToOne(targetEntity="Abonnement", mappedBy="HistoriqueAbonnement")
     */
    private $historiqueabonnement;
    
      /**
     * @ORM\OneToOne(targetEntity="Abonne", mappedBy="HistoriqueAbonne")
     */
    private $abonne;
    
      /**
     * @ORM\OneToOne(targetEntity="Programme", mappedBy="HistoriqueAbonnement")
     */
    private $programme;
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
     * @return HistoriqueAbonnement
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
     * Set ancienAbonnement
     *
     * @param string $ancienAbonnement
     *
     * @return HistoriqueAbonnement
     */
    public function setAncienAbonnement($ancienAbonnement)
    {
        $this->ancienAbonnement = $ancienAbonnement;

        return $this;
    }

    /**
     * Get ancienAbonnement
     *
     * @return string
     */
    public function getAncienAbonnement()
    {
        return $this->ancienAbonnement;
    }

    /**
     * Set nouveauAbonnement
     *
     * @param string $nouveauAbonnement
     *
     * @return HistoriqueAbonnement
     */
    public function setNouveauAbonnement($nouveauAbonnement)
    {
        $this->nouveauAbonnement = $nouveauAbonnement;

        return $this;
    }

    /**
     * Get nouveauAbonnement
     *
     * @return string
     */
    public function getNouveauAbonnement()
    {
        return $this->nouveauAbonnement;
    }

    /**
     * Set dateChangementAbonnement
     *
     * @param \DateTime $dateChangementAbonnement
     *
     * @return HistoriqueAbonnement
     */
    public function setDateChangementAbonnement($dateChangementAbonnement)
    {
        $this->dateChangementAbonnement = $dateChangementAbonnement;

        return $this;
    }

    /**
     * Get dateChangementAbonnement
     *
     * @return \DateTime
     */
    public function getDateChangementAbonnement()
    {
        return $this->dateChangementAbonnement;
    }
}
