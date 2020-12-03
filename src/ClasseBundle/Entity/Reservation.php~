<?php

namespace ClasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="ClasseBundle\Repository\ReservationRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="NombreNuit", type="integer")
     */
    private $nombreNuit;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixTotal", type="float")
     */
    private $prixTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="datetime")
     */
    private $dateFin;

   /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"})
     */
    private $user;

   /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="ClasseBundle\Entity\Habitat", cascade={"persist"})
     */
    private $habitat;


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
     * @param \AppBundle\Entity\User $user
     *
     * @return Reservation
     */
    public function setUser(\AppBundle\Entity\User $user = null)
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

    /**
     * Set habitat
     *
     * @param \ClasseBundle\Entity\Habitat $habitat
     *
     * @return Reservation
     */
    public function setHabitat(\ClasseBundle\Entity\Habitat $habitat = null)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return \ClasseBundle\Entity\Habitat
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

    
 
}
