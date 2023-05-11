
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
| `expiresAt` | `?DateTime` | Optional | - | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | - | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |
| `endToEndId` | `?string` | Optional | - | getEndToEndId(): ?string | setEndToEndId(?string endToEndId): void |
| `payer` | [`?GetPixPayerResponse`](../../doc/models/get-pix-payer-response.md) | Optional | - | getPayer(): ?GetPixPayerResponse | setPayer(?GetPixPayerResponse payer): void |

## Example (as JSON)

```json
{
  "gateway_id": "gateway_id6",
  "amount": 190,
  "status": "status4",
  "success": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "transaction_type": "pix",
  "qr_code": "qr_code6",
  "qr_code_url": "qr_code_url2",
  "expires_at": "2016-03-13T12:52:32.123Z",
  "additional_information": [
    {
      "Name": "Name5",
      "Value": "Value7"
    },
    {
      "Name": "Name6",
      "Value": "Value6"
    }
  ],
  "end_to_end_id": "end_to_end_id0"
}
```

