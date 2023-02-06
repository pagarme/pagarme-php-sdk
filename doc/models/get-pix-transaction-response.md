
# Get Pix Transaction Response

Response object when getting a pix transaction

## Structure

`GetPixTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `qrCode` | `?string` | Optional | - | getQrCode(): ?string | setQrCode(?string qrCode): void |
| `qrCodeUrl` | `?string` | Optional | - | getQrCodeUrl(): ?string | setQrCodeUrl(?string qrCodeUrl): void |
| `expiresAt` | `?\DateTime` | Optional | - | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | - | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |
| `endToEndId` | `?string` | Optional | - | getEndToEndId(): ?string | setEndToEndId(?string endToEndId): void |
| `payer` | [`?GetPixPayerResponse`](../../doc/models/get-pix-payer-response.md) | Optional | - | getPayer(): ?GetPixPayerResponse | setPayer(?GetPixPayerResponse payer): void |

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
  "transaction_type": "pix",
  "id": null,
  "gateway_response": null,
  "antifraud_response": null,
  "metadata": null,
  "split": null,
  "interest": null,
  "fine": null,
  "max_days_to_pay_past_due": null,
  "qr_code": null,
  "qr_code_url": null,
  "expires_at": null,
  "additional_information": null,
  "end_to_end_id": null,
  "payer": null
}
```

