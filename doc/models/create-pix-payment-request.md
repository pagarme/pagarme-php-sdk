
# Create Pix Payment Request

Contains information to create a pix payment

## Structure

`CreatePixPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?DateTime` | Optional | Datetime when pix payment will expire | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `expiresIn` | `?int` | Optional | Seconds until pix payment expires | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | Pix additional information | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |

## Example (as JSON)

```json
{
  "expires_at": "2016-03-13T12:52:32.123Z",
  "expires_in": 216,
  "additional_information": [
    {
      "Name": "Name0",
      "Value": "Value2"
    },
    {
      "Name": "Name0",
      "Value": "Value2"
    }
  ]
}
```

