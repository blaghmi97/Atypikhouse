<?php

namespace App\Entity;

use App\Repository\Photo2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Photo2Repository::class)
 */
class Photo2
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
     * @ORM\Column(name="source", type="string", length=150)
     */
    private $source;




   /** 
     * 
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Prisedevue", inversedBy="photos2")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $prise;


    /**
     * Set source
     *
     * @param string $source
     *
     * @return Photo2
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * Set prise
     *
     * @param \App\Entity\Prisedevue $prise
     *
     * @return Photo2
     */
    public function setPrise(\App\Entity\Prisedevue $prise = null)
    {
        $this->prise = $prise;

        return $this;
    }

    /**
     * Get prise
     *
     * @return \App\Entity\Prisedevue
     */
    public function getPrise()
    {
        return $this->prise;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prise = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add prise
     *
     * @param \App\Entity\Prisedevue $prise
     *
     * @return Photo2
     */
    public function addPrise(\App\Entity\Prisedevue $prise)
    {
        $this->prise[] = $prise;

        return $this;
    }

    /**
     * Remove prise
     *
     * @param \App\Entity\Prisedevue $prise
     */
    public function removePrise(\App\Entity\Prisedevue $prise)
    {
        $this->prise->removeElement($prise);
    }
}
