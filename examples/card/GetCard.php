<?php
require_once './vendor/autoload.php';

try 
{
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('basicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->build();

    $customerController = $client->getCustomersController();

    $customerId = "cus_z6WBYzNhliZd2";
    $cardId = "card_R4e0W1K4l5gx";
    $result = $customerController->getCard($customerId, $cardId);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}
catch (Exception $ex) 
{
    echo var_dump($ex, JSON_PRETTY_PRINT);
}
?>