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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionId` | `string` | Template, Required | - |

## Response Type

**200**

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Example Usage

```php
$transactionId = 'transaction_id8';

$transactionsController = $client->getTransactionsController();

try {
    $result = $transactionsController->getTransaction($transactionId);
    echo 'GetTransactionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

