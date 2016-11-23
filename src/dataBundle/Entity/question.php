<?php

namespace dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * question
 */
class question
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
    private $comments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comments
     *
     * @param \dataBundle\Entity\commentaire $comments
     * @return question
     */
    public function addComment(\dataBundle\Entity\commentaire $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \dataBundle\Entity\commentaire $comments
     */
    public function removeComment(\dataBundle\Entity\commentaire $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * @var string
     */
    private $text;


    /**
     * Set text
     *
     * @param string $text
     * @return question
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jaime;


    /**
     * Add jaime
     *
     * @param \dataBundle\Entity\jaime $jaime
     * @return question
     */
    public function addJaime(\dataBundle\Entity\jaime $jaime)
    {
        $this->jaime[] = $jaime;

        return $this;
    }

    /**
     * Remove jaime
     *
     * @param \dataBundle\Entity\jaime $jaime
     */
    public function removeJaime(\dataBundle\Entity\jaime $jaime)
    {
        $this->jaime->removeElement($jaime);
    }

    /**
     * Get jaime
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJaime()
    {
        return $this->jaime;
    }
}
