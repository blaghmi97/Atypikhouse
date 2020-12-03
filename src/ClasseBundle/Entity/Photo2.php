<?php

namespace ClasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo2
 *
 * @ORM\Table(name="photo2")
 * @ORM\Entity(repositoryClass="ClasseBundle\Repository\Photo2Repository")
 */
class Photo2
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
     * @ORM\Column(name="source", type="string", length=150)
     */
    private $source;




   /** 
     * 
     *
     * @ORM\ManyToOne(targetEntity="ClasseBundle\Entity\Prisedevue", inversedBy="photos2")
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $prise;

    


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
     * @param \ClasseBundle\Entity\Prisedevue $prise
     *
     * @return Photo2
     */
    public function setPrise(\ClasseBundle\Entity\Prisedevue $prise = null)
    {
        $this->prise = $prise;

        return $this;
    }

    /**
     * Get prise
     *
     * @return \ClasseBundle\Entity\Prisedevue
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
     * @param \ClasseBundle\Entity\Prisedevue $prise
     *
     * @return Photo2
     */
    public function addPrise(\ClasseBundle\Entity\Prisedevue $prise)
    {
        $this->prise[] = $prise;

        return $this;
    }

    /**
     * Remove prise
     *
     * @param \ClasseBundle\Entity\Prisedevue $prise
     */
    public function removePrise(\ClasseBundle\Entity\Prisedevue $prise)
    {
        $this->prise->removeElement($prise);
    }
}
