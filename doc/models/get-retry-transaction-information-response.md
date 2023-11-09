
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

## Example (as JSON)

```json
{
  "brand_failure_return_code": "brand_failure_return_code2",
  "transaction_limit": 44,
  "transaction_date_limit": "2016-03-13T12:52:32.123Z"
}
```

