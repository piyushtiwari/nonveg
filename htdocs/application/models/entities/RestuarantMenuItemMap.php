<?php

namespace Nonveg\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestuarantMenuItemMap
 *
 * @ORM\Table(name="restuarant_menu_item_map")
 * @ORM\Entity
 */
class RestuarantMenuItemMap
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
     * @ORM\Column(name="restuarant_id", type="integer", nullable=true)
     */
    private $restuarantId;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item_id", type="integer", nullable=true)
     */
    private $menuItemId;



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
     * Set restuarantId
     *
     * @param integer $restuarantId
     * @return RestuarantMenuItemMap
     */
    public function setRestuarantId($restuarantId)
    {
        $this->restuarantId = $restuarantId;

        return $this;
    }

    /**
     * Get restuarantId
     *
     * @return integer 
     */
    public function getRestuarantId()
    {
        return $this->restuarantId;
    }

    /**
     * Set menuItemId
     *
     * @param integer $menuItemId
     * @return RestuarantMenuItemMap
     */
    public function setMenuItemId($menuItemId)
    {
        $this->menuItemId = $menuItemId;

        return $this;
    }

    /**
     * Get menuItemId
     *
     * @return integer 
     */
    public function getMenuItemId()
    {
        return $this->menuItemId;
    }
}
