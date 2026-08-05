
# Create Setup Request

Request for creating a Setup for a subscription. The setup is an order that will be created at the subscription creation.

## Structure

`CreateSetupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Setup amount | getAmount(): int | setAmount(int amount): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `payment` | [`CreatePaymentRequest`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayment(): CreatePaymentRequest | setPayment(CreatePaymentRequest payment): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateSetupRequestBuilder;

$createSetupRequest = CreateSetupRequestBuilder::init(
    222,
    'description6',
    null
)->build();
```

