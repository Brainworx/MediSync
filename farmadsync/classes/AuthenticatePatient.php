<?php

class AuthenticatePatient
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
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $guid
     * @param string $email
     * @param string $password
     */
    public function __construct($guid, $email, $password)
    {
      $this->guid = $guid;
      $this->email = $email;
      $this->password = $password;
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
     * @return AuthenticatePatient
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
     * @return AuthenticatePatient
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return AuthenticatePatient
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
