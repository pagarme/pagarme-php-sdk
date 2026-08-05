
# Get Cash Transaction Response

Response object for getting a cash transaction

## Structure

`GetCashTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | Description | getDescription(): ?string | setDescription(?string description): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCashTransactionResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getCashTransactionResponse = GetCashTransactionResponseBuilder::init()
    ->gatewayId('gateway_id8')
    ->amount(40)
    ->status('status6')
    ->success(false)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->description('description6')
    ->build();
```

