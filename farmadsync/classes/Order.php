<?php

class Order
{

    /**
     * @var \DateTime $CreationDateTimeOnWebshop
     */
    protected $CreationDateTimeOnWebshop = null;

    /**
     * @var string $FreeText
     */
    protected $FreeText = null;

    /**
     * @var OrderState $OrderState
     */
    protected $OrderState = null;

    /**
     * @var OrderType $OrderType
     */
    protected $OrderType = null;

    /**
     * @var Patient $Patient
     */
    protected $Patient = null;

    /**
     * @var PaymentType $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var ArrayOfProduct $Products
     */
    protected $Products = null;

    /**
     * @var ShipmentType $ShipmentType
     */
    protected $ShipmentType = null;

    /**
     * @var int $WebshopId
     */
    protected $WebshopId = null;

    /**
     * @var int $WebshopOrderId
     */
    protected $WebshopOrderId = null;

    /**
     * @param \DateTime $CreationDateTimeOnWebshop
     * @param OrderState $OrderState
     * @param OrderType $OrderType
     * @param PaymentType $PaymentType
     * @param ShipmentType $ShipmentType
     * @param int $WebshopId
     * @param int $WebshopOrderId
     */
    public function __construct(\DateTime $CreationDateTimeOnWebshop, $OrderState, $OrderType, $PaymentType, $ShipmentType, $WebshopId, $WebshopOrderId)
    {
      $this->CreationDateTimeOnWebshop = $CreationDateTimeOnWebshop->format(\DateTime::ATOM);
      $this->OrderState = $OrderState;
      $this->OrderType = $OrderType;
      $this->PaymentType = $PaymentType;
      $this->ShipmentType = $ShipmentType;
      $this->WebshopId = $WebshopId;
      $this->WebshopOrderId = $WebshopOrderId;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDateTimeOnWebshop()
    {
      if ($this->CreationDateTimeOnWebshop == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDateTimeOnWebshop);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDateTimeOnWebshop
     * @return Order
     */
    public function setCreationDateTimeOnWebshop(\DateTime $CreationDateTimeOnWebshop)
    {
      $this->CreationDateTimeOnWebshop = $CreationDateTimeOnWebshop->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeText()
    {
      return $this->FreeText;
    }

    /**
     * @param string $FreeText
     * @return Order
     */
    public function setFreeText($FreeText)
    {
      $this->FreeText = $FreeText;
      return $this;
    }

    /**
     * @return OrderState
     */
    public function getOrderState()
    {
      return $this->OrderState;
    }

    /**
     * @param OrderState $OrderState
     * @return Order
     */
    public function setOrderState($OrderState)
    {
      $this->OrderState = $OrderState;
      return $this;
    }

    /**
     * @return OrderType
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param OrderType $OrderType
     * @return Order
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
      return $this;
    }

    /**
     * @return Patient
     */
    public function getPatient()
    {
      return $this->Patient;
    }

    /**
     * @param Patient $Patient
     * @return Order
     */
    public function setPatient($Patient)
    {
      $this->Patient = $Patient;
      return $this;
    }

    /**
     * @return PaymentType
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param PaymentType $PaymentType
     * @return Order
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return ArrayOfProduct
     */
    public function getProducts()
    {
      return $this->Products;
    }

    /**
     * @param ArrayOfProduct $Products
     * @return Order
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
      return $this;
    }

    /**
     * @return ShipmentType
     */
    public function getShipmentType()
    {
      return $this->ShipmentType;
    }

    /**
     * @param ShipmentType $ShipmentType
     * @return Order
     */
    public function setShipmentType($ShipmentType)
    {
      $this->ShipmentType = $ShipmentType;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebshopId()
    {
      return $this->WebshopId;
    }

    /**
     * @param int $WebshopId
     * @return Order
     */
    public function setWebshopId($WebshopId)
    {
      $this->WebshopId = $WebshopId;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebshopOrderId()
    {
      return $this->WebshopOrderId;
    }

    /**
     * @param int $WebshopOrderId
     * @return Order
     */
    public function setWebshopOrderId($WebshopOrderId)
    {
      $this->WebshopOrderId = $WebshopOrderId;
      return $this;
    }

}
