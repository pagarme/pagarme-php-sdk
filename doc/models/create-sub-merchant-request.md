
# Create Sub Merchant Request

SubMerchant

## Structure

`CreateSubMerchantRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentFacilitatorCode` | `string` | Required | Payment Facilitator Code | getPaymentFacilitatorCode(): string | setPaymentFacilitatorCode(string paymentFacilitatorCode): void |
| `code` | `string` | Required | Code | getCode(): string | setCode(string code): void |
| `name` | `string` | Required | Name | getName(): string | setName(string name): void |
| `merchantCategoryCode` | `string` | Required | Merchant Category Code | getMerchantCategoryCode(): string | setMerchantCategoryCode(string merchantCategoryCode): void |
| `document` | `string` | Required | Document number. Only numbers, no special characters. | getDocument(): string | setDocument(string document): void |
| `type` | `string` | Required | Document type. Can be either 'individual' or 'company' | getType(): string | setType(string type): void |
| `phone` | [`CreatePhoneRequest`](../../doc/models/create-phone-request.md) | Required | Phone | getPhone(): CreatePhoneRequest | setPhone(CreatePhoneRequest phone): void |
| `address` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Address | getAddress(): CreateAddressRequest | setAddress(CreateAddressRequest address): void |
| `legalName` | `string` | Required | Legal name | getLegalName(): string | setLegalName(string legalName): void |
| `siteUrl` | `string` | Required | Site Url | getSiteUrl(): string | setSiteUrl(string siteUrl): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateSubMerchantRequestBuilder;

$createSubMerchantRequest = CreateSubMerchantRequestBuilder::init(
    'payment_facilitator_code2',
    'code2',
    'name4',
    'merchant_category_code4',
    'document2',
    'type6',
    null,
    null,
    'legal_name2',
    'site_url6'
)->build();
```

