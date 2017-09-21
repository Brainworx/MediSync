<?php

class CompendiumInfos
{

    /**
     * @var ArrayOfCompendiumInfo $Infos
     */
    protected $Infos = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCompendiumInfo
     */
    public function getInfos()
    {
      return $this->Infos;
    }

    /**
     * @param ArrayOfCompendiumInfo $Infos
     * @return CompendiumInfos
     */
    public function setInfos($Infos)
    {
      $this->Infos = $Infos;
      return $this;
    }

}
