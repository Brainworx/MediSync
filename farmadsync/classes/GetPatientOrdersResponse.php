<?php

class GetPatientOrdersResponse
{

    /**
     * @var ArrayOfOrder $GetPatientOrdersResult
     */
    protected $GetPatientOrdersResult = null;

    /**
     * @param ArrayOfOrder $GetPatientOrdersResult
     */
    public function __construct($GetPatientOrdersResult)
    {
      $this->GetPatientOrdersResult = $GetPatientOrdersResult;
    }

    /**
     * @return ArrayOfOrder
     */
    public function getGetPatientOrdersResult()
    {
      return $this->GetPatientOrdersResult;
    }

    /**
     * @param ArrayOfOrder $GetPatientOrdersResult
     * @return GetPatientOrdersResponse
     */
    public function setGetPatientOrdersResult($GetPatientOrdersResult)
    {
      $this->GetPatientOrdersResult = $GetPatientOrdersResult;
      return $this;
    }

}
