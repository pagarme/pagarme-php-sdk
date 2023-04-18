
# Create Withdraw Request

## Structure

`CreateWithdrawRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  }
}
```

