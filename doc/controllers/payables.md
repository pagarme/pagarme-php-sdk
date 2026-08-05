# Payables

```php
$payablesController = $client->getPayablesController();
```

## Class Name

`PayablesController`


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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

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

**200**

[`ListPayablesResponse`](../../doc/models/list-payables-response.md)

## Example Usage

```php
$payablesController = $client->getPayablesController();

try {
    $result = $payablesController->getPayables();
    echo 'ListPayablesResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

