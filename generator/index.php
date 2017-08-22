<?php
require 'vendor/autoload.php';
$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
		new \Wsdl2PhpGenerator\Config(array(
				'inputFile' => 'http://framework.farmad.be/WebshopSynchronizer/Synchronizer.svc?wsdl',
				'outputDir' => '\techapp\xampp\htdocs\ZorgpuntSync\farmadsync\classes'
		))
);
echo 'compleet';