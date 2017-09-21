<?php

class GetPatientResponse
{

    /**
     * @var Patient $GetPatientResult
     */
    protected $GetPatientResult = null;

    /**
     * @param Patient $GetPatientResult
     */
    public function __construct($GetPatientResult)
    {
      $this->GetPatientResult = $GetPatientResult;
    }

    /**
     * @return Patient
     */
    public function getGetPatientResult()
    {
      return $this->GetPatientResult;
    }

    /**
     * @param Patient $GetPatientResult
     * @return GetPatientResponse
     */
    public function setGetPatientResult($GetPatientResult)
    {
      $this->GetPatientResult = $GetPatientResult;
      return $this;
    }

}
