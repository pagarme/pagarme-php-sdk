
# List Addresses Response

Response object for listing addresses

## Structure

`ListAddressesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetAddressResponse[])`](../../doc/models/get-address-response.md) | Optional | The address objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListAddressesResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetAddressResponseBuilder;

$listAddressesResponse = ListAddressesResponseBuilder::init()
    ->data(
        [
            null,
            GetAddressResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

