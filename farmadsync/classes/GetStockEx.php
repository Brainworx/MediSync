<?php

class GetStockEx
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
     * @var ArrayOfstring $Cnks
     */
    protected $Cnks = null;

    /**
     * @param string $guid
     * @param int $webshopId
     * @param ArrayOfstring $Cnks
     */
    public function __construct($guid, $webshopId, $Cnks)
    {
      $this->guid = $guid;
      $this->webshopId = $webshopId;
      $this->Cnks = $Cnks;
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
     * @return GetStockEx
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
     * @return GetStockEx
     */
    public function setWebshopId($webshopId)
    {
      $this->webshopId = $webshopId;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCnks()
    {
      return $this->Cnks;
    }

    /**
     * @param ArrayOfstring $Cnks
     * @return GetStockEx
     */
    public function setCnks($Cnks)
    {
      $this->Cnks = $Cnks;
      return $this;
    }

}
