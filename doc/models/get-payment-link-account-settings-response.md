
# Get Payment Link Account Settings Response

Account settings of a payment link

## Structure

`GetPaymentLinkAccountSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantId` | `?string` | Optional | - | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `merchantName` | `?string` | Optional | - | getMerchantName(): ?string | setMerchantName(?string merchantName): void |
| `accountId` | `?string` | Optional | - | getAccountId(): ?string | setAccountId(?string accountId): void |
| `accountName` | `?string` | Optional | - | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountType` | `?string` | Optional | - | getAccountType(): ?string | setAccountType(?string accountType): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `organization` | `?string` | Optional | - | getOrganization(): ?string | setOrganization(?string organization): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkAccountSettingsResponseBuilder;

$getPaymentLinkAccountSettingsResponse = GetPaymentLinkAccountSettingsResponseBuilder::init()
    ->merchantId('merchant_id0')
    ->merchantName('merchant_name0')
    ->accountId('acc_id4')
    ->accountName('account_name0')
    ->accountType('account_type0')
    ->build();
```

