<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seance
 *
 * @ORM\Table(name="seance")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeanceRepository")
 */
class Seance
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateSeance", type="datetime")
     */
    private $dateSeance;

    /**
     * @var int
     *
     * @ORM\Column(name="DureeSeance", type="integer")
     */
    private $dureeSeance;

    /**
     * @var string
     *
     * @ORM\Column(name="codeSeance", type="string", length=255)
     */
    private $codeSeance;

    /**
     * @var string
     *
     * @ORM\Column(name="LibeleSeance", type="string", length=255)
     */
    private $libeleSeance;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleSeance", type="string", length=255)
     */
    private $libelleSeance;


    
    /**
     * @ORM\OneToOne(targetEntity="HistoriqueExercice", inversedBy="idSeance")
     * @ORM\JoinColumn(name="HistoriqueExercice_id", referencedColumnName="id")
     */
    private $historiqueExercice;

    
    
    
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
     * Set dateSeance
     *
     * @param \DateTime $dateSeance
     *
     * @return Seance
     */
    public function setDateSeance($dateSeance)
    {
        $this->dateSeance = $dateSeance;

        return $this;
    }

    /**
     * Get dateSeance
     *
     * @return \DateTime
     */
    public function getDateSeance()
    {
        return $this->dateSeance;
    }

    /**
     * Set dureeSeance
     *
     * @param integer $dureeSeance
     *
     * @return Seance
     */
    public function setDureeSeance($dureeSeance)
    {
        $this->dureeSeance = $dureeSeance;

        return $this;
    }

    /**
     * Get dureeSeance
     *
     * @return int
     */
    public function getDureeSeance()
    {
        return $this->dureeSeance;
    }

    /**
     * Set codeSeance
     *
     * @param string $codeSeance
     *
     * @return Seance
     */
    public function setCodeSeance($codeSeance)
    {
        $this->codeSeance = $codeSeance;

        return $this;
    }

    /**
     * Get codeSeance
     *
     * @return string
     */
    public function getCodeSeance()
    {
        return $this->codeSeance;
    }

    /**
     * Set libeleSeance
     *
     * @param string $libeleSeance
     *
     * @return Seance
     */
    public function setLibeleSeance($libeleSeance)
    {
        $this->libeleSeance = $libeleSeance;

        return $this;
    }

    /**
     * Get libeleSeance
     *
     * @return string
     */
    public function getLibeleSeance()
    {
        return $this->libeleSeance;
    }

    /**
     * Set libelleSeance
     *
     * @param string $libelleSeance
     *
     * @return Seance
     */
    public function setLibelleSeance($libelleSeance)
    {
        $this->libelleSeance = $libelleSeance;

        return $this;
    }

    /**
     * Get libelleSeance
     *
     * @return string
     */
    public function getLibelleSeance()
    {
        return $this->libelleSeance;
    }
}
