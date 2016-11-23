<?php

namespace dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * etat
 */
class etat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $vente;

    /**
     * @var string
     */
    private $adoption;

    /**
     * @var string
     */
    private $chaleur;


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
     * Set vente
     *
     * @param string $vente
     * @return etat
     */
    public function setVente($vente)
    {
        $this->vente = $vente;

        return $this;
    }

    /**
     * Get vente
     *
     * @return string 
     */
    public function getVente()
    {
        return $this->vente;
    }

    /**
     * Set adoption
     *
     * @param string $adoption
     * @return etat
     */
    public function setAdoption($adoption)
    {
        $this->adoption = $adoption;

        return $this;
    }

    /**
     * Get adoption
     *
     * @return string 
     */
    public function getAdoption()
    {
        return $this->adoption;
    }

    /**
     * Set chaleur
     *
     * @param string $chaleur
     * @return etat
     */
    public function setChaleur($chaleur)
    {
        $this->chaleur = $chaleur;

        return $this;
    }

    /**
     * Get chaleur
     *
     * @return string 
     */
    public function getChaleur()
    {
        return $this->chaleur;
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
     * @param \dataBundle\Entity\chien $chien
     * @return etat
     */
    public function addChien(\dataBundle\Entity\chien $chien)
    {
        $this->chien[] = $chien;

        return $this;
    }

    /**
     * Remove chien
     *
     * @param \dataBundle\Entity\chien $chien
     */
    public function removeChien(\dataBundle\Entity\chien $chien)
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
    /**
     * @var \dataBundle\Entity\periode
     */
    private $periode;


    /**
     * Set periode
     *
     * @param \dataBundle\Entity\periode $periode
     * @return etat
     */
    public function setPeriode(\dataBundle\Entity\periode $periode = null)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \dataBundle\Entity\periode 
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}
