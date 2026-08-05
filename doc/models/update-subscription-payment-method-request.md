
# Update Subscription Payment Method Request

Request for updating a subscription's payment method

## Structure

`UpdateSubscriptionPaymentMethodRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentMethod` | `string` | Required | The new payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `cardId` | `string` | Required | Card id | getCardId(): string | setCardId(string cardId): void |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Card data | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `cardToken` | `?string` | Optional | The Card Token | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `boleto` | [`?CreateSubscriptionBoletoRequest`](../../doc/models/create-subscription-boleto-request.md) | Optional | Information about fines and interest on the "boleto" used from payment | getBoleto(): ?CreateSubscriptionBoletoRequest | setBoleto(?CreateSubscriptionBoletoRequest boleto): void |
| `indirectAcceptor` | `?string` | Optional | Business model identifier | getIndirectAcceptor(): ?string | setIndirectAcceptor(?string indirectAcceptor): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionPaymentMethodRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateCardRequestBuilder;

$updateSubscriptionPaymentMethodRequest = UpdateSubscriptionPaymentMethodRequestBuilder::init(
    '',
    '',
    CreateCardRequestBuilder::init()
        ->number('number6')
        ->holderName('holder_name2')
        ->expMonth(228)
        ->expYear(68)
        ->cvv('cvv4')
        ->type('credit')
        ->build()
)
    ->cardToken('card_token2')
    ->boleto(
        null
    )
    ->indirectAcceptor('indirect_acceptor4')
    ->build();
```

