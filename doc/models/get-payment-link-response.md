
# Get Payment Link Response

Response object for getting a payment link

## Structure

`GetPaymentLinkResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `orderCode` | `?string` | Optional | - | getOrderCode(): ?string | setOrderCode(?string orderCode): void |
| `url` | `?string` | Optional | Checkout url | getUrl(): ?string | setUrl(?string url): void |
| `paymentLinkType` | `?string` | Optional | - | getPaymentLinkType(): ?string | setPaymentLinkType(?string paymentLinkType): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `maxSessions` | `?int` | Optional | - | getMaxSessions(): ?int | setMaxSessions(?int maxSessions): void |
| `totalSessions` | `?int` | Optional | - | getTotalSessions(): ?int | setTotalSessions(?int totalSessions): void |
| `maxPaidSessions` | `?int` | Optional | - | getMaxPaidSessions(): ?int | setMaxPaidSessions(?int maxPaidSessions): void |
| `totalPaidSessions` | `?int` | Optional | - | getTotalPaidSessions(): ?int | setTotalPaidSessions(?int totalPaidSessions): void |
| `expiresIn` | `?int` | Optional | - | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `expirationDate` | `?DateTime` | Optional | - | getExpirationDate(): ?\DateTime | setExpirationDate(?\DateTime expirationDate): void |
| `paymentSettings` | [`?GetPaymentLinkPaymentSettingsResponse`](../../doc/models/get-payment-link-payment-settings-response.md) | Optional | - | getPaymentSettings(): ?GetPaymentLinkPaymentSettingsResponse | setPaymentSettings(?GetPaymentLinkPaymentSettingsResponse paymentSettings): void |
| `customerSettings` | [`?GetPaymentLinkCustomerSettingsResponse`](../../doc/models/get-payment-link-customer-settings-response.md) | Optional | - | getCustomerSettings(): ?GetPaymentLinkCustomerSettingsResponse | setCustomerSettings(?GetPaymentLinkCustomerSettingsResponse customerSettings): void |
| `cartSettings` | [`?GetPaymentLinkCartSettingsResponse`](../../doc/models/get-payment-link-cart-settings-response.md) | Optional | - | getCartSettings(): ?GetPaymentLinkCartSettingsResponse | setCartSettings(?GetPaymentLinkCartSettingsResponse cartSettings): void |
| `checkoutSettings` | [`?GetPaymentLinkCheckoutSettingsResponse`](../../doc/models/get-payment-link-checkout-settings-response.md) | Optional | - | getCheckoutSettings(): ?GetPaymentLinkCheckoutSettingsResponse | setCheckoutSettings(?GetPaymentLinkCheckoutSettingsResponse checkoutSettings): void |
| `accountSettings` | [`?GetPaymentLinkAccountSettingsResponse`](../../doc/models/get-payment-link-account-settings-response.md) | Optional | - | getAccountSettings(): ?GetPaymentLinkAccountSettingsResponse | setAccountSettings(?GetPaymentLinkAccountSettingsResponse accountSettings): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkResponseBuilder;

$getPaymentLinkResponse = GetPaymentLinkResponseBuilder::init()
    ->id('pl_id4')
    ->name('name0')
    ->orderCode('order_code2')
    ->url('https://payment-link.pagar.me/pl_id4')
    ->paymentLinkType('order')
    ->build();
```

