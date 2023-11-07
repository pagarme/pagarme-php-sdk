
# Get Boleto Transaction Response

Response object for getting a boleto transaction

## Structure

`GetBoletoTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `barcode` | `?string` | Optional | - | getBarcode(): ?string | setBarcode(?string barcode): void |
| `nossoNumero` | `?string` | Optional | - | getNossoNumero(): ?string | setNossoNumero(?string nossoNumero): void |
| `bank` | `?string` | Optional | - | getBank(): ?string | setBank(?string bank): void |
| `documentNumber` | `?string` | Optional | - | getDocumentNumber(): ?string | setDocumentNumber(?string documentNumber): void |
| `instructions` | `?string` | Optional | - | getInstructions(): ?string | setInstructions(?string instructions): void |
| `billingAddress` | [`?GetBillingAddressResponse`](../../doc/models/get-billing-address-response.md) | Optional | - | getBillingAddress(): ?GetBillingAddressResponse | setBillingAddress(?GetBillingAddressResponse billingAddress): void |
| `dueAt` | `?DateTime` | Optional | - | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `qrCode` | `?string` | Optional | - | getQrCode(): ?string | setQrCode(?string qrCode): void |
| `line` | `?string` | Optional | - | getLine(): ?string | setLine(?string line): void |
| `pdfPassword` | `?string` | Optional | - | getPdfPassword(): ?string | setPdfPassword(?string pdfPassword): void |
| `pdf` | `?string` | Optional | - | getPdf(): ?string | setPdf(?string pdf): void |
| `paidAt` | `?DateTime` | Optional | - | getPaidAt(): ?\DateTime | setPaidAt(?\DateTime paidAt): void |
| `paidAmount` | `?string` | Optional | - | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `creditAt` | `?DateTime` | Optional | - | getCreditAt(): ?\DateTime | setCreditAt(?\DateTime creditAt): void |
| `statementDescriptor` | `?string` | Optional | Soft Descriptor | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |

## Example (as JSON)

```json
{
  "gateway_id": "gateway_id8",
  "amount": 40,
  "status": "status6",
  "success": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "url": "url0",
  "barcode": "barcode4",
  "nosso_numero": "nosso_numero6",
  "bank": "bank4",
  "document_number": "document_number0"
}
```

