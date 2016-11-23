<?php

namespace userBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * delegation
 */
class delegation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $long;

    /**
     * @var string
     */
    private $lat;   

    /**
     * @var \userBundle\Entity\gouvernorat
     */
    private $gouvernorat;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gouvernorat = new ArrayCollection();
    }

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
     * Set nom
     *
     * @param string $nom
     * @return delegation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set long
     *
     * @param string $long
     * @return delegation
     */
    public function setLong($long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * Get long
     *
     * @return string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return delegation
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }
    /**
     * Set gouvernorat
     *
     * @param \userBundle\Entity\gouvernorat
     * @return delegation
     */
    public function setGouvernorat(gouvernorat $gouvernorat = null)
    {
        $this->gouvernorat = $gouvernorat;

        return $this;
    }

    /**
     * Get gouvernorat
     *
     * @return \userBundle\Entity\gouvernorat
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $local;


    /**
     * Add local
     *
     * @param \userBundle\Entity\local $local
     * @return delegation
     */
    public function addLocal(\userBundle\Entity\local $local)
    {
        $this->local[] = $local;

        return $this;
    }

    /**
     * Remove local
     *
     * @param \userBundle\Entity\local $local
     */
    public function removeLocal(\userBundle\Entity\local $local)
    {
        $this->local->removeElement($local);
    }

    /**
     * Get local
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocal()
    {
        return $this->local;
    }
}
