<?php

class GetCompendiumInfos
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
     * @var string $cnk
     */
    protected $cnk = null;

    /**
     * @param string $guid
     * @param int $webshopId
     * @param string $cnk
     */
    public function __construct($guid, $webshopId, $cnk)
    {
      $this->guid = $guid;
      $this->webshopId = $webshopId;
      $this->cnk = $cnk;
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
     * @return GetCompendiumInfos
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
     * @return GetCompendiumInfos
     */
    public function setWebshopId($webshopId)
    {
      $this->webshopId = $webshopId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCnk()
    {
      return $this->cnk;
    }

    /**
     * @param string $cnk
     * @return GetCompendiumInfos
     */
    public function setCnk($cnk)
    {
      $this->cnk = $cnk;
      return $this;
    }

}
