<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueExercice
 *
 * @ORM\Table(name="historique_exercice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HistoriqueExerciceRepository")
 */
class HistoriqueExercice
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
     * @ORM\OneToOne(targetEntity="Exercice", mappedBy="historiqueExercice")
     */
    private $idExercice;
    
    
    /**
     * @ORM\OneToOne(targetEntity="Abonne", mappedBy="HistoriqueAbonne")
     */
    private $abonne;

    /**
     * @var string
     *
     * @ORM\Column(name="IdAbonne", type="string", length=255)
     */
    private $idAbonne;

    /**
     * @ORM\OneToOne(targetEntity="Programme", mappedBy="historiqueExercice")
     */
    private $idProgramme;

    /**
     * @ORM\OneToOne(targetEntity="Seance", mappedBy="historiqueExercice")
     */
    private $idSeance;
    
    
    
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
     * Set idExercice
     *
     * @param string $idExercice
     *
     * @return HistoriqueExercice
     */
    public function setIdExercice($idExercice)
    {
        $this->idExercice = $idExercice;

        return $this;
    }

    /**
     * Get idExercice
     *
     * @return string
     */
    public function getIdExercice()
    {
        return $this->idExercice;
    }

    /**
     * Set idAbonne
     *
     * @param string $idAbonne
     *
     * @return HistoriqueExercice
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
     * Set idProgramme
     *
     * @param string $idProgramme
     *
     * @return HistoriqueExercice
     */
    public function setIdProgramme($idProgramme)
    {
        $this->idProgramme = $idProgramme;

        return $this;
    }

    /**
     * Get idProgramme
     *
     * @return string
     */
    public function getIdProgramme()
    {
        return $this->idProgramme;
    }

    /**
     * Set idSeance
     *
     * @param string $idSeance
     *
     * @return HistoriqueExercice
     */
    public function setIdSeance($idSeance)
    {
        $this->idSeance = $idSeance;

        return $this;
    }

    /**
     * Get idSeance
     *
     * @return string
     */
    public function getIdSeance()
    {
        return $this->idSeance;
    }
}

