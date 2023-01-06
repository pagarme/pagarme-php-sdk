<?php
require_once './vendor/autoload.php';

try 
{
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('basicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->build();

    $recipientController = $client->getRecipientsController();

    $recipientId = "rp_xO1jpA5so6Ighjb";
    $result = $recipientController->getRecipient($recipientId);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}
catch (Exception $ex) 
{
    echo var_dump($ex, JSON_PRETTY_PRINT);
}
?>