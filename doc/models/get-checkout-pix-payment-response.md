
# Get Checkout Pix Payment Response

Checkout pix payment response

## Structure

`GetCheckoutPixPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `\DateTime` | Required | Expires at | getExpiresAt(): \DateTime | setExpiresAt(\DateTime expiresAt): void |
| `additionalInformation` | [`PixAdditionalInformation[]`](../../doc/models/pix-additional-information.md) | Required | Additional information | getAdditionalInformation(): array | setAdditionalInformation(array additionalInformation): void |

## Example (as JSON)

```json
{
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
  ]
}
```

