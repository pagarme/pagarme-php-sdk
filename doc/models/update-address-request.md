
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateAddressRequestBuilder;

$updateAddressRequest = UpdateAddressRequestBuilder::init(
    'number8',
    'complement0',
    [
        'key0' => 'metadata9'
    ],
    'line_22'
)->build();
```

