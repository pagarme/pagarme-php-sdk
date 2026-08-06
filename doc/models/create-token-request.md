
# Create Token Request

Token data

## Structure

`CreateTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | Token type<br><br>**Default**: `'card'` | getType(): string | setType(string type): void |
| `card` | [`CreateCardTokenRequest`](../../doc/models/create-card-token-request.md) | Required | Card data | getCard(): CreateCardTokenRequest | setCard(CreateCardTokenRequest card): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateTokenRequestBuilder;

$createTokenRequest = CreateTokenRequestBuilder::init(
    'card',
    null
)->build();
```

