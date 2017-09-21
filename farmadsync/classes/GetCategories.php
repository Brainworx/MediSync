<?php

class GetCategories
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
     * @var int $yourCurrentVersion
     */
    protected $yourCurrentVersion = null;

    /**
     * @param string $guid
     * @param int $webshopId
     * @param int $yourCurrentVersion
     */
    public function __construct($guid, $webshopId, $yourCurrentVersion)
    {
      $this->guid = $guid;
      $this->webshopId = $webshopId;
      $this->yourCurrentVersion = $yourCurrentVersion;
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
     * @return GetCategories
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
     * @return GetCategories
     */
    public function setWebshopId($webshopId)
    {
      $this->webshopId = $webshopId;
      return $this;
    }

    /**
     * @return int
     */
    public function getYourCurrentVersion()
    {
      return $this->yourCurrentVersion;
    }

    /**
     * @param int $yourCurrentVersion
     * @return GetCategories
     */
    public function setYourCurrentVersion($yourCurrentVersion)
    {
      $this->yourCurrentVersion = $yourCurrentVersion;
      return $this;
    }

}
