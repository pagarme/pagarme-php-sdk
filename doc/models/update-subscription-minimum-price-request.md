
# Update Subscription Minimum Price Request

Atualização do valor mínimo da assinatura

## Structure

`UpdateSubscriptionMinimumPriceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `minimumPrice` | `?int` | Optional | Valor mínimo da assinatura | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionMinimumPriceRequestBuilder;

$updateSubscriptionMinimumPriceRequest = UpdateSubscriptionMinimumPriceRequestBuilder::init()
    ->minimumPrice(134)
    ->build();
```

