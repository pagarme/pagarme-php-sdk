
# Create Payment Link Customer Settings Request

Customer settings for creating a payment link

## Structure

`CreatePaymentLinkCustomerSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerId` | `?string` | Optional | Existing customer id. Cannot be sent with customer | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `customer` | [`?CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Optional | Customer data. Cannot be sent with customer_id | getCustomer(): ?CreateCustomerRequest | setCustomer(?CreateCustomerRequest customer): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkCustomerSettingsRequestBuilder;

$createPaymentLinkCustomerSettingsRequest = CreatePaymentLinkCustomerSettingsRequestBuilder::init()
    ->customerId('cus_id4')
    ->build();
```

