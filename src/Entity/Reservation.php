<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
     * @var int
     * @Assert\NotBlank()
     * @ORM\Column(name="NombreNuit", type="integer")
     */
    private $nombreNuit;

    /**
     * @var float
     * @Assert\NotBlank()
     * @ORM\Column(name="PrixTotal", type="float")
     */
    private $prixTotal;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="DateReservation", type="datetime",nullable=true)
     */
    private $dateReservation;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="DateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="DateFin", type="datetime")
     */
    private $dateFin;

   /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     * 
     */
    private $user;

   /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Habitat",inversedBy="reservations",cascade={"persist", "remove"})
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $habitat;



    /**
     * Set nombreNuit
     *
     * @param integer $nombreNuit
     *
     * @return Reservation
     */
    public function setNombreNuit($nombreNuit)
    {
        $this->nombreNuit = $nombreNuit;

        return $this;
    }

    /**
     * Get nombreNuit
     *
     * @return int
     */
    public function getNombreNuit()
    {
        return $this->nombreNuit;
    }

    /**
     * Set prixTotal
     *
     * @param float $prixTotal
     *
     * @return Reservation
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * Set dateReservation
     *
     * @ORM\PrePersist
     * 
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = new \Datetime();

        return $this;
    }

    /**
     * Get dateReservation
     *
     * 
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * @return Reservation
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
     * Set habitat
     *
     * @param \App\Entity\Habitat $habitat
     *
     * @return Reservation
     */
    public function setHabitat(\App\Entity\Habitat $habitat = null)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return \App\Entity\Habitat
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

}
