
# Get Phone Number Response

Response object for getting an PhoneNumberResponse

## Structure

`GetPhoneNumberResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ddd` | `?string` | Optional | - | getDdd(): ?string | setDdd(?string ddd): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPhoneNumberResponseBuilder;

$getPhoneNumberResponse = GetPhoneNumberResponseBuilder::init()
    ->ddd('ddd4')
    ->number('number8')
    ->type('type0')
    ->build();
```

