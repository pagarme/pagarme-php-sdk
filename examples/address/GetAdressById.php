<?php
require_once './vendor/autoload.php';

try 
{
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('basicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->build();

    $customerController = $client->getCustomersController();

    $customerId = "cus_z6WBYzNhlioYX";
    $addressId = "addr_zba6e5RuDCQn6";
    $result = $customerController->getAddress($customerId, $addressId);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}
catch (Exception $ex) 
{
    echo var_dump($ex, JSON_PRETTY_PRINT);
}
?>