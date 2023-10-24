
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
  "success_url": "success_url0",
  "payment_url": "payment_url8",
  "accepted_payment_methods": [
    "accepted_payment_methods1",
    "accepted_payment_methods2"
  ],
  "status": "status0",
  "customer": {
    "id": "id0",
    "name": "name0",
    "email": "email6",
    "delinquent": false,
    "created_at": "2016-03-13T12:52:32.123Z"
  }
}
```

