
# Update Card Request

Request for updating a card

## Structure

`UpdateCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `holderName` | `string` | Required | Holder name | getHolderName(): string | setHolderName(string holderName): void |
| `expMonth` | `int` | Required | Expiration month | getExpMonth(): int | setExpMonth(int expMonth): void |
| `expYear` | `int` | Required | Expiration year | getExpYear(): int | setExpYear(int expYear): void |
| `billingAddressId` | `?string` | Optional | Id of the address to be used as billing address | getBillingAddressId(): ?string | setBillingAddressId(?string billingAddressId): void |
| `billingAddress` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Billing address | getBillingAddress(): CreateAddressRequest | setBillingAddress(CreateAddressRequest billingAddress): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `label` | `string` | Required | - | getLabel(): string | setLabel(string label): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateCardRequestBuilder;

$updateCardRequest = UpdateCardRequestBuilder::init(
    'holder_name8',
    80,
    216,
    null,
    [
        'key0' => 'metadata9',
        'key1' => 'metadata8',
        'key2' => 'metadata7'
    ],
    'label2'
)
    ->billingAddressId('billing_address_id8')
    ->build();
```

