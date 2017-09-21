<?php

class GetShippingCostsResponse
{

    /**
     * @var ArrayOfShippingCost $GetShippingCostsResult
     */
    protected $GetShippingCostsResult = null;

    /**
     * @param ArrayOfShippingCost $GetShippingCostsResult
     */
    public function __construct($GetShippingCostsResult)
    {
      $this->GetShippingCostsResult = $GetShippingCostsResult;
    }

    /**
     * @return ArrayOfShippingCost
     */
    public function getGetShippingCostsResult()
    {
      return $this->GetShippingCostsResult;
    }

    /**
     * @param ArrayOfShippingCost $GetShippingCostsResult
     * @return GetShippingCostsResponse
     */
    public function setGetShippingCostsResult($GetShippingCostsResult)
    {
      $this->GetShippingCostsResult = $GetShippingCostsResult;
      return $this;
    }

}
