<?php
require_once './vendor/autoload.php';

try 
{
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('basicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->build();

    $recipientController = $client->getRecipientsController();

    $banckAccount = new PagarmeApiSDKLib\Models\CreateBankAccountRequest("Tony stark", "individual", "26224451990", "341", "1234", "6", "1234", "6", "checking", 
    ['key0' => 'metadata7', 'key1' => 'metadata6'], "");
    
    $request = new PagarmeApiSDKLib\Models\CreateRecipientRequest("Tony Stark", "stark@pagar.me", "Recebedor TonyStark", "26224451990", "individual", $banckAccount,
    ['key0' => 'metadata7', 'key1' => 'metadata6'],"1","bank_transfer" );

    $result = $recipientController->createRecipient($request);
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}
catch (Exception $ex) 
{
    echo var_dump($ex, JSON_PRETTY_PRINT);
}
?>