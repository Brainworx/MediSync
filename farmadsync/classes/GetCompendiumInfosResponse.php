<?php

class GetCompendiumInfosResponse
{

    /**
     * @var CompendiumInfos $GetCompendiumInfosResult
     */
    protected $GetCompendiumInfosResult = null;

    /**
     * @param CompendiumInfos $GetCompendiumInfosResult
     */
    public function __construct($GetCompendiumInfosResult)
    {
      $this->GetCompendiumInfosResult = $GetCompendiumInfosResult;
    }

    /**
     * @return CompendiumInfos
     */
    public function getGetCompendiumInfosResult()
    {
      return $this->GetCompendiumInfosResult;
    }

    /**
     * @param CompendiumInfos $GetCompendiumInfosResult
     * @return GetCompendiumInfosResponse
     */
    public function setGetCompendiumInfosResult($GetCompendiumInfosResult)
    {
      $this->GetCompendiumInfosResult = $GetCompendiumInfosResult;
      return $this;
    }

}
