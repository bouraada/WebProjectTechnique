<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entaineur
 *
 * @ORM\Table(name="entaineur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntaineurRepository")
 */
class Entaineur
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
     * @ORM\Column(name="NomEntraineur", type="string", length=255)
     */
    private $nomEntraineur;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomEntraineur", type="string", length=255)
     */
    private $prenomEntraineur;

    /**
     * @var int
     *
     * @ORM\Column(name="AgeEntraineur", type="integer")
     */
    private $ageEntraineur;

    /**
     * @var int
     *
     * @ORM\Column(name="MobileEntraineur", type="integer")
     */
    private $mobileEntraineur;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUserEntraineur", type="integer")
     */
    private $idUserEntraineur;

    /**
     * @var string
     *
     * @ORM\Column(name="SpecialiteEntraineur", type="string", length=255)
     */
    private $specialiteEntraineur;

    /**
     * @ORM\OneToOne(targetEntity="Programme", mappedBy="entreneur")
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
     * Set nomEntraineur
     *
     * @param string $nomEntraineur
     *
     * @return Entaineur
     */
    public function setNomEntraineur($nomEntraineur)
    {
        $this->nomEntraineur = $nomEntraineur;

        return $this;
    }

    /**
     * Get nomEntraineur
     *
     * @return string
     */
    public function getNomEntraineur()
    {
        return $this->nomEntraineur;
    }

    /**
     * Set prenomEntraineur
     *
     * @param string $prenomEntraineur
     *
     * @return Entaineur
     */
    public function setPrenomEntraineur($prenomEntraineur)
    {
        $this->prenomEntraineur = $prenomEntraineur;

        return $this;
    }

    /**
     * Get prenomEntraineur
     *
     * @return string
     */
    public function getPrenomEntraineur()
    {
        return $this->prenomEntraineur;
    }

    /**
     * Set ageEntraineur
     *
     * @param integer $ageEntraineur
     *
     * @return Entaineur
     */
    public function setAgeEntraineur($ageEntraineur)
    {
        $this->ageEntraineur = $ageEntraineur;

        return $this;
    }

    /**
     * Get ageEntraineur
     *
     * @return int
     */
    public function getAgeEntraineur()
    {
        return $this->ageEntraineur;
    }

    /**
     * Set mobileEntraineur
     *
     * @param integer $mobileEntraineur
     *
     * @return Entaineur
     */
    public function setMobileEntraineur($mobileEntraineur)
    {
        $this->mobileEntraineur = $mobileEntraineur;

        return $this;
    }

    /**
     * Get mobileEntraineur
     *
     * @return int
     */
    public function getMobileEntraineur()
    {
        return $this->mobileEntraineur;
    }

    /**
     * Set idUserEntraineur
     *
     * @param integer $idUserEntraineur
     *
     * @return Entaineur
     */
    public function setIdUserEntraineur($idUserEntraineur)
    {
        $this->idUserEntraineur = $idUserEntraineur;

        return $this;
    }

    /**
     * Get idUserEntraineur
     *
     * @return int
     */
    public function getIdUserEntraineur()
    {
        return $this->idUserEntraineur;
    }

    /**
     * Set specialiteEntraineur
     *
     * @param string $specialiteEntraineur
     *
     * @return Entaineur
     */
    public function setSpecialiteEntraineur($specialiteEntraineur)
    {
        $this->specialiteEntraineur = $specialiteEntraineur;

        return $this;
    }

    /**
     * Get specialiteEntraineur
     *
     * @return string
     */
    public function getSpecialiteEntraineur()
    {
        return $this->specialiteEntraineur;
    }
}
