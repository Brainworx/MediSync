<?php

class SetTriggerUrlResponse
{

    /**
     * @var boolean $SetTriggerUrlResult
     */
    protected $SetTriggerUrlResult = null;

    /**
     * @param boolean $SetTriggerUrlResult
     */
    public function __construct($SetTriggerUrlResult)
    {
      $this->SetTriggerUrlResult = $SetTriggerUrlResult;
    }

    /**
     * @return boolean
     */
    public function getSetTriggerUrlResult()
    {
      return $this->SetTriggerUrlResult;
    }

    /**
     * @param boolean $SetTriggerUrlResult
     * @return SetTriggerUrlResponse
     */
    public function setSetTriggerUrlResult($SetTriggerUrlResult)
    {
      $this->SetTriggerUrlResult = $SetTriggerUrlResult;
      return $this;
    }

}
