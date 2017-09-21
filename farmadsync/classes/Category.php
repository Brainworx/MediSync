<?php

class Category
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @var string $NameDe
     */
    protected $NameDe = null;

    /**
     * @var string $NameEn
     */
    protected $NameEn = null;

    /**
     * @var string $NameFr
     */
    protected $NameFr = null;

    /**
     * @var string $NameNl
     */
    protected $NameNl = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var int $ParentId
     */
    protected $ParentId = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return Category
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
      return $this->IsDeleted;
    }

    /**
     * @param boolean $IsDeleted
     * @return Category
     */
    public function setIsDeleted($IsDeleted)
    {
      $this->IsDeleted = $IsDeleted;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameDe()
    {
      return $this->NameDe;
    }

    /**
     * @param string $NameDe
     * @return Category
     */
    public function setNameDe($NameDe)
    {
      $this->NameDe = $NameDe;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameEn()
    {
      return $this->NameEn;
    }

    /**
     * @param string $NameEn
     * @return Category
     */
    public function setNameEn($NameEn)
    {
      $this->NameEn = $NameEn;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameFr()
    {
      return $this->NameFr;
    }

    /**
     * @param string $NameFr
     * @return Category
     */
    public function setNameFr($NameFr)
    {
      $this->NameFr = $NameFr;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameNl()
    {
      return $this->NameNl;
    }

    /**
     * @param string $NameNl
     * @return Category
     */
    public function setNameNl($NameNl)
    {
      $this->NameNl = $NameNl;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return Category
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
      return $this->ParentId;
    }

    /**
     * @param int $ParentId
     * @return Category
     */
    public function setParentId($ParentId)
    {
      $this->ParentId = $ParentId;
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
     * @return Category
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
