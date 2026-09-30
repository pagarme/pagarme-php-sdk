
# List Payment Links Response

Response object for listing payment links

## Structure

`ListPaymentLinksResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `content` | [`?(GetPaymentLinkResponse[])`](../../doc/models/get-payment-link-response.md) | Optional | - | getContent(): ?array | setContent(?array content): void |
| `page` | `?int` | Optional | - | getPage(): ?int | setPage(?int page): void |
| `perPage` | `?int` | Optional | - | getPerPage(): ?int | setPerPage(?int perPage): void |
| `total` | `?int` | Optional | - | getTotal(): ?int | setTotal(?int total): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListPaymentLinksResponseBuilder;

$listPaymentLinksResponse = ListPaymentLinksResponseBuilder::init()
    ->page(1)
    ->perPage(30)
    ->total(1)
    ->build();
```

