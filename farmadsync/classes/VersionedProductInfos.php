<?php

class VersionedProductInfos
{

    /**
     * @var ArrayOfProductInfo $ProductInfos
     */
    protected $ProductInfos = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfProductInfo
     */
    public function getProductInfos()
    {
      return $this->ProductInfos;
    }

    /**
     * @param ArrayOfProductInfo $ProductInfos
     * @return VersionedProductInfos
     */
    public function setProductInfos($ProductInfos)
    {
      $this->ProductInfos = $ProductInfos;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return VersionedProductInfos
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
