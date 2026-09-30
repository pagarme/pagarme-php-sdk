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
* [Get Payment Links](../../doc/controllers/payment-links.md#get-payment-links)
* [Activate Payment Link](../../doc/controllers/payment-links.md#activate-payment-link)
* [Cancel Payment Link](../../doc/controllers/payment-links.md#cancel-payment-link)


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


# Get Payment Links

Lists payment links

```php
function getPaymentLinks(
    ?string $name = null,
    ?string $status = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null,
    ?int $page = null,
    ?int $perPage = null
): ListPaymentLinksResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `?string` | Query, Optional | Filter for payment link's name |
| `status` | `?string` | Query, Optional | Filter for payment link's status (building, active, cancelled or expired) |
| `createdSince` | `?DateTime` | Query, Optional | Filter for the beginning of the range for payment link's creation |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for the end of the range for payment link's creation |
| `page` | `?int` | Query, Optional | Page number |
| `perPage` | `?int` | Query, Optional | Page size (max 30) |

## Response Type

**200**

[`ListPaymentLinksResponse`](../../doc/models/list-payment-links-response.md)

## Example Usage

```php
$paymentLinksController = $client->getPaymentLinksController();

try {
    $result = $paymentLinksController->getPaymentLinks();
    echo 'ListPaymentLinksResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Activate Payment Link

Activates a payment link created with is_building = true

```php
function activatePaymentLink(string $paymentLinkId, ?string $idempotencyKey = null): void
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `paymentLinkId` | `string` | Template, Required | Payment link id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

`void`

## Example Usage

```php
$paymentLinkId = 'payment_link_id6';

$paymentLinksController = $client->getPaymentLinksController();

try {
    $paymentLinksController->activatePaymentLink($paymentLinkId);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Cancel Payment Link

Cancels an active payment link

```php
function cancelPaymentLink(string $paymentLinkId, ?string $idempotencyKey = null): void
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `paymentLinkId` | `string` | Template, Required | Payment link id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

`void`

## Example Usage

```php
$paymentLinkId = 'payment_link_id6';

$paymentLinksController = $client->getPaymentLinksController();

try {
    $paymentLinksController->cancelPaymentLink($paymentLinkId);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

