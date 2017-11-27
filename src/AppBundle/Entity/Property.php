<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Property
 *
 * @ORM\Table(name="property")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PropertyRepository")
 */
class Property
{
    /**
     * @var int
     *
     * @ORM\Column(name="aff_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $affId;

    /**
     * @var string $title
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string $description
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var Location $location
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Location", mappedBy="property")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     */
    private $location;

    /**
     * @var PropertyInside $propertyInside
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PropertyInside", mappedBy="property")
     * @ORM\JoinColumn(name="inside_id", referencedColumnName="id")
     */
    private $propertyInside;

    /**
     * @var PropertyOutside $propertyOutside
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PropertyOutside", mappedBy="property")
     * @ORM\JoinColumn(name="outside_id", referencedColumnName="id")
     */
    private $propertyOutside;

    /**
     * @var PropertyOther $propertyOther
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PropertyOther", mappedBy="property")
     * @ORM\JoinColumn(name="other_id", referencedColumnName="id")
     */
    private $propertyOther;

    /**
     * @var PropertyArea $propertyArea
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\PropertyArea", mappedBy="property")
     * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     */
    private $propertyArea;

    /**
     * @var \DateTime $createdAt
     * @ORM\Column(name="created_at", type="date")
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     * @ORM\Column(name="updated_at", type="date")
     */
    private $updatedAt;

    /**
     * Get id
     *
     * @return int
     */
    public function getAffId()
    {
        return $this->affId;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Property
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Property
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return Property
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return PropertyInside
     */
    public function getPropertyInside()
    {
        return $this->propertyInside;
    }

    /**
     * @param PropertyInside $propertyInside
     * @return Property
     */
    public function setPropertyInside($propertyInside)
    {
        $this->propertyInside = $propertyInside;

        return $this;
    }

    /**
     * @return PropertyOutside
     */
    public function getPropertyOutside()
    {
        return $this->propertyOutside;
    }

    /**
     * @param PropertyOutside $propertyOutside
     * @return Property
     */
    public function setPropertyOutside($propertyOutside)
    {
        $this->propertyOutside = $propertyOutside;

        return $this;
    }

    /**
     * @return PropertyOther
     */
    public function getPropertyOther()
    {
        return $this->propertyOther;
    }

    /**
     * @param PropertyOther $propertyOther
     * @return Property
     */
    public function setPropertyOther($propertyOther)
    {
        $this->propertyOther = $propertyOther;

        return $this;
    }

    /**
     * @return PropertyArea
     */
    public function getPropertyArea()
    {
        return $this->propertyArea;
    }

    /**
     * @param PropertyArea $propertyArea
     * @return Property
     */
    public function setPropertyArea($propertyArea)
    {
        $this->propertyArea = $propertyArea;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Property
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Property
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
