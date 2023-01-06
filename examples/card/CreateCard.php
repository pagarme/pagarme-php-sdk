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

        $card = new PagarmeApiSDKLib\Models\CreateCardRequest(
            "4000000000000010",
            "Tony stark",
            1,
            2025,
            "123",$address,"","", 
              ['key0' => 'metadata9',
               'key1' => 'metadata0'],"",
               new PagarmeApiSDKLib\Models\CreateCardOptionsRequest(false),
               false,""

        );
    
        $customerId = "cus_z6WBYzNhXZd2";
        $result = $customerController->createCard($customerId, $card);
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    catch (Exception $ex) {
        echo var_dump($ex, JSON_PRETTY_PRINT);
    }
?>