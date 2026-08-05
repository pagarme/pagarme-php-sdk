# Invoices

```php
$invoicesController = $client->getInvoicesController();
```

## Class Name

`InvoicesController`

## Methods

* [Cancel Invoice](../../doc/controllers/invoices.md#cancel-invoice)
* [Create Invoice](../../doc/controllers/invoices.md#create-invoice)
* [Get Invoice](../../doc/controllers/invoices.md#get-invoice)
* [Get Invoices](../../doc/controllers/invoices.md#get-invoices)
* [Get Partial Invoice](../../doc/controllers/invoices.md#get-partial-invoice)
* [Update Invoice Metadata](../../doc/controllers/invoices.md#update-invoice-metadata)
* [Update Invoice Status](../../doc/controllers/invoices.md#update-invoice-status)


# Cancel Invoice

Cancels an invoice

```php
function cancelInvoice(string $invoiceId, ?string $idempotencyKey = null): GetInvoiceResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `invoiceId` | `string` | Template, Required | Invoice id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetInvoiceResponse`](../../doc/models/get-invoice-response.md)

## Example Usage

```php
$invoiceId = 'invoice_id0';

$invoicesController = $client->getInvoicesController();

try {
    $result = $invoicesController->cancelInvoice($invoiceId);
    echo 'GetInvoiceResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Invoice

Create an Invoice

```php
function createInvoice(
    string $subscriptionId,
    string $cycleId,
    ?CreateInvoiceRequest $request = null,
    ?string $idempotencyKey = null
): GetInvoiceResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `cycleId` | `string` | Template, Required | Cycle Id |
| `request` | [`?CreateInvoiceRequest`](../../doc/models/create-invoice-request.md) | Body, Optional | - |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetInvoiceResponse`](../../doc/models/get-invoice-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$cycleId = 'cycle_id6';

$invoicesController = $client->getInvoicesController();

try {
    $result = $invoicesController->createInvoice(
        $subscriptionId,
        $cycleId
    );
    echo 'GetInvoiceResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Invoice

Gets an invoice

```php
function getInvoice(string $invoiceId): GetInvoiceResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `invoiceId` | `string` | Template, Required | Invoice Id |

## Response Type

**200**

[`GetInvoiceResponse`](../../doc/models/get-invoice-response.md)

## Example Usage

```php
$invoiceId = 'invoice_id0';

$invoicesController = $client->getInvoicesController();

try {
    $result = $invoicesController->getInvoice($invoiceId);
    echo 'GetInvoiceResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Invoices

Gets all invoices

```php
function getInvoices(
    ?int $page = null,
    ?int $size = null,
    ?string $code = null,
    ?string $customerId = null,
    ?string $subscriptionId = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null,
    ?string $status = null,
    ?\DateTime $dueSince = null,
    ?\DateTime $dueUntil = null,
    ?string $customerDocument = null
): ListInvoicesResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Filter for Invoice's code |
| `customerId` | `?string` | Query, Optional | Filter for Invoice's customer id |
| `subscriptionId` | `?string` | Query, Optional | Filter for Invoice's subscription id |
| `createdSince` | `?DateTime` | Query, Optional | Filter for Invoice's creation date start range |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for Invoices creation date end range |
| `status` | `?string` | Query, Optional | Filter for Invoice's status |
| `dueSince` | `?DateTime` | Query, Optional | Filter for Invoice's due date start range |
| `dueUntil` | `?DateTime` | Query, Optional | Filter for Invoice's due date end range |
| `customerDocument` | `?string` | Query, Optional | - |

## Response Type

**200**

[`ListInvoicesResponse`](../../doc/models/list-invoices-response.md)

## Example Usage

```php
$invoicesController = $client->getInvoicesController();

try {
    $result = $invoicesController->getInvoices();
    echo 'ListInvoicesResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Partial Invoice

```php
function getPartialInvoice(string $subscriptionId): GetInvoiceResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |

## Response Type

**200**

[`GetInvoiceResponse`](../../doc/models/get-invoice-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$invoicesController = $client->getInvoicesController();

try {
    $result = $invoicesController->getPartialInvoice($subscriptionId);
    echo 'GetInvoiceResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Invoice Metadata

Updates the metadata from an invoice

```php
function updateInvoiceMetadata(
    string $invoiceId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetInvoiceResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `invoiceId` | `string` | Template, Required | The invoice id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the invoice metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetInvoiceResponse`](../../doc/models/get-invoice-response.md)

## Example Usage

```php
$invoiceId = 'invoice_id0';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$invoicesController = $client->getInvoicesController();

try {
    $result = $invoicesController->updateInvoiceMetadata(
        $invoiceId,
        $request
    );
    echo 'GetInvoiceResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Invoice Status

Updates the status from an invoice

```php
function updateInvoiceStatus(
    string $invoiceId,
    UpdateInvoiceStatusRequest $request,
    ?string $idempotencyKey = null
): GetInvoiceResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `invoiceId` | `string` | Template, Required | Invoice Id |
| `request` | [`UpdateInvoiceStatusRequest`](../../doc/models/update-invoice-status-request.md) | Body, Required | Request for updating an invoice's status |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetInvoiceResponse`](../../doc/models/get-invoice-response.md)

## Example Usage

```php
$invoiceId = 'invoice_id0';

$request = UpdateInvoiceStatusRequestBuilder::init(
    'status8'
)->build();

$invoicesController = $client->getInvoicesController();

try {
    $result = $invoicesController->updateInvoiceStatus(
        $invoiceId,
        $request
    );
    echo 'GetInvoiceResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

