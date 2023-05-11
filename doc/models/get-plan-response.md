
# Get Plan Response

Response object for getting a plan

## Structure

`GetPlanResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `statementDescriptor` | `?string` | Optional | - | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `interval` | `?string` | Optional | - | getInterval(): ?string | setInterval(?string interval): void |
| `intervalCount` | `?int` | Optional | - | getIntervalCount(): ?int | setIntervalCount(?int intervalCount): void |
| `billingType` | `?string` | Optional | - | getBillingType(): ?string | setBillingType(?string billingType): void |
| `paymentMethods` | `?(string[])` | Optional | - | getPaymentMethods(): ?array | setPaymentMethods(?array paymentMethods): void |
| `installments` | `?(int[])` | Optional | - | getInstallments(): ?array | setInstallments(?array installments): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `items` | [`?(GetPlanItemResponse[])`](../../doc/models/get-plan-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `billingDays` | `?(int[])` | Optional | - | getBillingDays(): ?array | setBillingDays(?array billingDays): void |
| `shippable` | `?bool` | Optional | - | getShippable(): ?bool | setShippable(?bool shippable): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `trialPeriodDays` | `?int` | Optional | - | getTrialPeriodDays(): ?int | setTrialPeriodDays(?int trialPeriodDays): void |
| `minimumPrice` | `?int` | Optional | - | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `deletedAt` | `?DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "name": "name0",
  "description": "description0",
  "url": "url4",
  "statement_descriptor": "statement_descriptor0"
}
```

