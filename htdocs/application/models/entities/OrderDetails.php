<?php

namespace Nonveg\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetails
 *
 * @ORM\Table(name="order_details")
 * @ORM\Entity
 */
class OrderDetails
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
     * @ORM\Column(name="order_id", type="string", length=45, nullable=true)
     */
    private $orderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="restuarant_menu_item_id", type="integer", nullable=true)
     */
    private $restuarantMenuItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="order_remark", type="string", length=100, nullable=true)
     */
    private $orderRemark;



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
     * Set orderId
     *
     * @param string $orderId
     * @return OrderDetails
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return string 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set restuarantMenuItemId
     *
     * @param integer $restuarantMenuItemId
     * @return OrderDetails
     */
    public function setRestuarantMenuItemId($restuarantMenuItemId)
    {
        $this->restuarantMenuItemId = $restuarantMenuItemId;

        return $this;
    }

    /**
     * Get restuarantMenuItemId
     *
     * @return integer 
     */
    public function getRestuarantMenuItemId()
    {
        return $this->restuarantMenuItemId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderDetails
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set orderRemark
     *
     * @param string $orderRemark
     * @return OrderDetails
     */
    public function setOrderRemark($orderRemark)
    {
        $this->orderRemark = $orderRemark;

        return $this;
    }

    /**
     * Get orderRemark
     *
     * @return string 
     */
    public function getOrderRemark()
    {
        return $this->orderRemark;
    }
}
