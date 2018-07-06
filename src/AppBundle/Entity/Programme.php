<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProgrammeRepository")
 */
class Programme
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
     * @ORM\Column(name="NomProgramme", type="string", length=255)
     */
    private $nomProgramme;

    /**
     * @var string
     *
     * @ORM\Column(name="CoachProgramme", type="string", length=255)
     */
    private $coachProgramme;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeProgramme", type="string", length=255)
     */
    private $typeProgramme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ancienneteProgramme", type="date")
     */
    private $ancienneteProgramme;

    /**
     * @ORM\OneToOne(targetEntity="HistoriqueAbonnement", inversedBy="historiqueabonnement")
     * @ORM\JoinColumn(name="HistoriqueAbonnement_id", referencedColumnName="id")
     */
    private $HistoriqueAbonnement;
    
    
    
     /**
     * @ORM\OneToOne(targetEntity="HistoriqueExercice", inversedBy="idProgramme")
     * @ORM\JoinColumn(name="HistoriqueExercice_id", referencedColumnName="id")
     */
    private $historiqueExercice;
    

    
    /**
     * @ORM\OneToOne(targetEntity="Exercice", mappedBy="programme")
     */
    private $Exercice;
    
   
     /**
     * @ORM\ManyToMany(targetEntity="abonne")
     * @ORM\JoinTable(name="programme_abonne",
     *      joinColumns={@ORM\JoinColumn(name="Programme_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="abonne_id", referencedColumnName="id")}
     *      )
     */   
    private $abonnes;  
   
    
    /**
     * @ORM\OneToOne(targetEntity="Entaineur", inversedBy="programme")
     * @ORM\JoinColumn(name="Entraineur_id", referencedColumnName="id")
     */
    private $entreneur;
    
    
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
     * Set nomProgramme
     *
     * @param string $nomProgramme
     *
     * @return Programme
     */
    public function setNomProgramme($nomProgramme)
    {
        $this->nomProgramme = $nomProgramme;

        return $this;
    }

    /**
     * Get nomProgramme
     *
     * @return string
     */
    public function getNomProgramme()
    {
        return $this->nomProgramme;
    }

    /**
     * Set cochProgramme
     *
     * @param string $cochProgramme
     *
     * @return Programme
     */
    public function setCochProgramme($cochProgramme)
    {
        $this->cochProgramme = $cochProgramme;

        return $this;
    }

    /**
     * Get cochProgramme
     *
     * @return string
     */
    public function getCochProgramme()
    {
        return $this->cochProgramme;
    }

    /**
     * Set typeProgramme
     *
     * @param string $typeProgramme
     *
     * @return Programme
     */
    public function setTypeProgramme($typeProgramme)
    {
        $this->typeProgramme = $typeProgramme;

        return $this;
    }

    /**
     * Get typeProgramme
     *
     * @return string
     */
    public function getTypeProgramme()
    {
        return $this->typeProgramme;
    }

    /**
     * Set ancienneteProgramme
     *
     * @param \DateTime $ancienneteProgramme
     *
     * @return Programme
     */
    public function setAncienneteProgramme($ancienneteProgramme)
    {
        $this->ancienneteProgramme = $ancienneteProgramme;

        return $this;
    }

    /**
     * Get ancienneteProgramme
     *
     * @return \DateTime
     */
    public function getAncienneteProgramme()
    {
        return $this->ancienneteProgramme;
    }

    /**
     * Set coachProgramme
     *
     * @param string $coachProgramme
     *
     * @return Programme
     */
    public function setCoachProgramme($coachProgramme)
    {
        $this->coachProgramme = $coachProgramme;

        return $this;
    }

    /**
     * Get coachProgramme
     *
     * @return string
     */
    public function getCoachProgramme()
    {
        return $this->coachProgramme;
    }
        public function __construct() {
        $this->abonnes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
