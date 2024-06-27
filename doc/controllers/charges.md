# Charges

```php
$chargesController = $client->getChargesController();
```

## Class Name

`ChargesController`

## Methods

* [Update Charge Metadata](../../doc/controllers/charges.md#update-charge-metadata)
* [Capture Charge](../../doc/controllers/charges.md#capture-charge)
* [Get Charge](../../doc/controllers/charges.md#get-charge)
* [Confirm Payment](../../doc/controllers/charges.md#confirm-payment)
* [Get Charge Transactions](../../doc/controllers/charges.md#get-charge-transactions)
* [Update Charge Card](../../doc/controllers/charges.md#update-charge-card)
* [Create Charge](../../doc/controllers/charges.md#create-charge)
* [Update Charge Payment Method](../../doc/controllers/charges.md#update-charge-payment-method)
* [Update Charge Due Date](../../doc/controllers/charges.md#update-charge-due-date)
* [Get Charges Summary](../../doc/controllers/charges.md#get-charges-summary)
* [Retry Charge](../../doc/controllers/charges.md#retry-charge)
* [Get Charges](../../doc/controllers/charges.md#get-charges)
* [Cancel Charge](../../doc/controllers/charges.md#cancel-charge)


# Update Charge Metadata

Updates the metadata from a charge

```php
function updateChargeMetadata(
    string $chargeId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | The charge id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the charge metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$result = $chargesController->updateChargeMetadata(
    $chargeId,
    $request
);
```


# Capture Charge

Captures a charge

```php
function captureCharge(
    string $chargeId,
    ?CreateCaptureChargeRequest $request = null,
    ?string $idempotencyKey = null
): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge id |
| `request` | [`?CreateCaptureChargeRequest`](../../doc/models/create-capture-charge-request.md) | Body, Optional | Request for capturing a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->captureCharge($chargeId);
```


# Get Charge

Get a charge from its id

```php
function getCharge(string $chargeId): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge id |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->getCharge($chargeId);
```


# Confirm Payment

```php
function confirmPayment(
    string $chargeId,
    ?CreateConfirmPaymentRequest $request = null,
    ?string $idempotencyKey = null
): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | - |
| `request` | [`?CreateConfirmPaymentRequest`](../../doc/models/create-confirm-payment-request.md) | Body, Optional | Request for confirm payment |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->confirmPayment($chargeId);
```


# Get Charge Transactions

```php
function getChargeTransactions(
    string $chargeId,
    ?int $page = null,
    ?int $size = null
): ListChargeTransactionsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge Id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

[`ListChargeTransactionsResponse`](../../doc/models/list-charge-transactions-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->getChargeTransactions($chargeId);
```


# Update Charge Card

Updates the card from a charge

```php
function updateChargeCard(
    string $chargeId,
    UpdateChargeCardRequest $request,
    ?string $idempotencyKey = null
): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge id |
| `request` | [`UpdateChargeCardRequest`](../../doc/models/update-charge-card-request.md) | Body, Required | Request for updating a charge's card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$request = UpdateChargeCardRequestBuilder::init(
    false,
    'card_id2',
    CreateCardRequestBuilder::init()
        ->type('credit')
        ->build(),
    false
)->build();

$result = $chargesController->updateChargeCard(
    $chargeId,
    $request
);
```


# Create Charge

Creates a new charge

```php
function createCharge(CreateChargeRequest $request, ?string $idempotencyKey = null): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateChargeRequest`](../../doc/models/create-charge-request.md) | Body, Required | Request for creating a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$request = CreateChargeRequestBuilder::init(
    242,
    CreatePaymentRequestBuilder::init(
        'payment_method4'
    )->build(),
    'order_id0'
)->build();

$result = $chargesController->createCharge($request);
```


# Update Charge Payment Method

Updates a charge's payment method

```php
function updateChargePaymentMethod(
    string $chargeId,
    UpdateChargePaymentMethodRequest $request,
    ?string $idempotencyKey = null
): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge id |
| `request` | [`UpdateChargePaymentMethodRequest`](../../doc/models/update-charge-payment-method-request.md) | Body, Required | Request for updating the payment method from a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$request = UpdateChargePaymentMethodRequestBuilder::init(
    false,
    'payment_method4',
    CreateCreditCardPaymentRequestBuilder::init()
        ->installments(1)
        ->capture(true)
        ->recurrencyCycle('"first" or "subsequent"')
        ->build(),
    CreateDebitCardPaymentRequestBuilder::init()->build(),
    CreateBoletoPaymentRequestBuilder::init(
        226,
        'instructions2',
        CreateAddressRequestBuilder::init(
            'street8',
            'number4',
            'zip_code2',
            'neighborhood4',
            'city2',
            'state6',
            'country2',
            'complement6',
            'line_18',
            'line_26'
        )->build(),
        'document_number6',
        'statement_descriptor0'
    )->build(),
    CreateVoucherPaymentRequestBuilder::init()
        ->recurrencyCycle('"first" or "subsequent"')
        ->build(),
    CreateCashPaymentRequestBuilder::init(
        'description0',
        false
    )->build(),
    CreateBankTransferPaymentRequestBuilder::init(
        'bank0',
        236
    )->build(),
    CreatePrivateLabelPaymentRequestBuilder::init()
        ->installments(1)
        ->capture(true)
        ->recurrencyCycle('"first" or "subsequent"')
        ->build()
)->build();

$result = $chargesController->updateChargePaymentMethod(
    $chargeId,
    $request
);
```


# Update Charge Due Date

Updates the due date from a charge

```php
function updateChargeDueDate(
    string $chargeId,
    UpdateChargeDueDateRequest $request,
    ?string $idempotencyKey = null
): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge Id |
| `request` | [`UpdateChargeDueDateRequest`](../../doc/models/update-charge-due-date-request.md) | Body, Required | Request for updating the due date |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$request = UpdateChargeDueDateRequestBuilder::init()->build();

$result = $chargesController->updateChargeDueDate(
    $chargeId,
    $request
);
```


# Get Charges Summary

```php
function getChargesSummary(
    string $status,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): GetChargesSummaryResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `status` | `string` | Query, Required | - |
| `createdSince` | `?DateTime` | Query, Optional | - |
| `createdUntil` | `?DateTime` | Query, Optional | - |

## Response Type

[`GetChargesSummaryResponse`](../../doc/models/get-charges-summary-response.md)

## Example Usage

```php
$status = 'status8';

$result = $chargesController->getChargesSummary($status);
```


# Retry Charge

Retries a charge

```php
function retryCharge(string $chargeId, ?string $idempotencyKey = null): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->retryCharge($chargeId);
```


# Get Charges

Lists all charges

```php
function getCharges(
    ?int $page = null,
    ?int $size = null,
    ?string $code = null,
    ?string $status = null,
    ?string $paymentMethod = null,
    ?string $customerId = null,
    ?string $orderId = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): ListChargesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Filter for charge's code |
| `status` | `?string` | Query, Optional | Filter for charge's status |
| `paymentMethod` | `?string` | Query, Optional | Filter for charge's payment method |
| `customerId` | `?string` | Query, Optional | Filter for charge's customer id |
| `orderId` | `?string` | Query, Optional | Filter for charge's order id |
| `createdSince` | `?DateTime` | Query, Optional | Filter for the beginning of the range for charge's creation |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for the end of the range for charge's creation |

## Response Type

[`ListChargesResponse`](../../doc/models/list-charges-response.md)

## Example Usage

```php
$result = $chargesController->getCharges();
```


# Cancel Charge

Cancel a charge

```php
function cancelCharge(
    string $chargeId,
    ?CreateCancelChargeRequest $request = null,
    ?string $idempotencyKey = null
): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chargeId` | `string` | Template, Required | Charge id |
| `request` | [`?CreateCancelChargeRequest`](../../doc/models/create-cancel-charge-request.md) | Body, Optional | Request for cancelling a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](../../doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->cancelCharge($chargeId);
```

