
# Get Retry Transaction Information Response

Response object for getting an RetryTransactionInformation

## Structure

`GetRetryTransactionInformationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brandFailureReturnCode` | `?string` | Required | - | getBrandFailureReturnCode(): ?string | setBrandFailureReturnCode(?string brandFailureReturnCode): void |
| `transactionLimit` | `?int` | Required | - | getTransactionLimit(): ?int | setTransactionLimit(?int transactionLimit): void |
| `transactionDateLimit` | `?DateTime` | Required | - | getTransactionDateLimit(): ?\DateTime | setTransactionDateLimit(?\DateTime transactionDateLimit): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetRetryTransactionInformationResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getRetryTransactionInformationResponse = GetRetryTransactionInformationResponseBuilder::init()
    ->brandFailureReturnCode('brand_failure_return_code0')
    ->transactionLimit(158)
    ->transactionDateLimit(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

