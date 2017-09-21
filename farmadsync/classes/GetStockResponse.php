<?php

class GetStockResponse
{

    /**
     * @var ArrayOfStock $GetStockResult
     */
    protected $GetStockResult = null;

    /**
     * @param ArrayOfStock $GetStockResult
     */
    public function __construct($GetStockResult)
    {
      $this->GetStockResult = $GetStockResult;
    }

    /**
     * @return ArrayOfStock
     */
    public function getGetStockResult()
    {
      return $this->GetStockResult;
    }

    /**
     * @param ArrayOfStock $GetStockResult
     * @return GetStockResponse
     */
    public function setGetStockResult($GetStockResult)
    {
      $this->GetStockResult = $GetStockResult;
      return $this;
    }

}
