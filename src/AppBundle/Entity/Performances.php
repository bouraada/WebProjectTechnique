<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Performances
 *
 * @ORM\Table(name="performances")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PerformancesRepository")
 */
class Performances {

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_perf", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerf;

    /**
     * @ORM\ManyToOne(targetEntity="Seance")
     * @ORM\JoinColumn(name="id_sea", referencedColumnName="id_sea")
     */
    private $idSeance;

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Performances
     */
    public function setNote($note) {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Get idPerf
     *
     * @return integer
     */
    public function getIdPerf() {
        return $this->idPerf;
    }


    /**
     * Set idSeance
     *
     * @param \AppBundle\Entity\Seance $idSeance
     *
     * @return Performances
     */
    public function setIdSeance(\AppBundle\Entity\Seance $idSeance)
    {
        $this->idSeance = $idSeance;

        return $this;
    }

    /**
     * Get idSeance
     *
     * @return \AppBundle\Entity\Seance
     */
    public function getIdSeance()
    {
        return $this->idSeance;
    }
}
