
# Create Checkout Bank Transfer Request

Checkout bank transfer payment request

## Structure

`CreateCheckoutBankTransferRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bank` | `string[]` | Required | Bank | getBank(): array | setBank(array bank): void |
| `retries` | `int` | Required | Number of retries for processing | getRetries(): int | setRetries(int retries): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutBankTransferRequestBuilder;

$createCheckoutBankTransferRequest = CreateCheckoutBankTransferRequestBuilder::init(
    [
        'bank1',
        'bank2',
        'bank3'
    ],
    56
)->build();
```

