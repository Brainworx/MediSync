<?php

class StockEx
{

    /**
     * @var string $Cnk
     */
    protected $Cnk = null;

    /**
     * @var int $DeliverCode
     */
    protected $DeliverCode = null;

    /**
     * @var string $DeliverDate
     */
    protected $DeliverDate = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $ReplacingCnk
     */
    protected $ReplacingCnk = null;

    /**
     * @var int $Stock
     */
    protected $Stock = null;

    /**
     * @var int $StockCode
     */
    protected $StockCode = null;

    /**
     * @var string $Supplier
     */
    protected $Supplier = null;

    /**
     * @param int $DeliverCode
     * @param int $Stock
     * @param int $StockCode
     */
    public function __construct($DeliverCode, $Stock, $StockCode)
    {
      $this->DeliverCode = $DeliverCode;
      $this->Stock = $Stock;
      $this->StockCode = $StockCode;
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
     * @return StockEx
     */
    public function setCnk($Cnk)
    {
      $this->Cnk = $Cnk;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliverCode()
    {
      return $this->DeliverCode;
    }

    /**
     * @param int $DeliverCode
     * @return StockEx
     */
    public function setDeliverCode($DeliverCode)
    {
      $this->DeliverCode = $DeliverCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliverDate()
    {
      return $this->DeliverDate;
    }

    /**
     * @param string $DeliverDate
     * @return StockEx
     */
    public function setDeliverDate($DeliverDate)
    {
      $this->DeliverDate = $DeliverDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return StockEx
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return string
     */
    public function getReplacingCnk()
    {
      return $this->ReplacingCnk;
    }

    /**
     * @param string $ReplacingCnk
     * @return StockEx
     */
    public function setReplacingCnk($ReplacingCnk)
    {
      $this->ReplacingCnk = $ReplacingCnk;
      return $this;
    }

    /**
     * @return int
     */
    public function getStock()
    {
      return $this->Stock;
    }

    /**
     * @param int $Stock
     * @return StockEx
     */
    public function setStock($Stock)
    {
      $this->Stock = $Stock;
      return $this;
    }

    /**
     * @return int
     */
    public function getStockCode()
    {
      return $this->StockCode;
    }

    /**
     * @param int $StockCode
     * @return StockEx
     */
    public function setStockCode($StockCode)
    {
      $this->StockCode = $StockCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param string $Supplier
     * @return StockEx
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

}
