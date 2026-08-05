
# Create Plan Request

Request for creating a plan

## Structure

`CreatePlanRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Plan's name | getName(): string | setName(string name): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `statementDescriptor` | `string` | Required | Text that will be printed on the credit card's statement | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `items` | [`CreatePlanItemRequest[]`](../../doc/models/create-plan-item-request.md) | Required | Plan items | getItems(): array | setItems(array items): void |
| `shippable` | `bool` | Required | Indicates if the plan is shippable | getShippable(): bool | setShippable(bool shippable): void |
| `paymentMethods` | `string[]` | Required | Allowed payment methods for the plan | getPaymentMethods(): array | setPaymentMethods(array paymentMethods): void |
| `installments` | `int[]` | Required | Number of installments | getInstallments(): array | setInstallments(array installments): void |
| `currency` | `string` | Required | Currency | getCurrency(): string | setCurrency(string currency): void |
| `interval` | `string` | Required | Interval | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | Interval counts between two charges. For instance, if the interval is 'month' and count is 2, the customer will be charged once every two months. | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `billingDays` | `int[]` | Required | Allowed billings days for the subscription, in case the plan type is 'exact_day' | getBillingDays(): array | setBillingDays(array billingDays): void |
| `billingType` | `string` | Required | Billing type | getBillingType(): string | setBillingType(string billingType): void |
| `pricingScheme` | [`CreatePricingSchemeRequest`](../../doc/models/create-pricing-scheme-request.md) | Required | Plan's pricing scheme | getPricingScheme(): CreatePricingSchemeRequest | setPricingScheme(CreatePricingSchemeRequest pricingScheme): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `minimumPrice` | `?int` | Optional | Minimum price that will be charged | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `cycles` | `?int` | Optional | Number of cycles | getCycles(): ?int | setCycles(?int cycles): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `trialPeriodDays` | `?int` | Optional | Trial period, where the customer will not be charged. | getTrialPeriodDays(): ?int | setTrialPeriodDays(?int trialPeriodDays): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePlanRequestBuilder;

$createPlanRequest = CreatePlanRequestBuilder::init(
    '',
    '',
    '',
    [
        null
    ],
    false,
    [],
    [],
    '',
    '',
    0,
    [],
    '',
    null,
    []
)
    ->minimumPrice(56)
    ->cycles(48)
    ->quantity(188)
    ->trialPeriodDays(174)
    ->build();
```

