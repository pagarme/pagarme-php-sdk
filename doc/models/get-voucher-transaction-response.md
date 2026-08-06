
# Get Voucher Transaction Response

Response for voucher transactions

## Structure

`GetVoucherTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Text that will appear on the voucher's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `acquirerName` | `?string` | Optional | Acquirer name | getAcquirerName(): ?string | setAcquirerName(?string acquirerName): void |
| `acquirerAffiliationCode` | `?string` | Optional | Acquirer affiliation code | getAcquirerAffiliationCode(): ?string | setAcquirerAffiliationCode(?string acquirerAffiliationCode): void |
| `acquirerTid` | `?string` | Optional | Acquirer TID | getAcquirerTid(): ?string | setAcquirerTid(?string acquirerTid): void |
| `acquirerNsu` | `?string` | Optional | Acquirer NSU | getAcquirerNsu(): ?string | setAcquirerNsu(?string acquirerNsu): void |
| `acquirerAuthCode` | `?string` | Optional | Acquirer authorization code | getAcquirerAuthCode(): ?string | setAcquirerAuthCode(?string acquirerAuthCode): void |
| `acquirerMessage` | `?string` | Optional | acquirer_message | getAcquirerMessage(): ?string | setAcquirerMessage(?string acquirerMessage): void |
| `acquirerReturnCode` | `?string` | Optional | Acquirer return code | getAcquirerReturnCode(): ?string | setAcquirerReturnCode(?string acquirerReturnCode): void |
| `operationType` | `?string` | Optional | Operation type | getOperationType(): ?string | setOperationType(?string operationType): void |
| `card` | [`?GetCardResponse`](../../doc/models/get-card-response.md) | Optional | Card data | getCard(): ?GetCardResponse | setCard(?GetCardResponse card): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetVoucherTransactionResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getVoucherTransactionResponse = GetVoucherTransactionResponseBuilder::init()
    ->gatewayId('gateway_id8')
    ->amount(40)
    ->status('status6')
    ->success(false)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->statementDescriptor('statement_descriptor4')
    ->acquirerName('acquirer_name8')
    ->acquirerAffiliationCode('acquirer_affiliation_code4')
    ->acquirerTid('acquirer_tid6')
    ->acquirerNsu('acquirer_nsu6')
    ->build();
```

