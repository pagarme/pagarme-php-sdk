
# Create Checkout Pix Payment Request

Checkout pix payment request

## Structure

`CreateCheckoutPixPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?\DateTime` | Optional | Expires at | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `expiresIn` | `?int` | Optional | Expires in | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | Additional information | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |

## Example (as JSON)

```json
{
  "expires_at": null,
  "expires_in": null,
  "additional_information": null
}
```

