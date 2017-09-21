<?php

class Product
{

    /**
     * @var int $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Cnk
     */
    protected $Cnk = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var float $TaxRate
     */
    protected $TaxRate = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @param int $Amount
     * @param float $TaxAmount
     * @param float $TaxRate
     * @param float $UnitPrice
     */
    public function __construct($Amount, $TaxAmount, $TaxRate, $UnitPrice)
    {
      $this->Amount = $Amount;
      $this->TaxAmount = $TaxAmount;
      $this->TaxRate = $TaxRate;
      $this->UnitPrice = $UnitPrice;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param int $Amount
     * @return Product
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return Product
     */
    public function setCnk($Cnk)
    {
      $this->Cnk = $Cnk;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return Product
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param float $TaxAmount
     * @return Product
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return Product
     */
    public function setTaxRate($TaxRate)
    {
      $this->TaxRate = $TaxRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return Product
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

}
