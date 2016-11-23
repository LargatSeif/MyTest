<?php

namespace dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaire
 */
class commentaire
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
     * @var \dataBundle\Entity\question
     */
    private $question;

    /**
     * @var \userBundle\Entity\User
     */
    private $user;


    /**
     * Set question
     *
     * @param \dataBundle\Entity\question $question
     * @return commentaire
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
     * Set user
     *
     * @param \userBundle\Entity\User $user
     * @return commentaire
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
    /**
     * @var string
     */
    private $text;


    /**
     * Set text
     *
     * @param string $text
     * @return commentaire
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }
}
