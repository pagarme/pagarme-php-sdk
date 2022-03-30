
# Update Address Request

Request for updating an address

## Structure

`UpdateAddressRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `string` | Required | Number | getNumber(): string | setNumber(string number): void |
| `complement` | `string` | Required | Complement | getComplement(): string | setComplement(string complement): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `line2` | `string` | Required | Line 2 for address | getLine2(): string | setLine2(string line2): void |

## Example (as JSON)

```json
{
  "number": "number2",
  "complement": "complement4",
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "line_2": "line_28"
}
```

