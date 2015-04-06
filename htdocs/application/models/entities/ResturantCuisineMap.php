<?php

namespace Nonveg\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResturantCuisineMap
 *
 * @ORM\Table(name="resturant_cuisine_map")
 * @ORM\Entity
 */
class ResturantCuisineMap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="resturant_id", type="integer", nullable=true)
     */
    private $resturantId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuisine_id", type="integer", nullable=true)
     */
    private $cuisineId;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set resturantId
     *
     * @param integer $resturantId
     * @return ResturantCuisineMap
     */
    public function setResturantId($resturantId)
    {
        $this->resturantId = $resturantId;

        return $this;
    }

    /**
     * Get resturantId
     *
     * @return integer 
     */
    public function getResturantId()
    {
        return $this->resturantId;
    }

    /**
     * Set cuisineId
     *
     * @param integer $cuisineId
     * @return ResturantCuisineMap
     */
    public function setCuisineId($cuisineId)
    {
        $this->cuisineId = $cuisineId;

        return $this;
    }

    /**
     * Get cuisineId
     *
     * @return integer 
     */
    public function getCuisineId()
    {
        return $this->cuisineId;
    }
}
