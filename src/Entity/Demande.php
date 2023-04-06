<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeRepository::class)
 */
class Demande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $activite;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $secteur;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $connu;

    /**
     * 
     * 
     * @ORM\OneToOne(targetEntity="App\Entity\User", cascade={"persist"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
    

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getSecteur(): ?string
    {
        return $this->secteur;
    }

    public function setSecteur(string $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getConnu(): ?string
    {
        return $this->connu;
    }

    public function setConnu(string $connu): self
    {
        $this->connu = $connu;

        return $this;
    }

            /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * 
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
}
