
# Create Anticipation Request

Request for creating an anticipation

## Structure

`CreateAnticipationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Amount requested for the anticipation | getAmount(): int | setAmount(int amount): void |
| `timeframe` | `string` | Required | Timeframe | getTimeframe(): string | setTimeframe(string timeframe): void |
| `paymentDate` | `DateTime` | Required | Payment date | getPaymentDate(): \DateTime | setPaymentDate(\DateTime paymentDate): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateAnticipationRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$createAnticipationRequest = CreateAnticipationRequestBuilder::init(
    84,
    'timeframe2',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

