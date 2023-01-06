<?php
require_once './vendor/autoload.php';

try {
    $client = PagarmeApiSDKLib\PagarmeApiSDKClientBuilder::init()
        ->basicAuthUserName('basicAuthUserName')
        ->basicAuthPassword('BasicAuthPassword')
        ->build();

        $ordersController = $client->getOrdersController();

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

        $pix = new PagarmeApiSDKLib\Models\CreatePixPaymentRequest();
        $pix->setExpiresAt(new DateTime('2023-01-31T00:00:00Z'));
        $pix->setAdditionalInformation([new PagarmeApiSDKLib\Models\PixAdditionalInformation("quantidade","2")]);

        $payment = new PagarmeApiSDKLib\Models\CreatePaymentRequest("pix");
        $payment->setPix($pix);
    
        $request = new PagarmeApiSDKLib\Models\CreateOrderRequest(
             [new PagarmeApiSDKLib\Models\CreateOrderItemRequest(1490,"telefone",1,"eletronico")],
             $customer,[$payment], "code", "", ['key0' => 'metadata9', 'key1' => 'metadata0'], false
        );
    
        $result = $ordersController->createOrder($request);
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    catch (Exception $ex) {
        echo var_dump($ex, JSON_PRETTY_PRINT);
    }
?>