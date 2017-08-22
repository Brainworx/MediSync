<?php

class GetProductinfoFragmentedResponse
{

    /**
     * @var VersionedProductInfos $GetProductinfoFragmentedResult
     */
    protected $GetProductinfoFragmentedResult = null;

    /**
     * @param VersionedProductInfos $GetProductinfoFragmentedResult
     */
    public function __construct($GetProductinfoFragmentedResult)
    {
      $this->GetProductinfoFragmentedResult = $GetProductinfoFragmentedResult;
    }

    /**
     * @return VersionedProductInfos
     */
    public function getGetProductinfoFragmentedResult()
    {
      return $this->GetProductinfoFragmentedResult;
    }

    /**
     * @param VersionedProductInfos $GetProductinfoFragmentedResult
     * @return GetProductinfoFragmentedResponse
     */
    public function setGetProductinfoFragmentedResult($GetProductinfoFragmentedResult)
    {
      $this->GetProductinfoFragmentedResult = $GetProductinfoFragmentedResult;
      return $this;
    }

}
