
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
  "amount": 204,
  "metadata": {
    "key0": "metadata7",
    "key1": "metadata6"
  }
}
```

