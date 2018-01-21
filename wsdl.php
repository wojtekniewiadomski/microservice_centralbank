<?php
include_once 'exchangeRates.php';
include_once '../php2wsdl/autoloader.php';

$exchangeRates = new Uniwizard\ExchangeRates();
//$class = "Uniwizard\\ExchangeRates";

$serviceURI = "http://centralbank.microservice.uniwizard.com";
$wsdlGenerator = new Uniwizard\Wsdl\PHPClass2WSDL($exchangeRates, $serviceURI);
$wsdlGenerator->generateWSDL();
//$wsdlXML = $wsdlGenerator->dump();
$wsdlXML = $wsdlGenerator->save('base.wsdl');
