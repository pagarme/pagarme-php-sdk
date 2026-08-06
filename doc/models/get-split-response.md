
# Get Split Response

Split response

## Structure

`GetSplitResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | Type | getType(): ?string | setType(?string type): void |
| `amount` | `?int` | Optional | Amount | getAmount(): ?int | setAmount(?int amount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `gatewayId` | `?string` | Optional | The split rule gateway id | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `options` | [`?GetSplitOptionsResponse`](../../doc/models/get-split-options-response.md) | Optional | - | getOptions(): ?GetSplitOptionsResponse | setOptions(?GetSplitOptionsResponse options): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetSplitResponseBuilder;

$getSplitResponse = GetSplitResponseBuilder::init()
    ->type('type0')
    ->amount(42)
    ->recipient(
        null
    )
    ->gatewayId('gateway_id0')
    ->options(
        null
    )
    ->build();
```

