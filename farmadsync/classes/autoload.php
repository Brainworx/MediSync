<?php


 function autoload_8062e298553d6374bac415ad0438e141($class)
{
    $classes = array(
        'Synchronizer' => __DIR__ .'/Synchronizer.php',
        'Patient' => __DIR__ .'/Patient.php',
        'LanguageType' => __DIR__ .'/LanguageType.php',
        'Address' => __DIR__ .'/Address.php',
        'ArrayOfOrder' => __DIR__ .'/ArrayOfOrder.php',
        'Order' => __DIR__ .'/Order.php',
        'OrderState' => __DIR__ .'/OrderState.php',
        'OrderType' => __DIR__ .'/OrderType.php',
        'PaymentType' => __DIR__ .'/PaymentType.php',
        'ArrayOfProduct' => __DIR__ .'/ArrayOfProduct.php',
        'Product' => __DIR__ .'/Product.php',
        'ShipmentType' => __DIR__ .'/ShipmentType.php',
        'ArrayOfStock' => __DIR__ .'/ArrayOfStock.php',
        'Stock' => __DIR__ .'/Stock.php',
        'ArrayOfStockEx' => __DIR__ .'/ArrayOfStockEx.php',
        'StockEx' => __DIR__ .'/StockEx.php',
        'ArrayOfint' => __DIR__ .'/ArrayOfint.php',
        'ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'ArrayOfShippingCost' => __DIR__ .'/ArrayOfShippingCost.php',
        'ShippingCost' => __DIR__ .'/ShippingCost.php',
        'VersionedCategories' => __DIR__ .'/VersionedCategories.php',
        'ArrayOfCategory' => __DIR__ .'/ArrayOfCategory.php',
        'Category' => __DIR__ .'/Category.php',
        'VersionedProductInfos' => __DIR__ .'/VersionedProductInfos.php',
        'ArrayOfProductInfo' => __DIR__ .'/ArrayOfProductInfo.php',
        'ProductInfo' => __DIR__ .'/ProductInfo.php',
        'ArrayOfProductUrl' => __DIR__ .'/ArrayOfProductUrl.php',
        'ProductUrl' => __DIR__ .'/ProductUrl.php',
        'UrlType' => __DIR__ .'/UrlType.php',
        'CompendiumInfos' => __DIR__ .'/CompendiumInfos.php',
        'ArrayOfCompendiumInfo' => __DIR__ .'/ArrayOfCompendiumInfo.php',
        'CompendiumInfo' => __DIR__ .'/CompendiumInfo.php',
        'SynchronizerVersion' => __DIR__ .'/SynchronizerVersion.php',
        'SynchronizerVersionResponse' => __DIR__ .'/SynchronizerVersionResponse.php',
        'AuthenticatePatient' => __DIR__ .'/AuthenticatePatient.php',
        'AuthenticatePatientResponse' => __DIR__ .'/AuthenticatePatientResponse.php',
        'EditPatient' => __DIR__ .'/EditPatient.php',
        'EditPatientResponse' => __DIR__ .'/EditPatientResponse.php',
        'GetShippingCosts' => __DIR__ .'/GetShippingCosts.php',
        'GetShippingCostsResponse' => __DIR__ .'/GetShippingCostsResponse.php',
        'GetCategories' => __DIR__ .'/GetCategories.php',
        'GetCategoriesResponse' => __DIR__ .'/GetCategoriesResponse.php',
        'GetPatient' => __DIR__ .'/GetPatient.php',
        'GetPatientResponse' => __DIR__ .'/GetPatientResponse.php',
        'GetPatientOrders' => __DIR__ .'/GetPatientOrders.php',
        'GetPatientOrdersResponse' => __DIR__ .'/GetPatientOrdersResponse.php',
        'GetProductInfos' => __DIR__ .'/GetProductInfos.php',
        'GetProductInfosResponse' => __DIR__ .'/GetProductInfosResponse.php',
        'GetProductinfoFragmented' => __DIR__ .'/GetProductinfoFragmented.php',
        'GetProductinfoFragmentedResponse' => __DIR__ .'/GetProductinfoFragmentedResponse.php',
        'GetCompendiumInfos' => __DIR__ .'/GetCompendiumInfos.php',
        'GetCompendiumInfosResponse' => __DIR__ .'/GetCompendiumInfosResponse.php',
        'GetProductInfosDelta' => __DIR__ .'/GetProductInfosDelta.php',
        'GetProductInfosDeltaResponse' => __DIR__ .'/GetProductInfosDeltaResponse.php',
        'PatientExists' => __DIR__ .'/PatientExists.php',
        'PatientExistsResponse' => __DIR__ .'/PatientExistsResponse.php',
        'SetTriggerUrl' => __DIR__ .'/SetTriggerUrl.php',
        'SetTriggerUrlResponse' => __DIR__ .'/SetTriggerUrlResponse.php',
        'RegisterPatient' => __DIR__ .'/RegisterPatient.php',
        'RegisterPatientResponse' => __DIR__ .'/RegisterPatientResponse.php',
        'SubmitOrder' => __DIR__ .'/SubmitOrder.php',
        'SubmitOrderResponse' => __DIR__ .'/SubmitOrderResponse.php',
        'GetStock' => __DIR__ .'/GetStock.php',
        'GetStockResponse' => __DIR__ .'/GetStockResponse.php',
        'GetStockEx' => __DIR__ .'/GetStockEx.php',
        'GetStockExResponse' => __DIR__ .'/GetStockExResponse.php',
        'SetOrderStateTriggerUrl' => __DIR__ .'/SetOrderStateTriggerUrl.php',
        'SetOrderStateTriggerUrlResponse' => __DIR__ .'/SetOrderStateTriggerUrlResponse.php',
        'ArgumentException' => __DIR__ .'/ArgumentException.php',
        'SystemException' => __DIR__ .'/SystemException.php',
        'ExceptionCustom' => __DIR__ .'/ExceptionCustom.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_8062e298553d6374bac415ad0438e141');

// Do nothing. The rest is just leftovers from the code generation.
{
}
