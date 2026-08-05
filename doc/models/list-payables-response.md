
# List Payables Response

Response object for listing payable objects

## Structure

`ListPayablesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetPayableResponse[])`](../../doc/models/get-payable-response.md) | Optional | The payable object | getData(): ?array | setData(?array data): void |
| `paging` | [`CursorPagingResponse`](../../doc/models/cursor-paging-response.md) | Required | Cursor paging response | getPaging(): CursorPagingResponse | setPaging(CursorPagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListPayablesResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\CursorPagingResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetPayableResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$listPayablesResponse = ListPayablesResponseBuilder::init(
    CursorPagingResponseBuilder::init()
        ->forwardCursor('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYWxhcGlDdXJzb3IiOiJleUpoYkdjaU9pSklVekkxTmlJc0luUjVjQ0k2SWtwWFZDSjkuZXlKcFlYUWlPaUl4TnpnMU9UTXpNVGN6SWl3aVpYaHdJam94TnpnMU9UTTJOemN6TENKcFpDSTZJalF6TWpVeU1ETXhOREFpZlEuTmtrUk85Slg3eC1YMVFLZ0ZIYkw3VGw4ZVV0NkR1ZWVQVlk5a0pHNXhxNCIsImlhdCI6MTc4NTkzMzE3MywiZXhwIjoxNzg1OTM2NzczfQ.5qM-BQbArZKXbfen5NnEXq6gbhyP-DrgsG1SMrpF4Y4')
        ->build()
)
    ->data(
        [
            GetPayableResponseBuilder::init(
                '5b71f2a8b472ef521b224b75fd13c14e09d37822fd100f2cd425ef5aea02f5bf',
                'paid',
                1100,
                DateTimeHelper::fromRfc3339DateTimeRequired('2025-08-20T10:30:00Z')
            )
                ->fee(0)
                ->anticipationFee(0)
                ->fraudCoverageFee(0)
                ->installment(44)
                ->gatewayId(null)
                ->chargeId('ch_123')
                ->splitId(null)
                ->bulkAnticipationId(null)
                ->anticipationId('anticipation_id0')
                ->recipientId('re_cixm61j7e00doin6de8ocgttb')
                ->originatorModel('ownership_assignment')
                ->originatorModelId(null)
                ->paymentDate(DateTimeHelper::fromRfc3339DateTime('2025-08-18T03:00:00Z'))
                ->originalPaymentDate(DateTimeHelper::fromRfc3339DateTime('2025-08-21T03:00:00Z'))
                ->type('credit')
                ->paymentMethod('credit_card')
                ->accrualAt(DateTimeHelper::fromRfc3339DateTime('2023-08-21T12:51:28Z'))
                ->liquidationArrangementId(null)
                ->settlementId('03002e00-edde-6d4c-dd9e-ffaaafac08de')
                ->paymentProfileId('pp_03gd2e0o5kj37ujs38zgw9s9v')
                ->build()
        ]
    )
    ->build();
```

