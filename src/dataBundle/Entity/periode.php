<?php

namespace dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * periode
 */
class periode
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $dateDebut;


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
     * Set dateDebut
     *
     * @param string $dateDebut
     * @return periode
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    /**
     * @var string
     */
    private $dateFin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $chaleur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chaleur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     * @return periode
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Add chaleur
     *
     * @param \dataBundle\Entity\etat $chaleur
     * @return periode
     */
    public function addChaleur(\dataBundle\Entity\etat $chaleur)
    {
        $this->chaleur[] = $chaleur;

        return $this;
    }

    /**
     * Remove chaleur
     *
     * @param \dataBundle\Entity\etat $chaleur
     */
    public function removeChaleur(\dataBundle\Entity\etat $chaleur)
    {
        $this->chaleur->removeElement($chaleur);
    }

    /**
     * Get chaleur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChaleur()
    {
        return $this->chaleur;
    }
}
