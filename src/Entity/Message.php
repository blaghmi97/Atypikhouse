<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
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
     * @var \DateTime
     * 
     * @ORM\Column(name="DateMessage", type="datetime",nullable=true)
     */
    private $dateMessage;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(max=300,maxMessage="Veuillez minimiser votre commentaire !")
     * @ORM\Column(name="texte", type="string", length=300)
     */
    private $contexte;

     /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="message1", cascade={"persist"})
     */
    private $touser;

      /**
     * 
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="App\Entity\Habitat",inversedBy="messages", cascade={"persist"})
     */
    private $habitat;


   /**
     * 
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\User",inversedBy="message2", cascade={"persist"})
     */
    private $fromuser;




    /**
     * Set dateMessage
     * @ORM\PrePersist
     * @param \DateTime $dateMessage
     *
     * @return Message
     */
    public function setDateMessage($dateMessage)
    {
        $this->dateMessage = new \Datetime();

        return $this;
    }

    /**
     * Get dateMessage
     *
     * @return \DateTime
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }



    /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * @return Message
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
     * Set contexte
     *
     * @param string $contexte
     *
     * @return Message
     */
    public function setContexte($contexte)
    {
        $this->contexte = $contexte;

        return $this;
    }

    /**
     * Get contexte
     *
     * @return string
     */
    public function getContexte()
    {
        return $this->contexte;
    }



    /**
     * Set touser
     *
     * @param \App\Entity\User $touser
     *
     * @return Message
     */
    public function setTouser(\App\Entity\User $touser = null)
    {
        $this->touser = $touser;

        return $this;
    }

    /**
     * Get touser
     *
     * @return \App\Entity\User
     */
    public function getTouser()
    {
        return $this->touser;
    }

    /**
     * Set fromuser
     *
     * @param \App\Entity\User $fromuser
     *
     * @return Message
     */
    public function setFromuser(\App\Entity\User $fromuser = null)
    {
        $this->fromuser = $fromuser;

        return $this;
    }

    /**
     * Get fromuser
     *
     * @return \AppBundle\Entity\User
     */
    public function getFromuser()
    {
        return $this->fromuser;
    }


    /**
     * Set habitat
     *
     * @param string $habitat
     *
     * @return Message
     */
    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return string
     */
    public function getHabitat()
    {
        return $this->habitat;
    }
}
