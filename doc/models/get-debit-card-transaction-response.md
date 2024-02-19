
# Get Debit Card Transaction Response

Response object for getting a debit card transaction

## Structure

`GetDebitCardTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Text that will appear on the debit card's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `acquirerName` | `?string` | Optional | Acquirer name | getAcquirerName(): ?string | setAcquirerName(?string acquirerName): void |
| `acquirerAffiliationCode` | `?string` | Optional | Aquirer affiliation code | getAcquirerAffiliationCode(): ?string | setAcquirerAffiliationCode(?string acquirerAffiliationCode): void |
| `acquirerTid` | `?string` | Optional | Acquirer TID | getAcquirerTid(): ?string | setAcquirerTid(?string acquirerTid): void |
| `acquirerNsu` | `?string` | Optional | Acquirer NSU | getAcquirerNsu(): ?string | setAcquirerNsu(?string acquirerNsu): void |
| `acquirerAuthCode` | `?string` | Optional | Acquirer authorization code | getAcquirerAuthCode(): ?string | setAcquirerAuthCode(?string acquirerAuthCode): void |
| `operationType` | `?string` | Optional | Operation type | getOperationType(): ?string | setOperationType(?string operationType): void |
| `card` | [`?GetCardResponse`](../../doc/models/get-card-response.md) | Optional | Card data | getCard(): ?GetCardResponse | setCard(?GetCardResponse card): void |
| `acquirerMessage` | `?string` | Optional | Acquirer message | getAcquirerMessage(): ?string | setAcquirerMessage(?string acquirerMessage): void |
| `acquirerReturnCode` | `?string` | Optional | Acquirer Return Code | getAcquirerReturnCode(): ?string | setAcquirerReturnCode(?string acquirerReturnCode): void |
| `mpi` | `?string` | Optional | Merchant Plugin | getMpi(): ?string | setMpi(?string mpi): void |
| `eci` | `?string` | Optional | Electronic Commerce Indicator (ECI) | getEci(): ?string | setEci(?string eci): void |
| `authenticationType` | `?string` | Optional | Authentication type | getAuthenticationType(): ?string | setAuthenticationType(?string authenticationType): void |
| `threedAuthenticationUrl` | `?string` | Optional | 3D-S Authentication Url | getThreedAuthenticationUrl(): ?string | setThreedAuthenticationUrl(?string threedAuthenticationUrl): void |
| `fundingSource` | `?string` | Optional | Identify when a card is prepaid, credit or debit. | getFundingSource(): ?string | setFundingSource(?string fundingSource): void |
| `retryInfo` | [`?GetRetryTransactionInformationResponse`](../../doc/models/get-retry-transaction-information-response.md) | Optional | Retry transaction information | getRetryInfo(): ?GetRetryTransactionInformationResponse | setRetryInfo(?GetRetryTransactionInformationResponse retryInfo): void |

## Example (as JSON)

```json
{
  "gateway_id": "gateway_id8",
  "amount": 40,
  "status": "status6",
  "success": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "statement_descriptor": "statement_descriptor0",
  "acquirer_name": "acquirer_name4",
  "acquirer_affiliation_code": "acquirer_affiliation_code8",
  "acquirer_tid": "acquirer_tid0",
  "acquirer_nsu": "acquirer_nsu0"
}
```

