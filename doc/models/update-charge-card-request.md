
# Update Charge Card Request

Request for updating card data

## Structure

`UpdateChargeCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `updateSubscription` | `bool` | Required | Indicates if the subscriptions using this card must also be updated | getUpdateSubscription(): bool | setUpdateSubscription(bool updateSubscription): void |
| `cardId` | `string` | Required | Card id | getCardId(): string | setCardId(string cardId): void |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Card data | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `recurrence` | `bool` | Required | Indicates a recurrence | getRecurrence(): bool | setRecurrence(bool recurrence): void |
| `initiatedType` | `?string` | Optional | - | getInitiatedType(): ?string | setInitiatedType(?string initiatedType): void |
| `recurrenceModel` | `?string` | Optional | - | getRecurrenceModel(): ?string | setRecurrenceModel(?string recurrenceModel): void |
| `paymentOrigin` | [`?CreatePaymentOriginRequest`](../../doc/models/create-payment-origin-request.md) | Optional | - | getPaymentOrigin(): ?CreatePaymentOriginRequest | setPaymentOrigin(?CreatePaymentOriginRequest paymentOrigin): void |
| `indirectAcceptor` | `?string` | Optional | Business model identifier | getIndirectAcceptor(): ?string | setIndirectAcceptor(?string indirectAcceptor): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateChargeCardRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateCardRequestBuilder;

$updateChargeCardRequest = UpdateChargeCardRequestBuilder::init(
    false,
    '',
    CreateCardRequestBuilder::init()
        ->number('number6')
        ->holderName('holder_name2')
        ->expMonth(228)
        ->expYear(68)
        ->cvv('cvv4')
        ->type('credit')
        ->build(),
    false
)
    ->initiatedType('initiated_type4')
    ->recurrenceModel('recurrence_model2')
    ->paymentOrigin(
        null
    )
    ->indirectAcceptor('indirect_acceptor8')
    ->build();
```

