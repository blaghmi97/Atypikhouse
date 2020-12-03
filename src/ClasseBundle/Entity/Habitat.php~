<?php

namespace ClasseBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert ;

/**
 * Habitat
 *
 * @ORM\Table(name="habitat")
 * @ORM\Entity(repositoryClass="ClasseBundle\Repository\HabitatRepository")
 * @ORM\HasLifecycleCallbacks()
 * 
 */
class Habitat
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
     * @ORM\Column(name="Type", type="string", length=100)
     */
    private $type;

   /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="NombreCouchage", type="integer")
     */
    private $nombreCouchage;

    /**
     * @var int
     *
     * @ORM\Column(name="Surface", type="integer")
     */
    private $surface;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=150)
     */
    private $adresse;

        /**
     * @var string
     *
     * @ORM\Column(name="Codepostale", type="string", length=10)
     */
    private $codepostale;

        /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=30)
     */
    private $ville;

        /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=30)
     */
    private $pays;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Pub", type="datetime",nullable=true)
     * 
     */
    private $datePub;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=600)
     */
    private $description;


   /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"})
     */
    private $user;


   /**
     * 
     *
     * @ORM\OneToMany(targetEntity="ClasseBundle\Entity\Photo", mappedBy="habitat", orphanRemoval=true, cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $photos;

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
     * Set type
     *
     * @param string $type
     *
     * @return Habitat
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
/**
     * Set titre
     *
     * @param string $titre
     *
     * @return Habitat
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nombreCouchage
     *
     * @param integer $nombreCouchage
     *
     * @return Habitat
     */
    public function setNombreCouchage($nombreCouchage)
    {
        $this->nombreCouchage = $nombreCouchage;

        return $this;
    }

    /**
     * Get nombreCouchage
     *
     * @return int
     */
    public function getNombreCouchage()
    {
        return $this->nombreCouchage;
    }

    /**
     * Set surface
     *
     * @param integer $surface
     *
     * @return Habitat
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return int
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Habitat
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Habitat
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set datePub
     * @ORM\PrePersist
     * @param \DateTime $datePub
     *
     * @return Habitat
     */
    public function setDatePub($datePub)
    {
        $this->datePub = new \Datetime();

        return $this;
    }

    /**
     * Get datePub
     *
     * @return \DateTime
     */
    public function getDatePub()
    {
        return $this->datePub;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Habitat
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Habitat
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
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }

    /**
     * Add photo
     *
     * @param \ClasseBundle\Entity\Photo $photo
     *
     * @return Habitat
     */
    public function addPhoto(\ClasseBundle\Entity\Photo $photo)
    {
        $this->photos[] = $photo;
        $photo->setHabitat($this);

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \ClasseBundle\Entity\Photo $photo
     */
    public function removePhoto(\ClasseBundle\Entity\Photo $photo)
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
     * Set codepostale
     *
     * @param string $codepostale
     *
     * @return Habitat
     */
    public function setCodepostale($codepostale)
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    /**
     * Get codepostale
     *
     * @return string
     */
    public function getCodepostale()
    {
        return $this->codepostale;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Habitat
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Habitat
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }
}
