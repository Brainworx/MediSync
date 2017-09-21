<?php

class VersionedCategories
{

    /**
     * @var ArrayOfCategory $Categories
     */
    protected $Categories = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCategory
     */
    public function getCategories()
    {
      return $this->Categories;
    }

    /**
     * @param ArrayOfCategory $Categories
     * @return VersionedCategories
     */
    public function setCategories($Categories)
    {
      $this->Categories = $Categories;
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
     * @return VersionedCategories
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
