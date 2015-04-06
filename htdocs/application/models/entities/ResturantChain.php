<?php

namespace Nonveg\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResturantChain
 *
 * @ORM\Table(name="resturant_chain")
 * @ORM\Entity
 */
class ResturantChain
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
     * @ORM\Column(name="resturant_chain_name", type="string", length=45, nullable=true)
     */
    private $resturantChainName;



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
     * Set resturantChainName
     *
     * @param string $resturantChainName
     * @return ResturantChain
     */
    public function setResturantChainName($resturantChainName)
    {
        $this->resturantChainName = $resturantChainName;

        return $this;
    }

    /**
     * Get resturantChainName
     *
     * @return string 
     */
    public function getResturantChainName()
    {
        return $this->resturantChainName;
    }
}
