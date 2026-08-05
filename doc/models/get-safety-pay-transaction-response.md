
# Get Safety Pay Transaction Response

Response object for getting a safety pay transaction

## Structure

`GetSafetyPayTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | Payment url | getUrl(): ?string | setUrl(?string url): void |
| `bankTid` | `?string` | Optional | Transaction identifier on bank | getBankTid(): ?string | setBankTid(?string bankTid): void |
| `paidAt` | `?DateTime` | Optional | Payment date | getPaidAt(): ?\DateTime | setPaidAt(?\DateTime paidAt): void |
| `paidAmount` | `?int` | Optional | Paid amount | getPaidAmount(): ?int | setPaidAmount(?int paidAmount): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetSafetyPayTransactionResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getSafetyPayTransactionResponse = GetSafetyPayTransactionResponseBuilder::init()
    ->gatewayId('gateway_id8')
    ->amount(40)
    ->status('status6')
    ->success(false)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->url('url0')
    ->bankTid('bank_tid0')
    ->paidAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->paidAmount(4)
    ->build();
```

