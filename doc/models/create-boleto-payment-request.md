
# Create Boleto Payment Request

Contains the settings for creating a boleto payment

## Structure

`CreateBoletoPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `retries` | `int` | Required | Number of retries | getRetries(): int | setRetries(int retries): void |
| `bank` | `?string` | Optional | The bank code, containing three characters. The available codes are on the API specification | getBank(): ?string | setBank(?string bank): void |
| `instructions` | `string` | Required | The instructions field that will be printed on the boleto. | getInstructions(): string | setInstructions(string instructions): void |
| `dueAt` | `?DateTime` | Optional | Boleto due date | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `billingAddress` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Card's billing address | getBillingAddress(): CreateAddressRequest | setBillingAddress(CreateAddressRequest billingAddress): void |
| `billingAddressId` | `?string` | Optional | The address id for the billing address | getBillingAddressId(): ?string | setBillingAddressId(?string billingAddressId): void |
| `nossoNumero` | `?string` | Optional | Customer identification number with the bank | getNossoNumero(): ?string | setNossoNumero(?string nossoNumero): void |
| `documentNumber` | `string` | Required | Boleto identification | getDocumentNumber(): string | setDocumentNumber(string documentNumber): void |
| `statementDescriptor` | `string` | Required | Soft Descriptor | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `interest` | [`?CreateInterestRequest`](../../doc/models/create-interest-request.md) | Optional | - | getInterest(): ?CreateInterestRequest | setInterest(?CreateInterestRequest interest): void |
| `fine` | [`?CreateFineRequest`](../../doc/models/create-fine-request.md) | Optional | - | getFine(): ?CreateFineRequest | setFine(?CreateFineRequest fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example (as JSON)

```json
{
  "retries": 14,
  "bank": "bank8",
  "instructions": "instructions8",
  "due_at": "2016-03-13T12:52:32.123Z",
  "billing_address": {
    "street": "street8",
    "number": "number4",
    "zip_code": "zip_code2",
    "neighborhood": "neighborhood4",
    "city": "city2",
    "state": "state6",
    "country": "country2",
    "complement": "complement6",
    "metadata": {
      "key0": "metadata5",
      "key1": "metadata6"
    },
    "line_1": "line_18",
    "line_2": "line_26"
  },
  "billing_address_id": "billing_address_id6",
  "nosso_numero": "nosso_numero0",
  "document_number": "document_number4",
  "statement_descriptor": "statement_descriptor0",
  "interest": {
    "days": 156,
    "type": "type0",
    "amount": 230
  }
}
```

