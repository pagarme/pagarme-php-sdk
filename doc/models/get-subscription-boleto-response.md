
# Get Subscription Boleto Response

Response object for getting a boleto

## Structure

`GetSubscriptionBoletoResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `interest` | [`?GetInterestResponse`](../../doc/models/get-interest-response.md) | Optional | Interest | getInterest(): ?GetInterestResponse | setInterest(?GetInterestResponse interest): void |
| `fine` | [`?GetFineResponse`](../../doc/models/get-fine-response.md) | Optional | Fine | getFine(): ?GetFineResponse | setFine(?GetFineResponse fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetSubscriptionBoletoResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetInterestResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetFineResponseBuilder;

$getSubscriptionBoletoResponse = GetSubscriptionBoletoResponseBuilder::init()
    ->interest(
        GetInterestResponseBuilder::init()
            ->days(2)
            ->type('percentage')
            ->amount(20)
            ->build()
    )
    ->fine(
        GetFineResponseBuilder::init()
            ->days(2)
            ->type('flat')
            ->amount(10)
            ->build()
    )
    ->maxDaysToPayPastDue(2)
    ->build();
```

