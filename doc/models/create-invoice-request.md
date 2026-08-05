
# Create Invoice Request

Request for creating a new Invoice

## Structure

`CreateInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateInvoiceRequestBuilder;

$createInvoiceRequest = CreateInvoiceRequestBuilder::init(
    [
        'key0' => 'metadata9',
        'key1' => 'metadata8',
        'key2' => 'metadata7'
    ]
)->build();
```

