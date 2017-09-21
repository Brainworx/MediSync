<?php

class GetPatientOrders
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
     * @var string $email
     */
    protected $email = null;

    /**
     * @param string $guid
     * @param int $webshopId
     * @param string $email
     */
    public function __construct($guid, $webshopId, $email)
    {
      $this->guid = $guid;
      $this->webshopId = $webshopId;
      $this->email = $email;
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
     * @return GetPatientOrders
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
     * @return GetPatientOrders
     */
    public function setWebshopId($webshopId)
    {
      $this->webshopId = $webshopId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return GetPatientOrders
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
