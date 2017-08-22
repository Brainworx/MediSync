<?php

class GetProductInfosResponse
{

    /**
     * @var VersionedProductInfos $GetProductInfosResult
     */
    protected $GetProductInfosResult = null;

    /**
     * @param VersionedProductInfos $GetProductInfosResult
     */
    public function __construct($GetProductInfosResult)
    {
      $this->GetProductInfosResult = $GetProductInfosResult;
    }

    /**
     * @return VersionedProductInfos
     */
    public function getGetProductInfosResult()
    {
      return $this->GetProductInfosResult;
    }

    /**
     * @param VersionedProductInfos $GetProductInfosResult
     * @return GetProductInfosResponse
     */
    public function setGetProductInfosResult($GetProductInfosResult)
    {
      $this->GetProductInfosResult = $GetProductInfosResult;
      return $this;
    }

}
