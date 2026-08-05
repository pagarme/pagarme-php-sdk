
# Get Bank Transfer Transaction Response

Response object for getting a bank transfer transaction

## Structure

`GetBankTransferTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | Payment url | getUrl(): ?string | setUrl(?string url): void |
| `bankTid` | `?string` | Optional | Transaction identifier for the bank | getBankTid(): ?string | setBankTid(?string bankTid): void |
| `bank` | `?string` | Optional | Bank | getBank(): ?string | setBank(?string bank): void |
| `paidAt` | `?DateTime` | Optional | Payment date | getPaidAt(): ?\DateTime | setPaidAt(?\DateTime paidAt): void |
| `paidAmount` | `?int` | Optional | Paid amount | getPaidAmount(): ?int | setPaidAmount(?int paidAmount): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetBankTransferTransactionResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getBankTransferTransactionResponse = GetBankTransferTransactionResponseBuilder::init()
    ->gatewayId('gateway_id8')
    ->amount(40)
    ->status('status6')
    ->success(false)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->url('url6')
    ->bankTid('bank_tid6')
    ->bank('bank0')
    ->paidAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->paidAmount(62)
    ->build();
```

