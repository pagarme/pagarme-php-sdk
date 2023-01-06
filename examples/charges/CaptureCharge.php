<?php
require_once './vendor/autoload.php';

try 
{
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('basicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->build();

    $chargeController = $client->getChargesController();

    $chargeId = "ch_e9LwArrZIBk2zGp";

    $result = $chargeController->captureCharge($chargeId);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}
catch (Exception $ex) 
{
    echo var_dump($ex, JSON_PRETTY_PRINT);
}
?>