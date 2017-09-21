<?php

class Stock
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
     * @param int $Amount
     */
    public function __construct($Amount)
    {
      $this->Amount = $Amount;
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
     * @return Stock
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
     * @return Stock
     */
    public function setCnk($Cnk)
    {
      $this->Cnk = $Cnk;
      return $this;
    }

}
