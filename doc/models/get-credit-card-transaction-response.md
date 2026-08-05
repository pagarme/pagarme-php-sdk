
# Get Credit Card Transaction Response

Response object for getting a credit card transaction

## Structure

`GetCreditCardTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Text that will appear on the credit card's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `acquirerName` | `?string` | Optional | Acquirer name | getAcquirerName(): ?string | setAcquirerName(?string acquirerName): void |
| `acquirerAffiliationCode` | `?string` | Optional | Aquirer affiliation code | getAcquirerAffiliationCode(): ?string | setAcquirerAffiliationCode(?string acquirerAffiliationCode): void |
| `acquirerTid` | `?string` | Optional | Acquirer TID | getAcquirerTid(): ?string | setAcquirerTid(?string acquirerTid): void |
| `acquirerNsu` | `?string` | Optional | Acquirer NSU | getAcquirerNsu(): ?string | setAcquirerNsu(?string acquirerNsu): void |
| `acquirerAuthCode` | `?string` | Optional | Acquirer authorization code | getAcquirerAuthCode(): ?string | setAcquirerAuthCode(?string acquirerAuthCode): void |
| `operationType` | `?string` | Optional | Operation type | getOperationType(): ?string | setOperationType(?string operationType): void |
| `card` | [`?GetCardResponse`](../../doc/models/get-card-response.md) | Optional | Card data | getCard(): ?GetCardResponse | setCard(?GetCardResponse card): void |
| `acquirerMessage` | `?string` | Optional | Acquirer message | getAcquirerMessage(): ?string | setAcquirerMessage(?string acquirerMessage): void |
| `acquirerReturnCode` | `?string` | Optional | Acquirer Return Code | getAcquirerReturnCode(): ?string | setAcquirerReturnCode(?string acquirerReturnCode): void |
| `installments` | `?int` | Optional | Number of installments | getInstallments(): ?int | setInstallments(?int installments): void |
| `threedAuthenticationUrl` | `?string` | Optional | 3D-S authentication Url | getThreedAuthenticationUrl(): ?string | setThreedAuthenticationUrl(?string threedAuthenticationUrl): void |
| `fundingSource` | `?string` | Optional | Identify when a card is prepaid, credit or debit. | getFundingSource(): ?string | setFundingSource(?string fundingSource): void |
| `retryInfo` | [`?GetRetryTransactionInformationResponse`](../../doc/models/get-retry-transaction-information-response.md) | Optional | Retry transaction information | getRetryInfo(): ?GetRetryTransactionInformationResponse | setRetryInfo(?GetRetryTransactionInformationResponse retryInfo): void |
| `brandId` | `?string` | Optional | - | getBrandId(): ?string | setBrandId(?string brandId): void |
| `indirectAcceptor` | `?string` | Optional | Business model identifier | getIndirectAcceptor(): ?string | setIndirectAcceptor(?string indirectAcceptor): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCreditCardTransactionResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getCreditCardTransactionResponse = GetCreditCardTransactionResponseBuilder::init()
    ->gatewayId('gateway_id8')
    ->amount(40)
    ->status('status6')
    ->success(false)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->statementDescriptor('statement_descriptor6')
    ->acquirerName('acquirer_name0')
    ->acquirerAffiliationCode('acquirer_affiliation_code2')
    ->acquirerTid('acquirer_tid4')
    ->acquirerNsu('acquirer_nsu4')
    ->build();
```

