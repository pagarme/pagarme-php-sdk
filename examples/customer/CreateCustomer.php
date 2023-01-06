<?php
require_once './vendor/autoload.php';

try {
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
        ->basicAuthUserName('basicAuthUserName')
        ->basicAuthPassword('BasicAuthPassword')
        ->build();

        $customerController = $client->getCustomersController();

        $address =  new PagarmeApiSDKLib\Models\CreateAddressRequest(
            "Malibu Point",
            "10880",
            "90265",
            "Central Malibu",
            "Malibu",
            "CA",
            "US",
            "complement1",
            ['key0' => 'metadata7', 'key1' => 'metadata6'],
            "line1",
            "line2"
        );

        $customer = new PagarmeApiSDKLib\Models\CreateCustomerRequest(
            "magno",
            "magno.moreira@pagarme.com",
            "90352621079",
            "individual",
          $address,
            ['key0' => 'metadata9', 'key1' => 'metadata0'],
            new PagarmeApiSDKLib\Models\CreatePhonesRequest(),
            "code2"
        );
    
        $result = $customerController->createCustomer($customer);
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    catch (Exception $ex) {
        echo var_dump($ex, JSON_PRETTY_PRINT);
    }
?>