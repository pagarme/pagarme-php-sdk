
# Create Pix Payment Request

Contains information to create a pix payment

## Structure

`CreatePixPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?\DateTime` | Optional | Datetime when pix payment will expire | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `expiresIn` | `?int` | Optional | Seconds until pix payment expires | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | Pix additional information | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |

## Example (as JSON)

```json
{
  "expires_at": null,
  "expires_in": null,
  "additional_information": null
}
```

