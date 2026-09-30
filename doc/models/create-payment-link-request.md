
# Create Payment Link Request

Request for creating a payment link

## Structure

`CreatePaymentLinkRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | Payment link type (order or subscription) | getType(): string | setType(string type): void |
| `paymentSettings` | [`CreatePaymentLinkPaymentSettingsRequest`](../../doc/models/create-payment-link-payment-settings-request.md) | Required | Payment settings | getPaymentSettings(): CreatePaymentLinkPaymentSettingsRequest | setPaymentSettings(CreatePaymentLinkPaymentSettingsRequest paymentSettings): void |
| `cartSettings` | [`CreatePaymentLinkCartSettingsRequest`](../../doc/models/create-payment-link-cart-settings-request.md) | Required | Cart settings | getCartSettings(): CreatePaymentLinkCartSettingsRequest | setCartSettings(CreatePaymentLinkCartSettingsRequest cartSettings): void |
| `isBuilding` | `?bool` | Optional | Defines whether the link is still being built (not active yet) | getIsBuilding(): ?bool | setIsBuilding(?bool isBuilding): void |
| `name` | `?string` | Optional | Payment link name | getName(): ?string | setName(?string name): void |
| `expiresIn` | `?int` | Optional | Expiration time in minutes. Cannot be sent with expires_at | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `expiresAt` | `?DateTime` | Optional | Expiration date. Cannot be sent with expires_in | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `maxSessions` | `?int` | Optional | Maximum number of checkout sessions | getMaxSessions(): ?int | setMaxSessions(?int maxSessions): void |
| `maxPaidSessions` | `?int` | Optional | Maximum number of paid checkout sessions | getMaxPaidSessions(): ?int | setMaxPaidSessions(?int maxPaidSessions): void |
| `customerSettings` | [`?CreatePaymentLinkCustomerSettingsRequest`](../../doc/models/create-payment-link-customer-settings-request.md) | Optional | Customer settings | getCustomerSettings(): ?CreatePaymentLinkCustomerSettingsRequest | setCustomerSettings(?CreatePaymentLinkCustomerSettingsRequest customerSettings): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkRequestBuilder;

$createPaymentLinkRequest = CreatePaymentLinkRequestBuilder::init(
    'order',
    CreatePaymentLinkPaymentSettingsRequestBuilder::init(['credit_card'])->build(),
    CreatePaymentLinkCartSettingsRequestBuilder::init()->build()
)
    ->isBuilding(false)
    ->name('name0')
    ->expiresIn(60)
    ->maxSessions(1)
    ->maxPaidSessions(1)
    ->build();
```

