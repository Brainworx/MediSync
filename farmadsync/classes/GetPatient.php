<?php

class GetPatient
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @param string $guid
     * @param string $email
     */
    public function __construct($guid, $email)
    {
      $this->guid = $guid;
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
     * @return GetPatient
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
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
     * @return GetPatient
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
