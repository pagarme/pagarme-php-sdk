
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
| `dueAt` | `?\DateTime` | Optional | - | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `qrCode` | `?string` | Optional | - | getQrCode(): ?string | setQrCode(?string qrCode): void |
| `line` | `?string` | Optional | - | getLine(): ?string | setLine(?string line): void |
| `pdfPassword` | `?string` | Optional | - | getPdfPassword(): ?string | setPdfPassword(?string pdfPassword): void |
| `pdf` | `?string` | Optional | - | getPdf(): ?string | setPdf(?string pdf): void |
| `paidAt` | `?\DateTime` | Optional | - | getPaidAt(): ?\DateTime | setPaidAt(?\DateTime paidAt): void |
| `paidAmount` | `?string` | Optional | - | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `creditAt` | `?\DateTime` | Optional | - | getCreditAt(): ?\DateTime | setCreditAt(?\DateTime creditAt): void |
| `statementDescriptor` | `?string` | Optional | Soft Descriptor | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |

## Example (as JSON)

```json
{
  "gateway_id": null,
  "amount": null,
  "status": null,
  "success": null,
  "created_at": null,
  "updated_at": null,
  "attempt_count": null,
  "max_attempts": null,
  "splits": null,
  "next_attempt": null,
  "transaction_type": "boleto",
  "id": null,
  "gateway_response": null,
  "antifraud_response": null,
  "metadata": null,
  "split": null,
  "interest": null,
  "fine": null,
  "max_days_to_pay_past_due": null,
  "url": null,
  "barcode": null,
  "nosso_numero": null,
  "bank": null,
  "document_number": null,
  "instructions": null,
  "billing_address": null,
  "due_at": null,
  "qr_code": null,
  "line": null,
  "pdf_password": null,
  "pdf": null,
  "paid_at": null,
  "paid_amount": null,
  "type": null,
  "credit_at": null,
  "statement_descriptor": null
}
```

