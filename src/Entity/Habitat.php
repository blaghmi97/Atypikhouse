<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HabitatRepository::class)
 */
class Habitat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    private $type;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=100,maxMessage="Veuillez minimiser votre commentaire !")
     * @ORM\Column(type="string", length=100)
     */
    private $titre;

    /**
     * @Assert\NotBlank()
     * @Assert\Range(min=1,max=50)
     * @ORM\Column(type="integer")
     */
    private $nombreCouchage;

    /**
     * @Assert\NotBlank()
     * @Assert\Range(min=1,max=500)
     * @ORM\Column(name="Surface", type="integer")
     */
    private $surface;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="float")
     * @Assert\Range(min=1.00,max=999.99)
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=150,maxMessage="Veuillez minimiser votre texte !")
     * @ORM\Column(type="string", length=150)
     */
    private $adresse;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=6,maxMessage="Veuillez minimiser votre texte !")
     * @ORM\Column(type="string", length=10)
     */
    private $codepostale;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=30,maxMessage="Veuillez minimiser votre texte!")
     * @ORM\Column(type="string", length=200)
     * @Assert\Regex(
     *   pattern="/^[a-zA-Z_-]{1,200}$/")
     */
    private $ville;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=30)
     */
    private $pays;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datePub;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=600,maxMessage="Veuillez minimiser votre description !")
     * @ORM\Column(type="string", length=600)
     */
    private $description;


   /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     */
    private $user;


   /**
     * 
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Photo", mappedBy="habitat", orphanRemoval=true, cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $photos;


 /**
     * 
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Message", mappedBy="habitat",cascade={"persist", "remove"})
     */
    private $messages;

     /**
     * 
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="habitat",orphanRemoval=true, cascade={"persist", "remove"})
     * 
     */
    private $reservations;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNombreCouchage(): ?int
    {
        return $this->nombreCouchage;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }


    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setNombreCouchage(int $nombreCouchage): self
    {
        $this->nombreCouchage = $nombreCouchage;

        return $this;
    }
    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostale(): ?string
    {
        return $this->codepostale;
    }

    public function setCodepostale(string $codepostale): self
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getDatePub(): ?\DateTimeInterface
    {
        return $this->datePub;
    }

    public function setDatePub(?\DateTimeInterface $datePub): self
    {
        $this->datePub = $datePub;

        

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

        /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * @return Habitat
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
     * Add photo
     *
     * @param \App\Entity\Photo $photo
     *
     * @return Habitat
     */
    public function addPhoto(\App\Entity\Photo $photo)
    {
        $this->photos[] = $photo;
        $photo->setHabitat($this);

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \App\Entity\Photo $photo
     */
    public function removePhoto(\App\Entity\Photo $photo)
    {
        $this->photos->removeElement($photo);
        
        if ($photo->getHabitat() === $this) {
            $photo->setHabitat(null);
        }
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos()
    {
        return $this->photos;
    }
    

    /**
     * Add message
     *
     * @param \App\Entity\Message $message
     *
     * @return Habitat
     */
    public function addMessage(\App\Entity\Message $message)
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \App\Entity\Message $message
     */
    public function removeMessage(\App\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }
    
}
