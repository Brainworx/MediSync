<?php

class EditPatient
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var Patient $patient
     */
    protected $patient = null;

    /**
     * @param string $guid
     * @param Patient $patient
     */
    public function __construct($guid, $patient)
    {
      $this->guid = $guid;
      $this->patient = $patient;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return EditPatient
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return Patient
     */
    public function getPatient()
    {
      return $this->patient;
    }

    /**
     * @param Patient $patient
     * @return EditPatient
     */
    public function setPatient($patient)
    {
      $this->patient = $patient;
      return $this;
    }

}
