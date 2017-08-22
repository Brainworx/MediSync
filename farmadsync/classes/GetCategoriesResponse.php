<?php

class GetCategoriesResponse
{

    /**
     * @var VersionedCategories $GetCategoriesResult
     */
    protected $GetCategoriesResult = null;

    /**
     * @param VersionedCategories $GetCategoriesResult
     */
    public function __construct($GetCategoriesResult)
    {
      $this->GetCategoriesResult = $GetCategoriesResult;
    }

    /**
     * @return VersionedCategories
     */
    public function getGetCategoriesResult()
    {
      return $this->GetCategoriesResult;
    }

    /**
     * @param VersionedCategories $GetCategoriesResult
     * @return GetCategoriesResponse
     */
    public function setGetCategoriesResult($GetCategoriesResult)
    {
      $this->GetCategoriesResult = $GetCategoriesResult;
      return $this;
    }

}
