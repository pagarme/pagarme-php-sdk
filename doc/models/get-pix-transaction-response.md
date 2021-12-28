
# Get Pix Transaction Response

Response object when getting a pix transaction

## Structure

`GetPixTransactionResponse`

## Inherits From

[`GetTransactionResponse`](/doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `qrCode` | `string` | Required | - | getQrCode(): string | setQrCode(string qrCode): void |
| `qrCodeUrl` | `string` | Required | - | getQrCodeUrl(): string | setQrCodeUrl(string qrCodeUrl): void |
| `expiresAt` | `\DateTime` | Required | - | getExpiresAt(): \DateTime | setExpiresAt(\DateTime expiresAt): void |
| `additionalInformation` | [`PixAdditionalInformation[]`](/doc/models/pix-additional-information.md) | Required | - | getAdditionalInformation(): array | setAdditionalInformation(array additionalInformation): void |

## Example (as JSON)

```json
{
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
  "gateway_id": "gateway_id0",
  "amount": 46,
  "status": "status8",
  "success": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "attempt_count": 70,
  "max_attempts": 174,
  "splits": [
    {
      "type": "type4",
      "amount": 62,
      "recipient": null,
      "gateway_id": "gateway_id4",
      "options": null,
      "id": "id6"
    },
    {
      "type": "type3",
      "amount": 63,
      "recipient": null,
      "gateway_id": "gateway_id3",
      "options": null,
      "id": "id7"
    }
  ],
  "next_attempt": null,
  "transaction_type": null,
  "id": "id0",
  "gateway_response": {
    "code": "code6",
    "errors": [
      {
        "message": "message3"
      },
      {
        "message": "message4"
      },
      {
        "message": "message5"
      }
    ]
  },
  "antifraud_response": {
    "status": "status0",
    "return_code": "return_code8",
    "return_message": "return_message4",
    "provider_name": "provider_name4",
    "score": "score8"
  },
  "metadata": null,
  "split": [
    {
      "type": "type6",
      "amount": 28,
      "recipient": null,
      "gateway_id": "gateway_id6",
      "options": null,
      "id": "id4"
    },
    {
      "type": "type5",
      "amount": 27,
      "recipient": null,
      "gateway_id": "gateway_id5",
      "options": null,
      "id": "id5"
    },
    {
      "type": "type4",
      "amount": 26,
      "recipient": null,
      "gateway_id": "gateway_id4",
      "options": null,
      "id": "id6"
    }
  ]
}
```

