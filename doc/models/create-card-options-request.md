
# Create Card Options Request

Options for creating the card

## Structure

`CreateCardOptionsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `verifyCard` | `bool` | Required | Indicates if the card should be verified before creation. If true, executes an authorization before saving the card. | getVerifyCard(): bool | setVerifyCard(bool verifyCard): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCardOptionsRequestBuilder;

$createCardOptionsRequest = CreateCardOptionsRequestBuilder::init(
    false
)->build();
```

