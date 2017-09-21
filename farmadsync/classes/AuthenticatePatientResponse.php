<?php

class AuthenticatePatientResponse
{

    /**
     * @var boolean $AuthenticatePatientResult
     */
    protected $AuthenticatePatientResult = null;

    /**
     * @param boolean $AuthenticatePatientResult
     */
    public function __construct($AuthenticatePatientResult)
    {
      $this->AuthenticatePatientResult = $AuthenticatePatientResult;
    }

    /**
     * @return boolean
     */
    public function getAuthenticatePatientResult()
    {
      return $this->AuthenticatePatientResult;
    }

    /**
     * @param boolean $AuthenticatePatientResult
     * @return AuthenticatePatientResponse
     */
    public function setAuthenticatePatientResult($AuthenticatePatientResult)
    {
      $this->AuthenticatePatientResult = $AuthenticatePatientResult;
      return $this;
    }

}
