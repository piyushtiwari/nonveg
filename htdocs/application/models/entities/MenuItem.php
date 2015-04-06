<?php

namespace Nonveg\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuItem
 *
 * @ORM\Table(name="menu_item")
 * @ORM\Entity
 */
class MenuItem
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
     * @ORM\Column(name="menu_item_name", type="string", length=45, nullable=true)
     */
    private $menuItemName;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_type", type="integer", nullable=true)
     */
    private $itemType;



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
     * Set menuItemName
     *
     * @param string $menuItemName
     * @return MenuItem
     */
    public function setMenuItemName($menuItemName)
    {
        $this->menuItemName = $menuItemName;

        return $this;
    }

    /**
     * Get menuItemName
     *
     * @return string 
     */
    public function getMenuItemName()
    {
        return $this->menuItemName;
    }

    /**
     * Set itemType
     *
     * @param integer $itemType
     * @return MenuItem
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get itemType
     *
     * @return integer 
     */
    public function getItemType()
    {
        return $this->itemType;
    }
}
