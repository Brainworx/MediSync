<?php

class Patient
{

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $EMail
     */
    protected $EMail = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $INSZ
     */
    protected $INSZ = null;

    /**
     * @var LanguageType $Language
     */
    protected $Language = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var int $PatientId
     */
    protected $PatientId = null;

    /**
     * @var string $Remarks
     */
    protected $Remarks = null;

    /**
     * @var string $Sex
     */
    protected $Sex = null;

    /**
     * @var Address $ShipmentAddress
     */
    protected $ShipmentAddress = null;

    /**
     * @var string $VATNbr
     */
    protected $VATNbr = null;

    /**
     * @param \DateTime $DateOfBirth
     * @param int $PatientId
     */
    public function __construct(\DateTime $DateOfBirth, $PatientId)
    {
      $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
      $this->PatientId = $PatientId;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
      if ($this->DateOfBirth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfBirth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfBirth
     * @return Patient
     */
    public function setDateOfBirth(\DateTime $DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
      return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return Patient
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return Patient
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getINSZ()
    {
      return $this->INSZ;
    }

    /**
     * @param string $INSZ
     * @return Patient
     */
    public function setINSZ($INSZ)
    {
      $this->INSZ = $INSZ;
      return $this;
    }

    /**
     * @return LanguageType
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param LanguageType $Language
     * @return Patient
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return Patient
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return Patient
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return int
     */
    public function getPatientId()
    {
      return $this->PatientId;
    }

    /**
     * @param int $PatientId
     * @return Patient
     */
    public function setPatientId($PatientId)
    {
      $this->PatientId = $PatientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param string $Remarks
     * @return Patient
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

    /**
     * @return string
     */
    public function getSex()
    {
      return $this->Sex;
    }

    /**
     * @param string $Sex
     * @return Patient
     */
    public function setSex($Sex)
    {
      $this->Sex = $Sex;
      return $this;
    }

    /**
     * @return Address
     */
    public function getShipmentAddress()
    {
      return $this->ShipmentAddress;
    }

    /**
     * @param Address $ShipmentAddress
     * @return Patient
     */
    public function setShipmentAddress($ShipmentAddress)
    {
      $this->ShipmentAddress = $ShipmentAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getVATNbr()
    {
      return $this->VATNbr;
    }

    /**
     * @param string $VATNbr
     * @return Patient
     */
    public function setVATNbr($VATNbr)
    {
      $this->VATNbr = $VATNbr;
      return $this;
    }

}
