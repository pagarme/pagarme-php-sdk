
# Get Setup Response

Response object for getting the setup from a subscription

## Structure

`GetSetupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetSetupResponseBuilder;

$getSetupResponse = GetSetupResponseBuilder::init()
    ->id('id6')
    ->description('description6')
    ->amount(108)
    ->status('status8')
    ->build();
```

