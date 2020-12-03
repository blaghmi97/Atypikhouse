<?php

namespace ClasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert ;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="ClasseBundle\Repository\PhotoRepository")
 */
class Photo
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
     * @ORM\ManyToOne(targetEntity="ClasseBundle\Entity\Habitat", inversedBy="photos")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
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
     * Set habitat
     *
     * @param \ClasseBundle\Entity\Habitat $habitat
     *
     * @return Photo
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
