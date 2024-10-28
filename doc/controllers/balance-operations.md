# Balance Operations

```php
$balanceOperationsController = $client->getBalanceOperationsController();
```

## Class Name

`BalanceOperationsController`

## Methods

* [Get Balance Operation by Id](../../doc/controllers/balance-operations.md#get-balance-operation-by-id)
* [Get Balance Operations](../../doc/controllers/balance-operations.md#get-balance-operations)


# Get Balance Operation by Id

```php
function getBalanceOperationById(int $id): GetBalanceOperationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Template, Required | - |

## Response Type

[`GetBalanceOperationResponse`](../../doc/models/get-balance-operation-response.md)

## Example Usage

```php
$id = 112;

$result = $balanceOperationsController->getBalanceOperationById($id);
```


# Get Balance Operations

```php
function getBalanceOperations(
    ?string $status = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null,
    ?string $recipientId = null
): ListBalanceOperationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `status` | `?string` | Query, Optional | - |
| `createdSince` | `?DateTime` | Query, Optional | - |
| `createdUntil` | `?DateTime` | Query, Optional | - |
| `recipientId` | `?string` | Query, Optional | - |

## Response Type

[`ListBalanceOperationResponse`](../../doc/models/list-balance-operation-response.md)

## Example Usage

```php
$result = $balanceOperationsController->getBalanceOperations();
```

