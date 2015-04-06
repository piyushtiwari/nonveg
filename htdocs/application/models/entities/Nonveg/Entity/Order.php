<?php

namespace Nonveg\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order")
 * @ORM\Entity
 */
class Order
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="restuarant_id", type="integer", nullable=true)
     */
    private $restuarantId;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_amount", type="integer", nullable=true)
     */
    private $totalAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="discount_amount", type="integer", nullable=true)
     */
    private $discountAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_tax", type="integer", nullable=true)
     */
    private $serviceTax;

    /**
     * @var integer
     *
     * @ORM\Column(name="vat", type="integer", nullable=true)
     */
    private $vat;

    /**
     * @var integer
     *
     * @ORM\Column(name="payable_amount", type="integer", nullable=true)
     */
    private $payableAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_address", type="string", length=500, nullable=true)
     */
    private $deliveryAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_time", type="datetime", nullable=true)
     */
    private $orderTime;



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
     * Set userId
     *
     * @param integer $userId
     * @return Order
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set restuarantId
     *
     * @param integer $restuarantId
     * @return Order
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
     * Set totalAmount
     *
     * @param integer $totalAmount
     * @return Order
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return integer 
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Set discountAmount
     *
     * @param integer $discountAmount
     * @return Order
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * Get discountAmount
     *
     * @return integer 
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Set serviceTax
     *
     * @param integer $serviceTax
     * @return Order
     */
    public function setServiceTax($serviceTax)
    {
        $this->serviceTax = $serviceTax;

        return $this;
    }

    /**
     * Get serviceTax
     *
     * @return integer 
     */
    public function getServiceTax()
    {
        return $this->serviceTax;
    }

    /**
     * Set vat
     *
     * @param integer $vat
     * @return Order
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return integer 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set payableAmount
     *
     * @param integer $payableAmount
     * @return Order
     */
    public function setPayableAmount($payableAmount)
    {
        $this->payableAmount = $payableAmount;

        return $this;
    }

    /**
     * Get payableAmount
     *
     * @return integer 
     */
    public function getPayableAmount()
    {
        return $this->payableAmount;
    }

    /**
     * Set deliveryAddress
     *
     * @param string $deliveryAddress
     * @return Order
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get deliveryAddress
     *
     * @return string 
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set orderTime
     *
     * @param \DateTime $orderTime
     * @return Order
     */
    public function setOrderTime($orderTime)
    {
        $this->orderTime = $orderTime;

        return $this;
    }

    /**
     * Get orderTime
     *
     * @return \DateTime 
     */
    public function getOrderTime()
    {
        return $this->orderTime;
    }
}
