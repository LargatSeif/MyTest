<?php

namespace dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * race
 */
class race
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $info;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return race
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return race
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return race
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $chien;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chien = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add chien
     *
     * @param \dataBundle\Entity\race $chien
     * @return race
     */
    public function addChien(\dataBundle\Entity\race $chien)
    {
        $this->chien[] = $chien;

        return $this;
    }

    /**
     * Remove chien
     *
     * @param \dataBundle\Entity\race $chien
     */
    public function removeChien(\dataBundle\Entity\race $chien)
    {
        $this->chien->removeElement($chien);
    }

    /**
     * Get chien
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChien()
    {
        return $this->chien;
    }
}
