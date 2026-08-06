
# Create Checkout Boleto Payment Request

## Structure

`CreateCheckoutBoletoPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bank` | `string` | Required | Bank identifier | getBank(): string | setBank(string bank): void |
| `instructions` | `string` | Required | Instructions | getInstructions(): string | setInstructions(string instructions): void |
| `dueAt` | `DateTime` | Required | Due date | getDueAt(): \DateTime | setDueAt(\DateTime dueAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutBoletoPaymentRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$createCheckoutBoletoPaymentRequest = CreateCheckoutBoletoPaymentRequestBuilder::init(
    'bank6',
    'instructions6',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

