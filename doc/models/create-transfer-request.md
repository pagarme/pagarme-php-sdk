
# Create Transfer Request

Request for creating a transfer

## Structure

`CreateTransferRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Transfer amount | getAmount(): int | setAmount(int amount): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |

## Example (as JSON)

```json
{
  "amount": 148,
  "metadata": {
    "key0": "metadata7",
    "key1": "metadata8",
    "key2": "metadata9"
  }
}
```

