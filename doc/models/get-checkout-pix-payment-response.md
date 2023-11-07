
# Get Checkout Pix Payment Response

Checkout pix payment response

## Structure

`GetCheckoutPixPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?DateTime` | Optional | Expires at | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | Additional information | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |

## Example (as JSON)

```json
{
  "expires_at": "2016-03-13T12:52:32.123Z",
  "additional_information": [
    {
      "Name": "Name0",
      "Value": "Value2"
    },
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

