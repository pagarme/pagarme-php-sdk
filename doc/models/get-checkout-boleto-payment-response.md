
# Get Checkout Boleto Payment Response

## Structure

`GetCheckoutBoletoPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dueAt` | `?DateTime` | Optional | Data de vencimento do boleto | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `instructions` | `?string` | Optional | Instruções do boleto | getInstructions(): ?string | setInstructions(?string instructions): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCheckoutBoletoPaymentResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getCheckoutBoletoPaymentResponse = GetCheckoutBoletoPaymentResponseBuilder::init()
    ->dueAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->instructions('instructions6')
    ->build();
```

