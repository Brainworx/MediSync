<?php

class SetOrderStateTriggerUrlResponse
{

    /**
     * @var boolean $SetOrderStateTriggerUrlResult
     */
    protected $SetOrderStateTriggerUrlResult = null;

    /**
     * @param boolean $SetOrderStateTriggerUrlResult
     */
    public function __construct($SetOrderStateTriggerUrlResult)
    {
      $this->SetOrderStateTriggerUrlResult = $SetOrderStateTriggerUrlResult;
    }

    /**
     * @return boolean
     */
    public function getSetOrderStateTriggerUrlResult()
    {
      return $this->SetOrderStateTriggerUrlResult;
    }

    /**
     * @param boolean $SetOrderStateTriggerUrlResult
     * @return SetOrderStateTriggerUrlResponse
     */
    public function setSetOrderStateTriggerUrlResult($SetOrderStateTriggerUrlResult)
    {
      $this->SetOrderStateTriggerUrlResult = $SetOrderStateTriggerUrlResult;
      return $this;
    }

}
