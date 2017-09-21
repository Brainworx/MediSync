<?php

class GetStockExResponse
{

    /**
     * @var ArrayOfStockEx $GetStockExResult
     */
    protected $GetStockExResult = null;

    /**
     * @param ArrayOfStockEx $GetStockExResult
     */
    public function __construct($GetStockExResult)
    {
      $this->GetStockExResult = $GetStockExResult;
    }

    /**
     * @return ArrayOfStockEx
     */
    public function getGetStockExResult()
    {
      return $this->GetStockExResult;
    }

    /**
     * @param ArrayOfStockEx $GetStockExResult
     * @return GetStockExResponse
     */
    public function setGetStockExResult($GetStockExResult)
    {
      $this->GetStockExResult = $GetStockExResult;
      return $this;
    }

}
