
# Get Payment Link Customer Settings Response

Customer settings of a payment link

## Structure

`GetPaymentLinkCustomerSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerId` | `?string` | Optional | - | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `editable` | `?bool` | Optional | - | getEditable(): ?bool | setEditable(?bool editable): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkCustomerSettingsResponseBuilder;

$getPaymentLinkCustomerSettingsResponse = GetPaymentLinkCustomerSettingsResponseBuilder::init()
    ->customerId('cus_id4')
    ->editable(false)
    ->build();
```

