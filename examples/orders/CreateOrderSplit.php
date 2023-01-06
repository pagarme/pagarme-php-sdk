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

        $creditCard = new PagarmeApiSDKLib\Models\CreateCreditCardPaymentRequest();
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
        
        $creditCard->setCard($card);
        $creditCard->setCapture(false);

        $payment = new PagarmeApiSDKLib\Models\CreatePaymentRequest("credit_card");
        $payment->setCreditCard($creditCard);
        $payment->setSplit([
            new PagarmeApiSDKLib\Models\CreateSplitRequest("flat", 100000, "rp_xO1jpA5so6I1peMb" ),
            new PagarmeApiSDKLib\Models\CreateSplitRequest("flat", 100000, "rp_xO1jpA5so6I1peMb" )
        ]);
    
        $request = new PagarmeApiSDKLib\Models\CreateOrderRequest(
             [new PagarmeApiSDKLib\Models\CreateOrderItemRequest(200000,"telefone",1,"eletronico")],
             $customer,[$payment], "code", "", ['key0' => 'metadata9', 'key1' => 'metadata0'], false
        );
    
        $result = $ordersController->createOrder($request);

        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    catch (Exception $ex) {
        echo var_dump($ex, JSON_PRETTY_PRINT);
    }
?>