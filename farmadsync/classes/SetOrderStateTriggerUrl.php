<?php

class SetOrderStateTriggerUrl
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
     * @var string $TriggerUrl
     */
    protected $TriggerUrl = null;

    /**
     * @param string $guid
     * @param int $webshopId
     * @param string $TriggerUrl
     */
    public function __construct($guid, $webshopId, $TriggerUrl)
    {
      $this->guid = $guid;
      $this->webshopId = $webshopId;
      $this->TriggerUrl = $TriggerUrl;
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
     * @return SetOrderStateTriggerUrl
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
     * @return SetOrderStateTriggerUrl
     */
    public function setWebshopId($webshopId)
    {
      $this->webshopId = $webshopId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTriggerUrl()
    {
      return $this->TriggerUrl;
    }

    /**
     * @param string $TriggerUrl
     * @return SetOrderStateTriggerUrl
     */
    public function setTriggerUrl($TriggerUrl)
    {
      $this->TriggerUrl = $TriggerUrl;
      return $this;
    }

}
