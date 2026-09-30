# Payment Links

```php
$paymentLinksController = $client->getPaymentLinksController();
```

Payment Links are served from a different host for test accounts. When using a `sk_test_` key, initialize the client with `->environment(Environment::SANDBOX)`; production accounts use the default `Environment::PRODUCTION`.

## Class Name

`PaymentLinksController`

## Methods

* [Create Payment Link](../../doc/controllers/payment-links.md#create-payment-link)
* [Get Payment Link](../../doc/controllers/payment-links.md#get-payment-link)


# Create Payment Link

Creates a new payment link

```php
function createPaymentLink(
    CreatePaymentLinkRequest $body,
    ?string $idempotencyKey = null
): GetPaymentLinkResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreatePaymentLinkRequest`](../../doc/models/create-payment-link-request.md) | Body, Required | Request for creating a payment link |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPaymentLinkResponse`](../../doc/models/get-payment-link-response.md)

## Example Usage

```php
$body = CreatePaymentLinkRequestBuilder::init(
    'order',
    CreatePaymentLinkPaymentSettingsRequestBuilder::init(
        [
            'credit_card'
        ]
    )
        ->creditCardSettings(
            CreatePaymentLinkCreditCardSettingsRequestBuilder::init(
                'auth_and_capture'
            )
                ->installments(
                    [
                        CreatePaymentLinkInstallmentRequestBuilder::init(
                            1,
                            10000
                        )->build()
                    ]
                )
                ->build()
        )
        ->build(),
    CreatePaymentLinkCartSettingsRequestBuilder::init()
        ->items(
            [
                CreatePaymentLinkCartItemRequestBuilder::init(
                    'Consulta',
                    10000,
                    1
                )->build()
            ]
        )
        ->build()
)
    ->customerSettings(
        CreatePaymentLinkCustomerSettingsRequestBuilder::init()
            ->customerId('cus_id4')
            ->build()
    )
    ->build();

$paymentLinksController = $client->getPaymentLinksController();

try {
    $result = $paymentLinksController->createPaymentLink($body);
    echo 'GetPaymentLinkResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Payment Link

Gets a payment link

```php
function getPaymentLink(string $paymentLinkId): GetPaymentLinkResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `paymentLinkId` | `string` | Template, Required | Payment link id |

## Response Type

**200**

[`GetPaymentLinkResponse`](../../doc/models/get-payment-link-response.md)

## Example Usage

```php
$paymentLinkId = 'payment_link_id6';

$paymentLinksController = $client->getPaymentLinksController();

try {
    $result = $paymentLinksController->getPaymentLink($paymentLinkId);
    echo 'GetPaymentLinkResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

