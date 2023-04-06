<?php

namespace App\Entity;

use App\Repository\PhotoRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotoRepository::class)
 */
class Photo
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
     *
     * @ORM\Column(name="Source", type="string", length=200)
     * @Assert\File(
     *     maxSize = "1M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *     mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *     notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *     uploadErrorMessage = "Erreur dans l'upload du fichier"
     * )
     * 
     */
    private $Src;

   /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Habitat", inversedBy="photos")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $habitat;
 




    /**
     * Set habitat
     *
     * @param \App\Entity\Habitat $habitat
     *
     * @return Photo
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habitat = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set src
     *
     * @param string $src
     *
     * @return Photo
     */
    public function setSrc($src)
    {
        $this->Src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->Src;
    }
}
