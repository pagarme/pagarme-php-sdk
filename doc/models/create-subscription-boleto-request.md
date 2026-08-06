
# Create Subscription Boleto Request

Information about fines and interest on the "boleto" used from payment

## Structure

`CreateSubscriptionBoletoRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `interest` | [`?CreateInterestRequest`](../../doc/models/create-interest-request.md) | Optional | - | getInterest(): ?CreateInterestRequest | setInterest(?CreateInterestRequest interest): void |
| `fine` | [`?CreateFineRequest`](../../doc/models/create-fine-request.md) | Optional | - | getFine(): ?CreateFineRequest | setFine(?CreateFineRequest fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateSubscriptionBoletoRequestBuilder;

$createSubscriptionBoletoRequest = CreateSubscriptionBoletoRequestBuilder::init()
    ->interest(
        null
    )
    ->fine(
        null
    )
    ->maxDaysToPayPastDue(250)
    ->build();
```

