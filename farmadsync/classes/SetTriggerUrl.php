<?php

class SetTriggerUrl
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $Webshop
     */
    protected $Webshop = null;

    /**
     * @var string $TriggerUrl
     */
    protected $TriggerUrl = null;

    /**
     * @param string $guid
     * @param int $Webshop
     * @param string $TriggerUrl
     */
    public function __construct($guid, $Webshop, $TriggerUrl)
    {
      $this->guid = $guid;
      $this->Webshop = $Webshop;
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
     * @return SetTriggerUrl
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebshop()
    {
      return $this->Webshop;
    }

    /**
     * @param int $Webshop
     * @return SetTriggerUrl
     */
    public function setWebshop($Webshop)
    {
      $this->Webshop = $Webshop;
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
     * @return SetTriggerUrl
     */
    public function setTriggerUrl($TriggerUrl)
    {
      $this->TriggerUrl = $TriggerUrl;
      return $this;
    }

}
