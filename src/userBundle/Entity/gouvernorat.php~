<?php

namespace userBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * gouvernorat
 */
class gouvernorat
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $delegation;

   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->delegation = new ArrayCollection();
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
     * @return gouvernorat
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
     * @return gouvernorat
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
     * @return gouvernorat
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
     * Add delegation
     *
     * @param \userBundle\Entity\delegation $delegation
     * @return gouvernorat
     */
    public function addDelegation(delegation $delegation)
    {
        $this->delegation[] = $delegation;

        return $this;
    }

    /**
     * Remove delegation
     *
     * @param \userBundle\Entity\delegation $delegation
     */
    public function removeDelegation(delegation $delegation)
    {
        $this->delegation->removeElement($delegation);
    }

    /**
     * Get delegation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDelegation()
    {
        return $this->delegation;
    }

    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $local;


    /**
     * Add local
     *
     * @param \userBundle\Entity\local $local
     * @return gouvernorat
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
