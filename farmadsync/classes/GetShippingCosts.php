<?php

class GetShippingCosts
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
     * @param string $guid
     * @param int $webshopId
     */
    public function __construct($guid, $webshopId)
    {
      $this->guid = $guid;
      $this->webshopId = $webshopId;
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
     * @return GetShippingCosts
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
     * @return GetShippingCosts
     */
    public function setWebshopId($webshopId)
    {
      $this->webshopId = $webshopId;
      return $this;
    }

}
