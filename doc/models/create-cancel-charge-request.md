
# Create Cancel Charge Request

Request for canceling a charge.

## Structure

`CreateCancelChargeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | The amount that will be canceled. | getAmount(): ?int | setAmount(?int amount): void |
| `splitRules` | [`?(CreateCancelChargeSplitRulesRequest[])`](../../doc/models/create-cancel-charge-split-rules-request.md) | Optional | The split rules request | getSplitRules(): ?array | setSplitRules(?array splitRules): void |
| `split` | [`?(CreateSplitRequest[])`](../../doc/models/create-split-request.md) | Optional | Splits | getSplit(): ?array | setSplit(?array split): void |
| `operationReference` | `string` | Required | - | getOperationReference(): string | setOperationReference(string operationReference): void |
| `bankAccount` | [`?CreateBankAccountRefundingDTO`](../../doc/models/create-bank-account-refunding-dto.md) | Optional | - | getBankAccount(): ?CreateBankAccountRefundingDTO | setBankAccount(?CreateBankAccountRefundingDTO bankAccount): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCancelChargeRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateCancelChargeSplitRulesRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateSplitRequestBuilder;

$createCancelChargeRequest = CreateCancelChargeRequestBuilder::init(
    'operation_reference0'
)
    ->amount(222)
    ->splitRules(
        [
            null,
            CreateCancelChargeSplitRulesRequestBuilder::init(
                '',
                0,
                ''
            )->build(),
            CreateCancelChargeSplitRulesRequestBuilder::init(
                '',
                0,
                ''
            )->build()
        ]
    )
    ->split(
        [
            null,
            CreateSplitRequestBuilder::init(
                '',
                0,
                ''
            )->build(),
            CreateSplitRequestBuilder::init(
                '',
                0,
                ''
            )->build()
        ]
    )
    ->bankAccount(
        null
    )
    ->build();
```

