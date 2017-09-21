<?php

class ProductInfo
{

    /**
     * @var ArrayOfint $CategoryIds
     */
    protected $CategoryIds = null;

    /**
     * @var string $Cnk
     */
    protected $Cnk = null;

    /**
     * @var string $DescriptionDe
     */
    protected $DescriptionDe = null;

    /**
     * @var string $DescriptionEn
     */
    protected $DescriptionEn = null;

    /**
     * @var string $DescriptionFr
     */
    protected $DescriptionFr = null;

    /**
     * @var string $DescriptionNl
     */
    protected $DescriptionNl = null;

    /**
     * @var float $DiscountPercentage
     */
    protected $DiscountPercentage = null;

    /**
     * @var string $Field1
     */
    protected $Field1 = null;

    /**
     * @var string $Field2
     */
    protected $Field2 = null;

    /**
     * @var string $Field3
     */
    protected $Field3 = null;

    /**
     * @var string $Field4
     */
    protected $Field4 = null;

    /**
     * @var string $Field5
     */
    protected $Field5 = null;

    /**
     * @var boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @var string $Lab
     */
    protected $Lab = null;

    /**
     * @var string $LeafletUrl_De
     */
    protected $LeafletUrl_De = null;

    /**
     * @var string $LeafletUrl_En
     */
    protected $LeafletUrl_En = null;

    /**
     * @var string $LeafletUrl_Fr
     */
    protected $LeafletUrl_Fr = null;

    /**
     * @var string $LeafletUrl_Lic_Nbr
     */
    protected $LeafletUrl_Lic_Nbr = null;

    /**
     * @var string $LeafletUrl_Lic_Owner
     */
    protected $LeafletUrl_Lic_Owner = null;

    /**
     * @var string $LeafletUrl_Nl
     */
    protected $LeafletUrl_Nl = null;

    /**
     * @var string $LongDescriptionHtmlDe
     */
    protected $LongDescriptionHtmlDe = null;

    /**
     * @var string $LongDescriptionHtmlEn
     */
    protected $LongDescriptionHtmlEn = null;

    /**
     * @var string $LongDescriptionHtmlFr
     */
    protected $LongDescriptionHtmlFr = null;

    /**
     * @var string $LongDescriptionHtmlNl
     */
    protected $LongDescriptionHtmlNl = null;

    /**
     * @var boolean $Medicine
     */
    protected $Medicine = null;

    /**
     * @var boolean $NeedsPrescription
     */
    protected $NeedsPrescription = null;

    /**
     * @var boolean $Obsolete
     */
    protected $Obsolete = null;

    /**
     * @var ArrayOfProductUrl $ProductUrls
     */
    protected $ProductUrls = null;

    /**
     * @var float $SalesPriceWithVatWithoutDiscount
     */
    protected $SalesPriceWithVatWithoutDiscount = null;

    /**
     * @var float $VatPercentage
     */
    protected $VatPercentage = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    /**
     * @param boolean $IsDeleted
     * @param int $Version
     */
    public function __construct($IsDeleted, $Version)
    {
      $this->IsDeleted = $IsDeleted;
      $this->Version = $Version;
    }

    /**
     * @return ArrayOfint
     */
    public function getCategoryIds()
    {
      return $this->CategoryIds;
    }

    /**
     * @param ArrayOfint $CategoryIds
     * @return ProductInfo
     */
    public function setCategoryIds($CategoryIds)
    {
      $this->CategoryIds = $CategoryIds;
      return $this;
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
     * @return ProductInfo
     */
    public function setCnk($Cnk)
    {
      $this->Cnk = $Cnk;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionDe()
    {
      return $this->DescriptionDe;
    }

    /**
     * @param string $DescriptionDe
     * @return ProductInfo
     */
    public function setDescriptionDe($DescriptionDe)
    {
      $this->DescriptionDe = $DescriptionDe;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionEn()
    {
      return $this->DescriptionEn;
    }

    /**
     * @param string $DescriptionEn
     * @return ProductInfo
     */
    public function setDescriptionEn($DescriptionEn)
    {
      $this->DescriptionEn = $DescriptionEn;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionFr()
    {
      return $this->DescriptionFr;
    }

    /**
     * @param string $DescriptionFr
     * @return ProductInfo
     */
    public function setDescriptionFr($DescriptionFr)
    {
      $this->DescriptionFr = $DescriptionFr;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionNl()
    {
      return $this->DescriptionNl;
    }

    /**
     * @param string $DescriptionNl
     * @return ProductInfo
     */
    public function setDescriptionNl($DescriptionNl)
    {
      $this->DescriptionNl = $DescriptionNl;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentage()
    {
      return $this->DiscountPercentage;
    }

    /**
     * @param float $DiscountPercentage
     * @return ProductInfo
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getField1()
    {
      return $this->Field1;
    }

    /**
     * @param string $Field1
     * @return ProductInfo
     */
    public function setField1($Field1)
    {
      $this->Field1 = $Field1;
      return $this;
    }

    /**
     * @return string
     */
    public function getField2()
    {
      return $this->Field2;
    }

    /**
     * @param string $Field2
     * @return ProductInfo
     */
    public function setField2($Field2)
    {
      $this->Field2 = $Field2;
      return $this;
    }

    /**
     * @return string
     */
    public function getField3()
    {
      return $this->Field3;
    }

    /**
     * @param string $Field3
     * @return ProductInfo
     */
    public function setField3($Field3)
    {
      $this->Field3 = $Field3;
      return $this;
    }

    /**
     * @return string
     */
    public function getField4()
    {
      return $this->Field4;
    }

    /**
     * @param string $Field4
     * @return ProductInfo
     */
    public function setField4($Field4)
    {
      $this->Field4 = $Field4;
      return $this;
    }

    /**
     * @return string
     */
    public function getField5()
    {
      return $this->Field5;
    }

    /**
     * @param string $Field5
     * @return ProductInfo
     */
    public function setField5($Field5)
    {
      $this->Field5 = $Field5;
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
     * @return ProductInfo
     */
    public function setIsDeleted($IsDeleted)
    {
      $this->IsDeleted = $IsDeleted;
      return $this;
    }

    /**
     * @return string
     */
    public function getLab()
    {
      return $this->Lab;
    }

    /**
     * @param string $Lab
     * @return ProductInfo
     */
    public function setLab($Lab)
    {
      $this->Lab = $Lab;
      return $this;
    }

    /**
     * @return string
     */
    public function getLeafletUrl_De()
    {
      return $this->LeafletUrl_De;
    }

    /**
     * @param string $LeafletUrl_De
     * @return ProductInfo
     */
    public function setLeafletUrl_De($LeafletUrl_De)
    {
      $this->LeafletUrl_De = $LeafletUrl_De;
      return $this;
    }

    /**
     * @return string
     */
    public function getLeafletUrl_En()
    {
      return $this->LeafletUrl_En;
    }

    /**
     * @param string $LeafletUrl_En
     * @return ProductInfo
     */
    public function setLeafletUrl_En($LeafletUrl_En)
    {
      $this->LeafletUrl_En = $LeafletUrl_En;
      return $this;
    }

    /**
     * @return string
     */
    public function getLeafletUrl_Fr()
    {
      return $this->LeafletUrl_Fr;
    }

    /**
     * @param string $LeafletUrl_Fr
     * @return ProductInfo
     */
    public function setLeafletUrl_Fr($LeafletUrl_Fr)
    {
      $this->LeafletUrl_Fr = $LeafletUrl_Fr;
      return $this;
    }

    /**
     * @return string
     */
    public function getLeafletUrl_Lic_Nbr()
    {
      return $this->LeafletUrl_Lic_Nbr;
    }

    /**
     * @param string $LeafletUrl_Lic_Nbr
     * @return ProductInfo
     */
    public function setLeafletUrl_Lic_Nbr($LeafletUrl_Lic_Nbr)
    {
      $this->LeafletUrl_Lic_Nbr = $LeafletUrl_Lic_Nbr;
      return $this;
    }

    /**
     * @return string
     */
    public function getLeafletUrl_Lic_Owner()
    {
      return $this->LeafletUrl_Lic_Owner;
    }

    /**
     * @param string $LeafletUrl_Lic_Owner
     * @return ProductInfo
     */
    public function setLeafletUrl_Lic_Owner($LeafletUrl_Lic_Owner)
    {
      $this->LeafletUrl_Lic_Owner = $LeafletUrl_Lic_Owner;
      return $this;
    }

    /**
     * @return string
     */
    public function getLeafletUrl_Nl()
    {
      return $this->LeafletUrl_Nl;
    }

    /**
     * @param string $LeafletUrl_Nl
     * @return ProductInfo
     */
    public function setLeafletUrl_Nl($LeafletUrl_Nl)
    {
      $this->LeafletUrl_Nl = $LeafletUrl_Nl;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescriptionHtmlDe()
    {
      return $this->LongDescriptionHtmlDe;
    }

    /**
     * @param string $LongDescriptionHtmlDe
     * @return ProductInfo
     */
    public function setLongDescriptionHtmlDe($LongDescriptionHtmlDe)
    {
      $this->LongDescriptionHtmlDe = $LongDescriptionHtmlDe;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescriptionHtmlEn()
    {
      return $this->LongDescriptionHtmlEn;
    }

    /**
     * @param string $LongDescriptionHtmlEn
     * @return ProductInfo
     */
    public function setLongDescriptionHtmlEn($LongDescriptionHtmlEn)
    {
      $this->LongDescriptionHtmlEn = $LongDescriptionHtmlEn;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescriptionHtmlFr()
    {
      return $this->LongDescriptionHtmlFr;
    }

    /**
     * @param string $LongDescriptionHtmlFr
     * @return ProductInfo
     */
    public function setLongDescriptionHtmlFr($LongDescriptionHtmlFr)
    {
      $this->LongDescriptionHtmlFr = $LongDescriptionHtmlFr;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescriptionHtmlNl()
    {
      return $this->LongDescriptionHtmlNl;
    }

    /**
     * @param string $LongDescriptionHtmlNl
     * @return ProductInfo
     */
    public function setLongDescriptionHtmlNl($LongDescriptionHtmlNl)
    {
      $this->LongDescriptionHtmlNl = $LongDescriptionHtmlNl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMedicine()
    {
      return $this->Medicine;
    }

    /**
     * @param boolean $Medicine
     * @return ProductInfo
     */
    public function setMedicine($Medicine)
    {
      $this->Medicine = $Medicine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNeedsPrescription()
    {
      return $this->NeedsPrescription;
    }

    /**
     * @param boolean $NeedsPrescription
     * @return ProductInfo
     */
    public function setNeedsPrescription($NeedsPrescription)
    {
      $this->NeedsPrescription = $NeedsPrescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getObsolete()
    {
      return $this->Obsolete;
    }

    /**
     * @param boolean $Obsolete
     * @return ProductInfo
     */
    public function setObsolete($Obsolete)
    {
      $this->Obsolete = $Obsolete;
      return $this;
    }

    /**
     * @return ArrayOfProductUrl
     */
    public function getProductUrls()
    {
      return $this->ProductUrls;
    }

    /**
     * @param ArrayOfProductUrl $ProductUrls
     * @return ProductInfo
     */
    public function setProductUrls($ProductUrls)
    {
      $this->ProductUrls = $ProductUrls;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesPriceWithVatWithoutDiscount()
    {
      return $this->SalesPriceWithVatWithoutDiscount;
    }

    /**
     * @param float $SalesPriceWithVatWithoutDiscount
     * @return ProductInfo
     */
    public function setSalesPriceWithVatWithoutDiscount($SalesPriceWithVatWithoutDiscount)
    {
      $this->SalesPriceWithVatWithoutDiscount = $SalesPriceWithVatWithoutDiscount;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatPercentage()
    {
      return $this->VatPercentage;
    }

    /**
     * @param float $VatPercentage
     * @return ProductInfo
     */
    public function setVatPercentage($VatPercentage)
    {
      $this->VatPercentage = $VatPercentage;
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
     * @return ProductInfo
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
