<?php

namespace userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * local
 */
class local
{
    /**
     * @var int
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * @var \userBundle\Entity\gouvernorat
     */
    private $gouv;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \userBundle\Entity\User $user
     * @return local
     */
    public function addUser(\userBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \userBundle\Entity\User $user
     */
    public function removeUser(\userBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set gouv
     *
     * @param \userBundle\Entity\gouvernorat $gouv
     * @return local
     */
    public function setGouv(\userBundle\Entity\gouvernorat $gouv = null)
    {
        $this->gouv = $gouv;

        return $this;
    }

    /**
     * Get gouv
     *
     * @return \userBundle\Entity\gouvernorat 
     */
    public function getGouv()
    {
        return $this->gouv;
    }
    /**
     * @var \userBundle\Entity\delegation
     */
    private $deleg;


    /**
     * Set deleg
     *
     * @param \userBundle\Entity\delegation $deleg
     * @return local
     */
    public function setDeleg(\userBundle\Entity\delegation $deleg = null)
    {
        $this->deleg = $deleg;

        return $this;
    }

    /**
     * Get deleg
     *
     * @return \userBundle\Entity\delegation 
     */
    public function getDeleg()
    {
        return $this->deleg;
    }
}
