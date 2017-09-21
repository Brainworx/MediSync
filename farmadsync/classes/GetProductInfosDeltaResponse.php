<?php

class GetProductInfosDeltaResponse
{

    /**
     * @var VersionedProductInfos $GetProductInfosDeltaResult
     */
    protected $GetProductInfosDeltaResult = null;

    /**
     * @param VersionedProductInfos $GetProductInfosDeltaResult
     */
    public function __construct($GetProductInfosDeltaResult)
    {
      $this->GetProductInfosDeltaResult = $GetProductInfosDeltaResult;
    }

    /**
     * @return VersionedProductInfos
     */
    public function getGetProductInfosDeltaResult()
    {
      return $this->GetProductInfosDeltaResult;
    }

    /**
     * @param VersionedProductInfos $GetProductInfosDeltaResult
     * @return GetProductInfosDeltaResponse
     */
    public function setGetProductInfosDeltaResult($GetProductInfosDeltaResult)
    {
      $this->GetProductInfosDeltaResult = $GetProductInfosDeltaResult;
      return $this;
    }

}
