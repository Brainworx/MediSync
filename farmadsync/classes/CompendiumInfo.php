<?php

class CompendiumInfo
{

    /**
     * @var string $Cnk
     */
    protected $Cnk = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var int $LanguageId
     */
    protected $LanguageId = null;

    /**
     * @var string $LanguageName
     */
    protected $LanguageName = null;

    /**
     * @var int $TabDetailId
     */
    protected $TabDetailId = null;

    /**
     * @var string $TabDetailName
     */
    protected $TabDetailName = null;

    /**
     * @var int $TabId
     */
    protected $TabId = null;

    /**
     * @var string $TabName
     */
    protected $TabName = null;

    /**
     * @var int $TypeId
     */
    protected $TypeId = null;

    /**
     * @var string $TypeName
     */
    protected $TypeName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCnk()
    {
      return $this->Cnk;
    }

    /**
     * @param string $Cnk
     * @return CompendiumInfo
     */
    public function setCnk($Cnk)
    {
      $this->Cnk = $Cnk;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return CompendiumInfo
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return int
     */
    public function getLanguageId()
    {
      return $this->LanguageId;
    }

    /**
     * @param int $LanguageId
     * @return CompendiumInfo
     */
    public function setLanguageId($LanguageId)
    {
      $this->LanguageId = $LanguageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageName()
    {
      return $this->LanguageName;
    }

    /**
     * @param string $LanguageName
     * @return CompendiumInfo
     */
    public function setLanguageName($LanguageName)
    {
      $this->LanguageName = $LanguageName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTabDetailId()
    {
      return $this->TabDetailId;
    }

    /**
     * @param int $TabDetailId
     * @return CompendiumInfo
     */
    public function setTabDetailId($TabDetailId)
    {
      $this->TabDetailId = $TabDetailId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTabDetailName()
    {
      return $this->TabDetailName;
    }

    /**
     * @param string $TabDetailName
     * @return CompendiumInfo
     */
    public function setTabDetailName($TabDetailName)
    {
      $this->TabDetailName = $TabDetailName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTabId()
    {
      return $this->TabId;
    }

    /**
     * @param int $TabId
     * @return CompendiumInfo
     */
    public function setTabId($TabId)
    {
      $this->TabId = $TabId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTabName()
    {
      return $this->TabName;
    }

    /**
     * @param string $TabName
     * @return CompendiumInfo
     */
    public function setTabName($TabName)
    {
      $this->TabName = $TabName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
      return $this->TypeId;
    }

    /**
     * @param int $TypeId
     * @return CompendiumInfo
     */
    public function setTypeId($TypeId)
    {
      $this->TypeId = $TypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
      return $this->TypeName;
    }

    /**
     * @param string $TypeName
     * @return CompendiumInfo
     */
    public function setTypeName($TypeName)
    {
      $this->TypeName = $TypeName;
      return $this;
    }

}
