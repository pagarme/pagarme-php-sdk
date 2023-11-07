
# Paging Response

Object used for returning lists of objects with pagination

## Structure

`PagingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `total` | `?int` | Optional | Total number of pages | getTotal(): ?int | setTotal(?int total): void |
| `previous` | `?string` | Optional | Previous page | getPrevious(): ?string | setPrevious(?string previous): void |
| `next` | `?string` | Optional | Next page | getNext(): ?string | setNext(?string next): void |

## Example (as JSON)

```json
{
  "total": 80,
  "previous": "previous2",
  "next": "next2"
}
```

