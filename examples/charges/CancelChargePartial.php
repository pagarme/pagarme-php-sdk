<?php
require_once './vendor/autoload.php';

try 
{
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('basicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->build();

    $chargeController = $client->getChargesController();

    $chargeId = "ch_BrW2jVuuin1E7D";

    $request = new PagarmeApiSDKLib\Models\CreateCancelChargeRequest("");
    $request->setAmount(1000);

    $result = $chargeController->cancelCharge($chargeId, $request);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}
catch (Exception $ex) 
{
    echo var_dump($ex, JSON_PRETTY_PRINT);
}
?>