
# Get Checkout Payment Settings Response

Checkout Payment Settings Response

## Structure

`GetCheckoutPaymentSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `successUrl` | `?string` | Optional | Success Url | getSuccessUrl(): ?string | setSuccessUrl(?string successUrl): void |
| `paymentUrl` | `?string` | Optional | Payment Url | getPaymentUrl(): ?string | setPaymentUrl(?string paymentUrl): void |
| `acceptedPaymentMethods` | `?(string[])` | Optional | Accepted Payment Methods | getAcceptedPaymentMethods(): ?array | setAcceptedPaymentMethods(?array acceptedPaymentMethods): void |
| `status` | `?string` | Optional | Status | getStatus(): ?string | setStatus(?string status): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | Customer | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `amount` | `?int` | Optional | Payment amount | getAmount(): ?int | setAmount(?int amount): void |
| `defaultPaymentMethod` | `?string` | Optional | Default Payment Method | getDefaultPaymentMethod(): ?string | setDefaultPaymentMethod(?string defaultPaymentMethod): void |
| `gatewayAffiliationId` | `?string` | Optional | Gateway Affiliation Id | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |

## Example (as JSON)

```json
{
  "success_url": null,
  "payment_url": null,
  "accepted_payment_methods": null,
  "status": null,
  "customer": null,
  "amount": null,
  "default_payment_method": null,
  "gateway_affiliation_id": null
}
```

