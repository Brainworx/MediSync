<?php

class ShippingCost
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var int $AmountFreeShipping
     */
    protected $AmountFreeShipping = null;

    /**
     * @var string $Cnk
     */
    protected $Cnk = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return ShippingCost
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmountFreeShipping()
    {
      return $this->AmountFreeShipping;
    }

    /**
     * @param int $AmountFreeShipping
     * @return ShippingCost
     */
    public function setAmountFreeShipping($AmountFreeShipping)
    {
      $this->AmountFreeShipping = $AmountFreeShipping;
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
     * @return ShippingCost
     */
    public function setCnk($Cnk)
    {
      $this->Cnk = $Cnk;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return ShippingCost
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return ShippingCost
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
