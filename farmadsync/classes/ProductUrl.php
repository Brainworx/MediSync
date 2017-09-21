<?php

class ProductUrl
{

    /**
     * @var string $Name_De
     */
    protected $Name_De = null;

    /**
     * @var string $Name_En
     */
    protected $Name_En = null;

    /**
     * @var string $Name_Fr
     */
    protected $Name_Fr = null;

    /**
     * @var string $Name_Nl
     */
    protected $Name_Nl = null;

    /**
     * @var UrlType $Type
     */
    protected $Type = null;

    /**
     * @var string $Url_De
     */
    protected $Url_De = null;

    /**
     * @var string $Url_En
     */
    protected $Url_En = null;

    /**
     * @var string $Url_Fr
     */
    protected $Url_Fr = null;

    /**
     * @var string $Url_Nl
     */
    protected $Url_Nl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName_De()
    {
      return $this->Name_De;
    }

    /**
     * @param string $Name_De
     * @return ProductUrl
     */
    public function setName_De($Name_De)
    {
      $this->Name_De = $Name_De;
      return $this;
    }

    /**
     * @return string
     */
    public function getName_En()
    {
      return $this->Name_En;
    }

    /**
     * @param string $Name_En
     * @return ProductUrl
     */
    public function setName_En($Name_En)
    {
      $this->Name_En = $Name_En;
      return $this;
    }

    /**
     * @return string
     */
    public function getName_Fr()
    {
      return $this->Name_Fr;
    }

    /**
     * @param string $Name_Fr
     * @return ProductUrl
     */
    public function setName_Fr($Name_Fr)
    {
      $this->Name_Fr = $Name_Fr;
      return $this;
    }

    /**
     * @return string
     */
    public function getName_Nl()
    {
      return $this->Name_Nl;
    }

    /**
     * @param string $Name_Nl
     * @return ProductUrl
     */
    public function setName_Nl($Name_Nl)
    {
      $this->Name_Nl = $Name_Nl;
      return $this;
    }

    /**
     * @return UrlType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param UrlType $Type
     * @return ProductUrl
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl_De()
    {
      return $this->Url_De;
    }

    /**
     * @param string $Url_De
     * @return ProductUrl
     */
    public function setUrl_De($Url_De)
    {
      $this->Url_De = $Url_De;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl_En()
    {
      return $this->Url_En;
    }

    /**
     * @param string $Url_En
     * @return ProductUrl
     */
    public function setUrl_En($Url_En)
    {
      $this->Url_En = $Url_En;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl_Fr()
    {
      return $this->Url_Fr;
    }

    /**
     * @param string $Url_Fr
     * @return ProductUrl
     */
    public function setUrl_Fr($Url_Fr)
    {
      $this->Url_Fr = $Url_Fr;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl_Nl()
    {
      return $this->Url_Nl;
    }

    /**
     * @param string $Url_Nl
     * @return ProductUrl
     */
    public function setUrl_Nl($Url_Nl)
    {
      $this->Url_Nl = $Url_Nl;
      return $this;
    }

}
