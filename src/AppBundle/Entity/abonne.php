<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abonne
 *
 * @ORM\Table(name="abonne")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\abonneRepository")
 */
class abonne
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
     * @ORM\Column(name="iduser", type="string", length=255)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="NomAbonne", type="string", length=255)
     */
    private $nomAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomAbonne", type="string", length=255)
     */
    private $prenomAbonne;

    /**
     * @var int
     *
     * @ORM\Column(name="AgeAbonne", type="integer")
     */
    private $ageAbonne;

    /**
     * @var int
     *
     * @ORM\Column(name="ancienneteAbonne", type="integer")
     */
    private $ancienneteAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseAbonne", type="string", length=255)
     */
    private $adresseAbonne;

    /**
     * @var int
     *
     * @ORM\Column(name="mobileAbonne", type="integer")
     */
    private $mobileAbonne;


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
     * Set iduser
     *
     * @param string $iduser
     *
     * @return abonne
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return string
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set nomAbonne
     *
     * @param string $nomAbonne
     *
     * @return abonne
     */
    public function setNomAbonne($nomAbonne)
    {
        $this->nomAbonne = $nomAbonne;

        return $this;
    }

    /**
     * Get nomAbonne
     *
     * @return string
     */
    public function getNomAbonne()
    {
        return $this->nomAbonne;
    }

    /**
     * Set prenomAbonne
     *
     * @param string $prenomAbonne
     *
     * @return abonne
     */
    public function setPrenomAbonne($prenomAbonne)
    {
        $this->prenomAbonne = $prenomAbonne;

        return $this;
    }

    /**
     * Get prenomAbonne
     *
     * @return string
     */
    public function getPrenomAbonne()
    {
        return $this->prenomAbonne;
    }

    /**
     * Set ageAbonne
     *
     * @param integer $ageAbonne
     *
     * @return abonne
     */
    public function setAgeAbonne($ageAbonne)
    {
        $this->ageAbonne = $ageAbonne;

        return $this;
    }

    /**
     * Get ageAbonne
     *
     * @return int
     */
    public function getAgeAbonne()
    {
        return $this->ageAbonne;
    }

    /**
     * Set ancienneteAbonne
     *
     * @param integer $ancienneteAbonne
     *
     * @return abonne
     */
    public function setAncienneteAbonne($ancienneteAbonne)
    {
        $this->ancienneteAbonne = $ancienneteAbonne;

        return $this;
    }

    /**
     * Get ancienneteAbonne
     *
     * @return int
     */
    public function getAncienneteAbonne()
    {
        return $this->ancienneteAbonne;
    }

    /**
     * Set adresseAbonne
     *
     * @param string $adresseAbonne
     *
     * @return abonne
     */
    public function setAdresseAbonne($adresseAbonne)
    {
        $this->adresseAbonne = $adresseAbonne;

        return $this;
    }

    /**
     * Get adresseAbonne
     *
     * @return string
     */
    public function getAdresseAbonne()
    {
        return $this->adresseAbonne;
    }

    /**
     * Set mobileAbonne
     *
     * @param integer $mobileAbonne
     *
     * @return abonne
     */
    public function setMobileAbonne($mobileAbonne)
    {
        $this->mobileAbonne = $mobileAbonne;

        return $this;
    }

    /**
     * Get mobileAbonne
     *
     * @return int
     */
    public function getMobileAbonne()
    {
        return $this->mobileAbonne;
    }
}
