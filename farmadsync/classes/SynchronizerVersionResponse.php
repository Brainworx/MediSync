<?php

class SynchronizerVersionResponse
{

    /**
     * @var string $SynchronizerVersionResult
     */
    protected $SynchronizerVersionResult = null;

    /**
     * @param string $SynchronizerVersionResult
     */
    public function __construct($SynchronizerVersionResult)
    {
      $this->SynchronizerVersionResult = $SynchronizerVersionResult;
    }

    /**
     * @return string
     */
    public function getSynchronizerVersionResult()
    {
      return $this->SynchronizerVersionResult;
    }

    /**
     * @param string $SynchronizerVersionResult
     * @return SynchronizerVersionResponse
     */
    public function setSynchronizerVersionResult($SynchronizerVersionResult)
    {
      $this->SynchronizerVersionResult = $SynchronizerVersionResult;
      return $this;
    }

}
