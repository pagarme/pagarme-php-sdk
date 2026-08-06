
# Update Plan Request

Request for updating a plan

## Structure

`UpdatePlanRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Plan's name | getName(): string | setName(string name): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `installments` | `int[]` | Required | Number os installments | getInstallments(): array | setInstallments(array installments): void |
| `statementDescriptor` | `string` | Required | Text that will be shown on the credit card's statement | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `currency` | `string` | Required | Currency | getCurrency(): string | setCurrency(string currency): void |
| `interval` | `string` | Required | Interval | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | Interval count | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `paymentMethods` | `string[]` | Required | Payment methods accepted by the plan | getPaymentMethods(): array | setPaymentMethods(array paymentMethods): void |
| `billingType` | `string` | Required | Billing type | getBillingType(): string | setBillingType(string billingType): void |
| `status` | `string` | Required | Plan status | getStatus(): string | setStatus(string status): void |
| `shippable` | `bool` | Required | Indicates if the plan is shippable | getShippable(): bool | setShippable(bool shippable): void |
| `billingDays` | `int[]` | Required | Billing days accepted by the plan | getBillingDays(): array | setBillingDays(array billingDays): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `minimumPrice` | `?int` | Optional | Minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `trialPeriodDays` | `?int` | Optional | Number of trial period in days, where the customer will not be charged | getTrialPeriodDays(): ?int | setTrialPeriodDays(?int trialPeriodDays): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdatePlanRequestBuilder;

$updatePlanRequest = UpdatePlanRequestBuilder::init(
    'name8',
    'description8',
    [
        139,
        140,
        141
    ],
    'statement_descriptor8',
    'currency8',
    'interval6',
    102,
    [
        'payment_methods3',
        'payment_methods2'
    ],
    'billing_type8',
    'status0',
    false,
    [
        103,
        104
    ],
    [
        'key0' => 'metadata5',
        'key1' => 'metadata6',
        'key2' => 'metadata7'
    ]
)
    ->minimumPrice(156)
    ->trialPeriodDays(74)
    ->build();
```

