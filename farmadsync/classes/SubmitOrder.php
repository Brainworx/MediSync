<?php

class SubmitOrder
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $webshopId
     */
    protected $webshopId = null;

    /**
     * @var Order $order
     */
    protected $order = null;

    /**
     * @param string $guid
     * @param int $webshopId
     * @param Order $order
     */
    public function __construct($guid, $webshopId, $order)
    {
      $this->guid = $guid;
      $this->webshopId = $webshopId;
      $this->order = $order;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return SubmitOrder
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebshopId()
    {
      return $this->webshopId;
    }

    /**
     * @param int $webshopId
     * @return SubmitOrder
     */
    public function setWebshopId($webshopId)
    {
      $this->webshopId = $webshopId;
      return $this;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param Order $order
     * @return SubmitOrder
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

}
