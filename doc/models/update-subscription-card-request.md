
# Update Subscription Card Request

Request for updating the card from a subscription

## Structure

`UpdateSubscriptionCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Credit card data | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `cardId` | `string` | Required | Credit card id | getCardId(): string | setCardId(string cardId): void |
| `indirectAcceptor` | `?string` | Optional | Business model identifier | getIndirectAcceptor(): ?string | setIndirectAcceptor(?string indirectAcceptor): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionCardRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateCardRequestBuilder;

$updateSubscriptionCardRequest = UpdateSubscriptionCardRequestBuilder::init(
    CreateCardRequestBuilder::init()
        ->number('number6')
        ->holderName('holder_name2')
        ->expMonth(228)
        ->expYear(68)
        ->cvv('cvv4')
        ->type('credit')
        ->build(),
    ''
)
    ->indirectAcceptor('indirect_acceptor6')
    ->build();
```

