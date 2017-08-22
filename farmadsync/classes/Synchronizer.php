<?php

class Synchronizer extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'Patient' => '\\Patient',
  'Address' => '\\Address',
  'ArrayOfOrder' => '\\ArrayOfOrder',
  'Order' => '\\Order',
  'ArrayOfProduct' => '\\ArrayOfProduct',
  'Product' => '\\Product',
  'ArrayOfStock' => '\\ArrayOfStock',
  'Stock' => '\\Stock',
  'ArrayOfStockEx' => '\\ArrayOfStockEx',
  'StockEx' => '\\StockEx',
  'ArrayOfint' => '\\ArrayOfint',
  'ArrayOfstring' => '\\ArrayOfstring',
  'ArrayOfShippingCost' => '\\ArrayOfShippingCost',
  'ShippingCost' => '\\ShippingCost',
  'VersionedCategories' => '\\VersionedCategories',
  'ArrayOfCategory' => '\\ArrayOfCategory',
  'Category' => '\\Category',
  'VersionedProductInfos' => '\\VersionedProductInfos',
  'ArrayOfProductInfo' => '\\ArrayOfProductInfo',
  'ProductInfo' => '\\ProductInfo',
  'ArrayOfProductUrl' => '\\ArrayOfProductUrl',
  'ProductUrl' => '\\ProductUrl',
  'CompendiumInfos' => '\\CompendiumInfos',
  'ArrayOfCompendiumInfo' => '\\ArrayOfCompendiumInfo',
  'CompendiumInfo' => '\\CompendiumInfo',
  'SynchronizerVersion' => '\\SynchronizerVersion',
  'SynchronizerVersionResponse' => '\\SynchronizerVersionResponse',
  'AuthenticatePatient' => '\\AuthenticatePatient',
  'AuthenticatePatientResponse' => '\\AuthenticatePatientResponse',
  'EditPatient' => '\\EditPatient',
  'EditPatientResponse' => '\\EditPatientResponse',
  'GetShippingCosts' => '\\GetShippingCosts',
  'GetShippingCostsResponse' => '\\GetShippingCostsResponse',
  'GetCategories' => '\\GetCategories',
  'GetCategoriesResponse' => '\\GetCategoriesResponse',
  'GetPatient' => '\\GetPatient',
  'GetPatientResponse' => '\\GetPatientResponse',
  'GetPatientOrders' => '\\GetPatientOrders',
  'GetPatientOrdersResponse' => '\\GetPatientOrdersResponse',
  'GetProductInfos' => '\\GetProductInfos',
  'GetProductInfosResponse' => '\\GetProductInfosResponse',
  'GetProductinfoFragmented' => '\\GetProductinfoFragmented',
  'GetProductinfoFragmentedResponse' => '\\GetProductinfoFragmentedResponse',
  'GetCompendiumInfos' => '\\GetCompendiumInfos',
  'GetCompendiumInfosResponse' => '\\GetCompendiumInfosResponse',
  'GetProductInfosDelta' => '\\GetProductInfosDelta',
  'GetProductInfosDeltaResponse' => '\\GetProductInfosDeltaResponse',
  'PatientExists' => '\\PatientExists',
  'PatientExistsResponse' => '\\PatientExistsResponse',
  'SetTriggerUrl' => '\\SetTriggerUrl',
  'SetTriggerUrlResponse' => '\\SetTriggerUrlResponse',
  'RegisterPatient' => '\\RegisterPatient',
  'RegisterPatientResponse' => '\\RegisterPatientResponse',
  'SubmitOrder' => '\\SubmitOrder',
  'SubmitOrderResponse' => '\\SubmitOrderResponse',
  'GetStock' => '\\GetStock',
  'GetStockResponse' => '\\GetStockResponse',
  'GetStockEx' => '\\GetStockEx',
  'GetStockExResponse' => '\\GetStockExResponse',
  'SetOrderStateTriggerUrl' => '\\SetOrderStateTriggerUrl',
  'SetOrderStateTriggerUrlResponse' => '\\SetOrderStateTriggerUrlResponse',
  'ArgumentException' => '\\ArgumentException',
  'SystemException' => '\\SystemException',
  'Exception' => '\\ExceptionCustom',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://framework.farmad.be/WebshopSynchronizer/Synchronizer.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SynchronizerVersion $parameters
     * @return SynchronizerVersionResponse
     */
    public function SynchronizerVersion(SynchronizerVersion $parameters)
    {
      return $this->__soapCall('SynchronizerVersion', array($parameters));
    }

    /**
     * @param AuthenticatePatient $parameters
     * @return AuthenticatePatientResponse
     */
    public function AuthenticatePatient(AuthenticatePatient $parameters)
    {
      return $this->__soapCall('AuthenticatePatient', array($parameters));
    }

    /**
     * @param EditPatient $parameters
     * @return EditPatientResponse
     */
    public function EditPatient(EditPatient $parameters)
    {
      return $this->__soapCall('EditPatient', array($parameters));
    }

    /**
     * @param GetShippingCosts $parameters
     * @return GetShippingCostsResponse
     */
    public function GetShippingCosts(GetShippingCosts $parameters)
    {
      return $this->__soapCall('GetShippingCosts', array($parameters));
    }

    /**
     * @param GetCategories $parameters
     * @return GetCategoriesResponse
     */
    public function GetCategories(GetCategories $parameters)
    {
      return $this->__soapCall('GetCategories', array($parameters));
    }

    /**
     * @param GetPatient $parameters
     * @return GetPatientResponse
     */
    public function GetPatient(GetPatient $parameters)
    {
      return $this->__soapCall('GetPatient', array($parameters));
    }

    /**
     * @param GetPatientOrders $parameters
     * @return GetPatientOrdersResponse
     */
    public function GetPatientOrders(GetPatientOrders $parameters)
    {
      return $this->__soapCall('GetPatientOrders', array($parameters));
    }

    /**
     * @param GetProductInfos $parameters
     * @return GetProductInfosResponse
     */
    public function GetProductInfos(GetProductInfos $parameters)
    {
      return $this->__soapCall('GetProductInfos', array($parameters));
    }

    /**
     * @param GetProductinfoFragmented $parameters
     * @return GetProductinfoFragmentedResponse
     */
    public function GetProductinfoFragmented(GetProductinfoFragmented $parameters)
    {
      return $this->__soapCall('GetProductinfoFragmented', array($parameters));
    }

    /**
     * @param GetCompendiumInfos $parameters
     * @return GetCompendiumInfosResponse
     */
    public function GetCompendiumInfos(GetCompendiumInfos $parameters)
    {
      return $this->__soapCall('GetCompendiumInfos', array($parameters));
    }

    /**
     * @param GetProductInfosDelta $parameters
     * @return GetProductInfosDeltaResponse
     */
    public function GetProductInfosDelta(GetProductInfosDelta $parameters)
    {
      return $this->__soapCall('GetProductInfosDelta', array($parameters));
    }

    /**
     * @param PatientExists $parameters
     * @return PatientExistsResponse
     */
    public function PatientExists(PatientExists $parameters)
    {
      return $this->__soapCall('PatientExists', array($parameters));
    }

    /**
     * @param SetTriggerUrl $parameters
     * @return SetTriggerUrlResponse
     */
    public function SetTriggerUrl(SetTriggerUrl $parameters)
    {
      return $this->__soapCall('SetTriggerUrl', array($parameters));
    }

    /**
     * @param RegisterPatient $parameters
     * @return RegisterPatientResponse
     */
    public function RegisterPatient(RegisterPatient $parameters)
    {
      return $this->__soapCall('RegisterPatient', array($parameters));
    }

    /**
     * @param SubmitOrder $parameters
     * @return SubmitOrderResponse
     */
    public function SubmitOrder(SubmitOrder $parameters)
    {
      return $this->__soapCall('SubmitOrder', array($parameters));
    }

    /**
     * @param GetStock $parameters
     * @return GetStockResponse
     */
    public function GetStock(GetStock $parameters)
    {
      return $this->__soapCall('GetStock', array($parameters));
    }

    /**
     * @param GetStockEx $parameters
     * @return GetStockExResponse
     */
    public function GetStockEx(GetStockEx $parameters)
    {
      return $this->__soapCall('GetStockEx', array($parameters));
    }

    /**
     * @param SetOrderStateTriggerUrl $parameters
     * @return SetOrderStateTriggerUrlResponse
     */
    public function SetOrderStateTriggerUrl(SetOrderStateTriggerUrl $parameters)
    {
      return $this->__soapCall('SetOrderStateTriggerUrl', array($parameters));
    }

}
