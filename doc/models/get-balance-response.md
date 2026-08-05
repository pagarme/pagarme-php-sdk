
# Get Balance Response

Balance

## Structure

`GetBalanceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `?string` | Optional | Currency (official ISO 4217 currency names) | getCurrency(): ?string | setCurrency(?string currency): void |
| `availableAmount` | `?int` | Optional | Amount available for transferring in cents | getAvailableAmount(): ?int | setAvailableAmount(?int availableAmount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `transferredAmount` | `?int` | Optional | Amount transfered in cents | getTransferredAmount(): ?int | setTransferredAmount(?int transferredAmount): void |
| `waitingFundsAmount` | `?int` | Optional | Amount waiting in cents | getWaitingFundsAmount(): ?int | setWaitingFundsAmount(?int waitingFundsAmount): void |
| `paymentProfileId` | `?string` | Required | Operational id of merchant in payments operations (new) | getPaymentProfileId(): ?string | setPaymentProfileId(?string paymentProfileId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetBalanceResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetRecipientResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getBalanceResponse = GetBalanceResponseBuilder::init()
    ->currency('BRL')
    ->availableAmount(4996)
    ->recipient(
        GetRecipientResponseBuilder::init()
            ->id('re_abcdefghoj20klmn09k')
            ->name('Lojista Recebedor LTDA')
            ->email('email@stone.com.br')
            ->document('01032644222100')
            ->description(null)
            ->type(null)
            ->status('active')
            ->createdAt(DateTimeHelper::fromRfc3339DateTime('2026-06-22T19:13:52Z'))
            ->updatedAt(null)
            ->deletedAt(null)
            ->code(null)
            ->paymentMode(null)
            ->build()
    )
    ->transferredAmount(null)
    ->waitingFundsAmount(0)
    ->paymentProfileId('pp_abcdefghoj20klmn09k')
    ->build();
```

