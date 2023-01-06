<?php
require_once './vendor/autoload.php';

try 
{
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('basicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->build();

    $recipientController = $client->getRecipientsController();

    $request = new PagarmeApiSDKLib\Models\CreateAnticipationRequest(1000, "start", datetime::createFromFormat("Y-m-d", "2020-12-12"));
    $recipientId = "recipientId";
    $result = $recipientController->createAnticipation($recipientId, $request);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}
catch (Exception $ex) 
{
    echo var_dump($ex, JSON_PRETTY_PRINT);
}
?>