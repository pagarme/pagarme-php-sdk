
# Create Access Token Request

Request for creating a new Access Token

## Structure

`CreateAccessTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresIn` | `?int` | Optional | Minutes to expire the token | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateAccessTokenRequestBuilder;

$createAccessTokenRequest = CreateAccessTokenRequestBuilder::init()
    ->expiresIn(204)
    ->build();
```

