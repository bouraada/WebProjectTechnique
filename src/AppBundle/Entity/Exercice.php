<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table(name="exercice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExerciceRepository")
 */
class Exercice
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
     * @ORM\Column(name="NomExercice", type="string", length=255)
     */
    private $nomExercice;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeExerice", type="string", length=255)
     */
    private $typeExerice;

    /**
     * @var int
     *
     * @ORM\Column(name="ChargeExercice", type="integer")
     */
    private $chargeExercice;

    /**
     * @var int
     *
     * @ORM\Column(name="DureeExercice", type="integer")
     */
    private $dureeExercice;

    /**
     * @var int
     *
     * @ORM\Column(name="FrequenceExercice", type="integer")
     */
    private $frequenceExercice;

    /**
     * @var string
     *
     * @ORM\Column(name="IntensiteExercice", type="string", length=255)
     */
    private $intensiteExercice;


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
     * Set nomExercice
     *
     * @param string $nomExercice
     *
     * @return Exercice
     */
    public function setNomExercice($nomExercice)
    {
        $this->nomExercice = $nomExercice;

        return $this;
    }

    /**
     * Get nomExercice
     *
     * @return string
     */
    public function getNomExercice()
    {
        return $this->nomExercice;
    }

    /**
     * Set typeExerice
     *
     * @param string $typeExerice
     *
     * @return Exercice
     */
    public function setTypeExerice($typeExerice)
    {
        $this->typeExerice = $typeExerice;

        return $this;
    }

    /**
     * Get typeExerice
     *
     * @return string
     */
    public function getTypeExerice()
    {
        return $this->typeExerice;
    }

    /**
     * Set chargeExercice
     *
     * @param integer $chargeExercice
     *
     * @return Exercice
     */
    public function setChargeExercice($chargeExercice)
    {
        $this->chargeExercice = $chargeExercice;

        return $this;
    }

    /**
     * Get chargeExercice
     *
     * @return int
     */
    public function getChargeExercice()
    {
        return $this->chargeExercice;
    }

    /**
     * Set dureeExercice
     *
     * @param integer $dureeExercice
     *
     * @return Exercice
     */
    public function setDureeExercice($dureeExercice)
    {
        $this->dureeExercice = $dureeExercice;

        return $this;
    }

    /**
     * Get dureeExercice
     *
     * @return int
     */
    public function getDureeExercice()
    {
        return $this->dureeExercice;
    }

    /**
     * Set frequenceExercice
     *
     * @param integer $frequenceExercice
     *
     * @return Exercice
     */
    public function setFrequenceExercice($frequenceExercice)
    {
        $this->frequenceExercice = $frequenceExercice;

        return $this;
    }

    /**
     * Get frequenceExercice
     *
     * @return int
     */
    public function getFrequenceExercice()
    {
        return $this->frequenceExercice;
    }

    /**
     * Set intensiteExercice
     *
     * @param string $intensiteExercice
     *
     * @return Exercice
     */
    public function setIntensiteExercice($intensiteExercice)
    {
        $this->intensiteExercice = $intensiteExercice;

        return $this;
    }

    /**
     * Get intensiteExercice
     *
     * @return string
     */
    public function getIntensiteExercice()
    {
        return $this->intensiteExercice;
    }
}