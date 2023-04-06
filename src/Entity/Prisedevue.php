<?php

namespace App\Entity;

use App\Repository\PrisedevueRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrisedevueRepository::class)
 */
class Prisedevue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(max=350,maxMessage="Veuillez minimiser votre commentaire !")
     * @ORM\Column(name="Commentaire", type="string", length=350)
     */
    private $commentaire;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="Dateprise", type="datetime")
     */
    private $dateprise;

   /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     * 
     */
    private $user;

   /**
     * 
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Photo2", mappedBy="prise", orphanRemoval=true, cascade={"persist", "remove"})
     * 
     */
    private $photos2;

       /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservation", cascade={"persist", "remove"})
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     * 
     */
    private $reservation;


 

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Prisedevue
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set dateprise
     * @ORM\PrePersist
     * 
     * @param \DateTime $dateprise
     *
     * @return Prisedevue
     */
    public function setDateprise($dateprise)
    {
        $this->dateprise = new \Datetime();

        return $this;
    }

    /**
     * Get dateprise
     *
     * @return \DateTime
     */
    public function getDateprise()
    {
        return $this->dateprise;
    }

    /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * @return Prisedevue
     */
    public function setUser(\App\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set reservation
     *
     * @param \App\Entity\Reservation $reservation
     *
     * @return Prisedevue
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
     * Constructor
     */
    public function __construct()
    {
        $this->photos2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add photos2
     *
     * @param \App\Entity\Photo2 $photos2
     *
     * @return Prisedevue
     */
    public function addPhotos2(\App\Entity\Photo2 $photos2)
    {
        $this->photos2[] = $photos2;
        $photos2->setPrise($this);

        return $this;
    }

    /**
     * Remove photos2
     *
     * @param \App\Entity\Photo2 $photos2
     */
    public function removePhotos2(\App\Entity\Photo2 $photos2)
    {
        $this->photos2->removeElement($photos2);
    }

    /**
     * Get photos2
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos2()
    {
        return $this->photos2;
    }
}
