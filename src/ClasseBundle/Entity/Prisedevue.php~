<?php

namespace ClasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prisedevue
 *
 * @ORM\Table(name="prisedevue")
 * @ORM\Entity(repositoryClass="ClasseBundle\Repository\PrisedevueRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Prisedevue
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
     * @var string
     *
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"})
     */
    private $user;

   /**
     * 
     *
     * @ORM\OneToMany(targetEntity="ClasseBundle\Entity\Photo2", mappedBy="prise", orphanRemoval=true, cascade={"persist", "remove"})
     * 
     */
    private $photos2;

       /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="ClasseBundle\Entity\Reservation", cascade={"persist"})
     * 
     */
    private $reservation;


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
     * @param \AppBundle\Entity\User $user
     *
     * @return Prisedevue
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
     * Set reservation
     *
     * @param \ClasseBundle\Entity\Reservation $reservation
     *
     * @return Prisedevue
     */
    public function setReservation(\ClasseBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \ClasseBundle\Entity\Reservation
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
     * @param \ClasseBundle\Entity\Photo2 $photos2
     *
     * @return Prisedevue
     */
    public function addPhotos2(\ClasseBundle\Entity\Photo2 $photos2)
    {
        $this->photos2[] = $photos2;
        $photos2->setPrise($this);

        return $this;
    }

    /**
     * Remove photos2
     *
     * @param \ClasseBundle\Entity\Photo2 $photos2
     */
    public function removePhotos2(\ClasseBundle\Entity\Photo2 $photos2)
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
