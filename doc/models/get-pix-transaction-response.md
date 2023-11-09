
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
| `pixProviderTid` | `?string` | Optional | Pix provider TID | getPixProviderTid(): ?string | setPixProviderTid(?string pixProviderTid): void |

## Example (as JSON)

```json
{
  "gateway_id": "gateway_id8",
  "amount": 40,
  "status": "status6",
  "success": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "qr_code": "qr_code0",
  "qr_code_url": "qr_code_url6",
  "expires_at": "2016-03-13T12:52:32.123Z",
  "additional_information": [
    {
      "Name": "Name0",
      "Value": "Value2"
    },
    {
      "Name": "Name0",
      "Value": "Value2"
    }
  ],
  "end_to_end_id": "end_to_end_id6"
}
```

