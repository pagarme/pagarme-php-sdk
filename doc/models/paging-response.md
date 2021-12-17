
# Paging Response

Object used for returning lists of objects with pagination

## Structure

`PagingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `total` | `int` | Required | Total number of pages | getTotal(): int | setTotal(int total): void |
| `previous` | `string` | Required | Previous page | getPrevious(): string | setPrevious(string previous): void |
| `next` | `string` | Required | Next page | getNext(): string | setNext(string next): void |

## Example (as JSON)

```json
{
  "total": 10,
  "previous": "previous8",
  "next": "next2"
}
```

