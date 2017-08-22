<?php

class GetProductinfoFragmented
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $WebshopId
     */
    protected $WebshopId = null;

    /**
     * @var int $CurrentVersion
     */
    protected $CurrentVersion = null;

    /**
     * @var string $StartCnk
     */
    protected $StartCnk = null;

    /**
     * @var int $FragmentSize
     */
    protected $FragmentSize = null;

    /**
     * @param string $guid
     * @param int $WebshopId
     * @param int $CurrentVersion
     * @param string $StartCnk
     * @param int $FragmentSize
     */
    public function __construct($guid, $WebshopId, $CurrentVersion, $StartCnk, $FragmentSize)
    {
      $this->guid = $guid;
      $this->WebshopId = $WebshopId;
      $this->CurrentVersion = $CurrentVersion;
      $this->StartCnk = $StartCnk;
      $this->FragmentSize = $FragmentSize;
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
     * @return GetProductinfoFragmented
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
      return $this->WebshopId;
    }

    /**
     * @param int $WebshopId
     * @return GetProductinfoFragmented
     */
    public function setWebshopId($WebshopId)
    {
      $this->WebshopId = $WebshopId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentVersion()
    {
      return $this->CurrentVersion;
    }

    /**
     * @param int $CurrentVersion
     * @return GetProductinfoFragmented
     */
    public function setCurrentVersion($CurrentVersion)
    {
      $this->CurrentVersion = $CurrentVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartCnk()
    {
      return $this->StartCnk;
    }

    /**
     * @param string $StartCnk
     * @return GetProductinfoFragmented
     */
    public function setStartCnk($StartCnk)
    {
      $this->StartCnk = $StartCnk;
      return $this;
    }

    /**
     * @return int
     */
    public function getFragmentSize()
    {
      return $this->FragmentSize;
    }

    /**
     * @param int $FragmentSize
     * @return GetProductinfoFragmented
     */
    public function setFragmentSize($FragmentSize)
    {
      $this->FragmentSize = $FragmentSize;
      return $this;
    }

}
