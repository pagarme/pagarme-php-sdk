# Charges

```php
$chargesController = $client->getChargesController();
```

## Class Name

`ChargesController`

## Methods

* [Update Charge Metadata](/doc/controllers/charges.md#update-charge-metadata)
* [Update Charge Payment Method](/doc/controllers/charges.md#update-charge-payment-method)
* [Get Charge Transactions](/doc/controllers/charges.md#get-charge-transactions)
* [Update Charge Due Date](/doc/controllers/charges.md#update-charge-due-date)
* [Get Charges](/doc/controllers/charges.md#get-charges)
* [Capture Charge](/doc/controllers/charges.md#capture-charge)
* [Update Charge Card](/doc/controllers/charges.md#update-charge-card)
* [Get Charge](/doc/controllers/charges.md#get-charge)
* [Get Charges Summary](/doc/controllers/charges.md#get-charges-summary)
* [Retry Charge](/doc/controllers/charges.md#retry-charge)
* [Cancel Charge](/doc/controllers/charges.md#cancel-charge)
* [Create Charge](/doc/controllers/charges.md#create-charge)
* [Confirm Payment](/doc/controllers/charges.md#confirm-payment)


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
| `request` | [`UpdateMetadataRequest`](/doc/models/update-metadata-request.md) | Body, Required | Request for updating the charge metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\UpdateMetadataRequest(
    $request_metadata
);

$result = $chargesController->updateChargeMetadata($chargeId, $request);
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
| `request` | [`UpdateChargePaymentMethodRequest`](/doc/models/update-charge-payment-method-request.md) | Body, Required | Request for updating the payment method from a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';
$request_updateSubscription = false;
$request_paymentMethod = 'payment_method4';
$request_creditCard = new Models\CreateCreditCardPaymentRequest;
$request_debitCard = new Models\CreateDebitCardPaymentRequest;
$request_boleto_retries = 10;
$request_boleto_bank = 'bank4';
$request_boleto_instructions = 'instructions4';
$request_boleto_billingAddress_street = 'street8';
$request_boleto_billingAddress_number = 'number4';
$request_boleto_billingAddress_zipCode = 'zip_code2';
$request_boleto_billingAddress_neighborhood = 'neighborhood4';
$request_boleto_billingAddress_city = 'city2';
$request_boleto_billingAddress_state = 'state6';
$request_boleto_billingAddress_country = 'country2';
$request_boleto_billingAddress_complement = 'complement6';
$request_boleto_billingAddress_metadata = ['key0' => 'metadata5'];
$request_boleto_billingAddress_line1 = 'line_18';
$request_boleto_billingAddress_line2 = 'line_26';
$request_boleto_billingAddress = new Models\CreateAddressRequest(
    $request_boleto_billingAddress_street,
    $request_boleto_billingAddress_number,
    $request_boleto_billingAddress_zipCode,
    $request_boleto_billingAddress_neighborhood,
    $request_boleto_billingAddress_city,
    $request_boleto_billingAddress_state,
    $request_boleto_billingAddress_country,
    $request_boleto_billingAddress_complement,
    $request_boleto_billingAddress_metadata,
    $request_boleto_billingAddress_line1,
    $request_boleto_billingAddress_line2
);
$request_boleto_billingAddressId = 'billing_address_id2';
$request_boleto_documentNumber = 'document_number0';
$request_boleto_statementDescriptor = 'statement_descriptor6';
$request_boleto = new Models\CreateBoletoPaymentRequest(
    $request_boleto_retries,
    $request_boleto_bank,
    $request_boleto_instructions,
    $request_boleto_billingAddress,
    $request_boleto_billingAddressId,
    $request_boleto_documentNumber,
    $request_boleto_statementDescriptor
);
$request_voucher = new Models\CreateVoucherPaymentRequest;
$request_cash_description = 'description6';
$request_cash_confirm = false;
$request_cash = new Models\CreateCashPaymentRequest(
    $request_cash_description,
    $request_cash_confirm
);
$request_bankTransfer_bank = 'bank4';
$request_bankTransfer_retries = 204;
$request_bankTransfer = new Models\CreateBankTransferPaymentRequest(
    $request_bankTransfer_bank,
    $request_bankTransfer_retries
);
$request_privateLabel = new Models\CreatePrivateLabelPaymentRequest;
$request = new Models\UpdateChargePaymentMethodRequest(
    $request_updateSubscription,
    $request_paymentMethod,
    $request_creditCard,
    $request_debitCard,
    $request_boleto,
    $request_voucher,
    $request_cash,
    $request_bankTransfer,
    $request_privateLabel
);

$result = $chargesController->updateChargePaymentMethod($chargeId, $request);
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

[`ListChargeTransactionsResponse`](/doc/models/list-charge-transactions-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->getChargeTransactions($chargeId);
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
| `request` | [`UpdateChargeDueDateRequest`](/doc/models/update-charge-due-date-request.md) | Body, Required | Request for updating the due date |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';
$request = new Models\UpdateChargeDueDateRequest;

$result = $chargesController->updateChargeDueDate($chargeId, $request);
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
| `createdSince` | `?\DateTime` | Query, Optional | Filter for the beginning of the range for charge's creation |
| `createdUntil` | `?\DateTime` | Query, Optional | Filter for the end of the range for charge's creation |

## Response Type

[`ListChargesResponse`](/doc/models/list-charges-response.md)

## Example Usage

```php
$result = $chargesController->getCharges();
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
| `request` | [`?CreateCaptureChargeRequest`](/doc/models/create-capture-charge-request.md) | Body, Optional | Request for capturing a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->captureCharge($chargeId);
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
| `request` | [`UpdateChargeCardRequest`](/doc/models/update-charge-card-request.md) | Body, Required | Request for updating a charge's card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';
$request_updateSubscription = false;
$request_cardId = 'card_id2';
$request_card_number = 'number2';
$request_card_holderName = 'holder_name6';
$request_card_expMonth = 80;
$request_card_expYear = 216;
$request_card_cvv = 'cvv8';
$request_card_billingAddress_street = 'street2';
$request_card_billingAddress_number = 'number0';
$request_card_billingAddress_zipCode = 'zip_code6';
$request_card_billingAddress_neighborhood = 'neighborhood8';
$request_card_billingAddress_city = 'city8';
$request_card_billingAddress_state = 'state2';
$request_card_billingAddress_country = 'country6';
$request_card_billingAddress_complement = 'complement2';
$request_card_billingAddress_metadata = ['key0' => 'metadata1'];
$request_card_billingAddress_line1 = 'line_14';
$request_card_billingAddress_line2 = 'line_20';
$request_card_billingAddress = new Models\CreateAddressRequest(
    $request_card_billingAddress_street,
    $request_card_billingAddress_number,
    $request_card_billingAddress_zipCode,
    $request_card_billingAddress_neighborhood,
    $request_card_billingAddress_city,
    $request_card_billingAddress_state,
    $request_card_billingAddress_country,
    $request_card_billingAddress_complement,
    $request_card_billingAddress_metadata,
    $request_card_billingAddress_line1,
    $request_card_billingAddress_line2
);
$request_card_brand = 'brand4';
$request_card_billingAddressId = 'billing_address_id6';
$request_card_metadata = ['key0' => 'metadata3', 'key1' => 'metadata4', 'key2' => 'metadata5'];
$request_card_type = 'credit';
$request_card_options_verifyCard = false;
$request_card_options = new Models\CreateCardOptionsRequest(
    $request_card_options_verifyCard
);
$request_card_privateLabel = false;
$request_card_label = 'label0';
$request_card = new Models\CreateCardRequest(
    $request_card_number,
    $request_card_holderName,
    $request_card_expMonth,
    $request_card_expYear,
    $request_card_cvv,
    $request_card_billingAddress,
    $request_card_brand,
    $request_card_billingAddressId,
    $request_card_metadata,
    $request_card_type,
    $request_card_options,
    $request_card_privateLabel,
    $request_card_label
);
$request_recurrence = false;
$request = new Models\UpdateChargeCardRequest(
    $request_updateSubscription,
    $request_cardId,
    $request_card,
    $request_recurrence
);

$result = $chargesController->updateChargeCard($chargeId, $request);
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

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->getCharge($chargeId);
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
| `createdSince` | `?\DateTime` | Query, Optional | - |
| `createdUntil` | `?\DateTime` | Query, Optional | - |

## Response Type

[`GetChargesSummaryResponse`](/doc/models/get-charges-summary-response.md)

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

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->retryCharge($chargeId);
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
| `request` | [`?CreateCancelChargeRequest`](/doc/models/create-cancel-charge-request.md) | Body, Optional | Request for cancelling a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->cancelCharge($chargeId);
```


# Create Charge

Creates a new charge

```php
function createCharge(CreateChargeRequest $request, ?string $idempotencyKey = null): GetChargeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateChargeRequest`](/doc/models/create-charge-request.md) | Body, Required | Request for creating a charge |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$request_code = 'code4';
$request_amount = 242;
$request_customerId = 'customer_id4';
$request_customer_name = '{
    "name": "Tony Stark"
}';
$request_customer_email = 'email0';
$request_customer_document = 'document0';
$request_customer_type = 'type4';
$request_customer_address_street = 'street2';
$request_customer_address_number = 'number0';
$request_customer_address_zipCode = 'zip_code6';
$request_customer_address_neighborhood = 'neighborhood8';
$request_customer_address_city = 'city2';
$request_customer_address_state = 'state8';
$request_customer_address_country = 'country6';
$request_customer_address_complement = 'complement8';
$request_customer_address_metadata = ['key0' => 'metadata7', 'key1' => 'metadata6'];
$request_customer_address_line1 = 'line_16';
$request_customer_address_line2 = 'line_20';
$request_customer_address = new Models\CreateAddressRequest(
    $request_customer_address_street,
    $request_customer_address_number,
    $request_customer_address_zipCode,
    $request_customer_address_neighborhood,
    $request_customer_address_city,
    $request_customer_address_state,
    $request_customer_address_country,
    $request_customer_address_complement,
    $request_customer_address_metadata,
    $request_customer_address_line1,
    $request_customer_address_line2
);
$request_customer_metadata = ['key0' => 'metadata3', 'key1' => 'metadata2', 'key2' => 'metadata1'];
$request_customer_phones = new Models\CreatePhonesRequest;
$request_customer_code = 'code4';
$request_customer = new Models\CreateCustomerRequest(
    $request_customer_name,
    $request_customer_email,
    $request_customer_document,
    $request_customer_type,
    $request_customer_address,
    $request_customer_metadata,
    $request_customer_phones,
    $request_customer_code
);
$request_payment_paymentMethod = 'payment_method2';
$request_payment_privateLabel = new Models\CreatePrivateLabelPaymentRequest;
$request_payment = new Models\CreatePaymentRequest(
    $request_payment_paymentMethod,
    $request_payment_privateLabel
);
$request_metadata = ['key0' => 'metadata3'];
$request_antifraud_type = 'type0';
$request_antifraud_clearsale_customSla = 52;
$request_antifraud_clearsale = new Models\CreateClearSaleRequest(
    $request_antifraud_clearsale_customSla
);
$request_antifraud = new Models\CreateAntifraudRequest(
    $request_antifraud_type,
    $request_antifraud_clearsale
);
$request_orderId = 'order_id0';
$request = new Models\CreateChargeRequest(
    $request_code,
    $request_amount,
    $request_customerId,
    $request_customer,
    $request_payment,
    $request_metadata,
    $request_antifraud,
    $request_orderId
);

$result = $chargesController->createCharge($request);
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
| `request` | [`?CreateConfirmPaymentRequest`](/doc/models/create-confirm-payment-request.md) | Body, Optional | Request for confirm payment |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetChargeResponse`](/doc/models/get-charge-response.md)

## Example Usage

```php
$chargeId = 'charge_id8';

$result = $chargesController->confirmPayment($chargeId);
```

