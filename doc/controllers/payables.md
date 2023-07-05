# Payables

```php
$payablesController = $client->getPayablesController();
```

## Class Name

`PayablesController`

## Methods

* [Get Payables](../../doc/controllers/payables.md#get-payables)
* [Get Payable by Id](../../doc/controllers/payables.md#get-payable-by-id)


# Get Payables

```php
function getPayables(
    ?string $type = null,
    ?string $splitId = null,
    ?string $bulkAnticipationId = null,
    ?int $installment = null,
    ?string $status = null,
    ?string $recipientId = null,
    ?int $amount = null,
    ?string $chargeId = null,
    ?string $paymentDateUntil = null,
    ?\DateTime $paymentDateSince = null,
    ?\DateTime $updatedUntil = null,
    ?\DateTime $updatedSince = null,
    ?\DateTime $createdUntil = null,
    ?\DateTime $createdSince = null,
    ?string $liquidationArrangementId = null,
    ?int $page = null,
    ?int $size = null,
    ?int $gatewayId = null
): ListPayablesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | `?string` | Query, Optional | - |
| `splitId` | `?string` | Query, Optional | - |
| `bulkAnticipationId` | `?string` | Query, Optional | - |
| `installment` | `?int` | Query, Optional | - |
| `status` | `?string` | Query, Optional | - |
| `recipientId` | `?string` | Query, Optional | - |
| `amount` | `?int` | Query, Optional | - |
| `chargeId` | `?string` | Query, Optional | - |
| `paymentDateUntil` | `?string` | Query, Optional | - |
| `paymentDateSince` | `?DateTime` | Query, Optional | - |
| `updatedUntil` | `?DateTime` | Query, Optional | - |
| `updatedSince` | `?DateTime` | Query, Optional | - |
| `createdUntil` | `?DateTime` | Query, Optional | - |
| `createdSince` | `?DateTime` | Query, Optional | - |
| `liquidationArrangementId` | `?string` | Query, Optional | - |
| `page` | `?int` | Query, Optional | - |
| `size` | `?int` | Query, Optional | - |
| `gatewayId` | `?int` | Query, Optional | - |

## Response Type

[`ListPayablesResponse`](../../doc/models/list-payables-response.md)

## Example Usage

```php
$result = $payablesController->getPayables();
```


# Get Payable by Id

```php
function getPayableById(int $id): GetPayableResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Template, Required | - |

## Response Type

[`GetPayableResponse`](../../doc/models/get-payable-response.md)

## Example Usage

```php
$id = 112;

$result = $payablesController->getPayableById($id);
```

