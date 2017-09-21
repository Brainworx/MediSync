<?php

class PatientExistsResponse
{

    /**
     * @var boolean $PatientExistsResult
     */
    protected $PatientExistsResult = null;

    /**
     * @param boolean $PatientExistsResult
     */
    public function __construct($PatientExistsResult)
    {
      $this->PatientExistsResult = $PatientExistsResult;
    }

    /**
     * @return boolean
     */
    public function getPatientExistsResult()
    {
      return $this->PatientExistsResult;
    }

    /**
     * @param boolean $PatientExistsResult
     * @return PatientExistsResponse
     */
    public function setPatientExistsResult($PatientExistsResult)
    {
      $this->PatientExistsResult = $PatientExistsResult;
      return $this;
    }

}
