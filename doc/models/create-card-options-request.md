
# Create Card Options Request

Options for creating the card

## Structure

`CreateCardOptionsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `verifyCard` | `bool` | Required | Indicates if the card should be verified before creation. If true, executes an authorization before saving the card. | getVerifyCard(): bool | setVerifyCard(bool verifyCard): void |

## Example (as JSON)

```json
{
  "verify_card": false
}
```

