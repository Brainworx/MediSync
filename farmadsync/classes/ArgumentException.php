<?php

class ArgumentException extends SystemException
{

    /**
     * @param string $any
     * @param QName $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
      parent::__construct($any, $FactoryType);
    }

}
