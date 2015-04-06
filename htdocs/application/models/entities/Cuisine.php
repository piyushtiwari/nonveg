<?php

namespace Nonveg\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuisine
 *
 * @ORM\Table(name="cuisine")
 * @ORM\Entity
 */
class Cuisine
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
     * @var string
     *
     * @ORM\Column(name="cuisine_name", type="string", length=45, nullable=true)
     */
    private $cuisineName;



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
     * Set cuisineName
     *
     * @param string $cuisineName
     * @return Cuisine
     */
    public function setCuisineName($cuisineName)
    {
        $this->cuisineName = $cuisineName;

        return $this;
    }

    /**
     * Get cuisineName
     *
     * @return string 
     */
    public function getCuisineName()
    {
        return $this->cuisineName;
    }
}
