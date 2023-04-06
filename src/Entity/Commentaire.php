<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @var string
     * @Assert\NotBlank(message="merci de remplir le champ ! ")
     * @Assert\Length(max=300,maxMessage="Veuillez minimiser votre commentaire !")
     * @ORM\Column(name="texte", type="string", length=300)
     */
    private $texte;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="DateCommentaire", type="datetime",nullable=true)
     */
    private $dateCommentaire;



   /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservation", cascade={"persist","remove"})
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $reservation;

   /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     * 
     */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set dateCommentaire
     * @ORM\PrePersist
     * 
     * @param \DateTime $dateCommentaire
     *
     * @return Commentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = new \Datetime();

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return \DateTime
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set reservation
     *
     * @param \App\Entity\Reservation $reservation
     *
     * @return Commentaire
     */
    public function setReservation(\App\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \App\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * @return Commentaire
     */
    public function setUser(\App\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

}
