# Transactions

```php
$transactionsController = $client->getTransactionsController();
```

## Class Name

`TransactionsController`


# Get Transaction

```php
function getTransaction(string $transactionId): GetTransactionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionId` | `string` | Template, Required | - |

## Response Type

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Example Usage

```php
$transactionId = 'transaction_id8';

$result = $transactionsController->getTransaction($transactionId);
```

