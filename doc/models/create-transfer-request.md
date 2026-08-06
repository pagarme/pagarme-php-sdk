
# Create Transfer Request

Request for creating a transfer

## Structure

`CreateTransferRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Transfer amount | getAmount(): int | setAmount(int amount): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateTransferRequestBuilder;

$createTransferRequest = CreateTransferRequestBuilder::init(
    192,
    [
        'key0' => 'metadata3',
        'key1' => 'metadata2'
    ]
)->build();
```

