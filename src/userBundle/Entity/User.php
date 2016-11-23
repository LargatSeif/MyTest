<?php

namespace userBundle\Entity;

use dataBundle\Entity\chien;
use dataBundle\Entity\photoProfile;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    protected $id;

    private $facebook_id;

    private $facebookAccessToken;

    protected $google_id;

    protected $google_access_token;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $facebook_id
     * @return User
     */
    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebookAccessToken = $facebookAccessToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacebookAccessToken()
    {
        return $this->facebookAccessToken;
    }

    /**
     * @return mixed
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * @param mixed $google_id
     */
    public function setGoogleId($google_id)
    {
        $this->google_id = $google_id;
    }

    /**
     * @return mixed
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * @param mixed $google_access_token
     */
    public function setGoogleAccessToken($google_access_token)
    {
        $this->google_access_token = $google_access_token;
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $chien;


    /**
     * Add chien
     *
     * @param \dataBundle\Entity\chien $chien
     * @return User
     */
    public function addChien(chien $chien)
    {
        $this->chien[] = $chien;

        return $this;
    }

    /**
     * Remove chien
     *
     * @param \dataBundle\Entity\chien $chien
     */
    public function removeChien(chien $chien)
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;


    /**
     * Add comments
     *
     * @param \dataBundle\Entity\commentaire $comments
     * @return User
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jaime;


    /**
     * Add jaime
     *
     * @param \dataBundle\Entity\jaime $jaime
     * @return User
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
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $sexe;

    /**
     * @var \DateTime
     */
    private $datedenaissance;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $bio;


    /**
     * Set nom
     *
     * @param string $nom
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     * @return User
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return \DateTime 
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    protected $photo;


    public function setPhoto( photoProfile $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }
    
    public function getPhoto()
    {
        return $this->photo;
    }



    
    /**
     * @var string
     */
    private $gouv;

    /**
     * @var string
     */
    private $deleg;


    /**
     * Set gouv
     *
     * @param string $gouv
     * @return User
     */
    public function setGouv($gouv)
    {
        $this->gouv = $gouv;

        return $this;
    }

    /**
     * Get gouv
     *
     * @return string 
     */
    public function getGouv()
    {
        return $this->gouv;
    }

    /**
     * Set delegaion
     *
     * @param string $deleg
     * @return User
     */
    public function setDelegaion($deleg)
    {
        $this->deleg = $deleg;

        return $this;
    }

    /**
     * Get delegaion
     *
     * @return string 
     */
    public function getDeleg()
    {
        return $this->deleg;
    }

    /**
     * Set deleg
     *
     * @param string $deleg
     * @return User
     */
    public function setDeleg($deleg)
    {
        $this->deleg = $deleg;

        return $this;
    }
}
