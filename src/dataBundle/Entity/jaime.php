<?php

namespace dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * jaime
 */
class jaime
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
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \dataBundle\Entity\question
     */
    private $question;


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return jaime
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set question
     *
     * @param \dataBundle\Entity\question $question
     * @return jaime
     */
    public function setQuestion(\dataBundle\Entity\question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \dataBundle\Entity\question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
    /**
     * @var \userBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \userBundle\Entity\User $user
     * @return jaime
     */
    public function setUser(\userBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \userBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
