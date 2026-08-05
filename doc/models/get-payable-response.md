
# Get Payable Response

Response object for getting an payable

## Structure

`GetPayableResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Payable Identifier | getId(): string | setId(string id): void |
| `status` | `string` | Required | Payable status | getStatus(): string | setStatus(string status): void |
| `amount` | `int` | Required | Payable amount in cents | getAmount(): int | setAmount(int amount): void |
| `fee` | `?int` | Optional | Payable fee amount in cents | getFee(): ?int | setFee(?int fee): void |
| `anticipationFee` | `?int` | Optional | Antecipation fee amount in cents | getAnticipationFee(): ?int | setAnticipationFee(?int anticipationFee): void |
| `fraudCoverageFee` | `?int` | Optional | Fraud coverage fee amount in cents | getFraudCoverageFee(): ?int | setFraudCoverageFee(?int fraudCoverageFee): void |
| `installment` | `?int` | Optional | Number of installment | getInstallment(): ?int | setInstallment(?int installment): void |
| `gatewayId` | `?string` | Required | Payment gateway identifier<br><br>**Default**: `'null'` | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `chargeId` | `?string` | Required | Charge identifier<br><br>**Default**: `'null'` | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `splitId` | `?string` | Required | **Default**: `'null'` | getSplitId(): ?string | setSplitId(?string splitId): void |
| `bulkAnticipationId` | `?string` | Required | **Default**: `'null'` | getBulkAnticipationId(): ?string | setBulkAnticipationId(?string bulkAnticipationId): void |
| `anticipationId` | `?string` | Optional | - | getAnticipationId(): ?string | setAnticipationId(?string anticipationId): void |
| `recipientId` | `?string` | Required | Recipient identifier | getRecipientId(): ?string | setRecipientId(?string recipientId): void |
| `originatorModel` | `?string` | Required | **Default**: `'null'` | getOriginatorModel(): ?string | setOriginatorModel(?string originatorModel): void |
| `originatorModelId` | `?string` | Required | Originator model identifier<br><br>**Default**: `'null'` | getOriginatorModelId(): ?string | setOriginatorModelId(?string originatorModelId): void |
| `paymentDate` | `?DateTime` | Optional | Payment Date | getPaymentDate(): ?\DateTime | setPaymentDate(?\DateTime paymentDate): void |
| `originalPaymentDate` | `?DateTime` | Required | Original Payment Date | getOriginalPaymentDate(): ?\DateTime | setOriginalPaymentDate(?\DateTime originalPaymentDate): void |
| `type` | `?string` | Optional | Type of payable | getType(): ?string | setType(?string type): void |
| `paymentMethod` | `?string` | Required | Payment method of transaction<br><br>**Default**: `'null'` | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `accrualAt` | `?DateTime` | Optional | Date issuer identify payment | getAccrualAt(): ?\DateTime | setAccrualAt(?\DateTime accrualAt): void |
| `createdAt` | `DateTime` | Required | Creation date | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `liquidationArrangementId` | `?string` | Optional | **Default**: `'null'` | getLiquidationArrangementId(): ?string | setLiquidationArrangementId(?string liquidationArrangementId): void |
| `settlementId` | `?string` | Required | Settlement identifier  (new in v7.x)<br><br>**Default**: `'null'` | getSettlementId(): ?string | setSettlementId(?string settlementId): void |
| `paymentProfileId` | `?string` | Required | Operational identifier of merchant inside of payment platform (new in v7.x)<br><br>**Default**: `'null'` | getPaymentProfileId(): ?string | setPaymentProfileId(?string paymentProfileId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPayableResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getPayableResponse = GetPayableResponseBuilder::init(
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
    ->anticipationId('anticipation_id6')
    ->recipientId('re_abcde123fghijk789')
    ->originatorModel('ownership_assignment')
    ->originatorModelId(null)
    ->paymentDate(DateTimeHelper::fromRfc3339DateTime('2025-08-18T03:00:00Z'))
    ->originalPaymentDate(DateTimeHelper::fromRfc3339DateTime('2025-08-21T03:00:00Z'))
    ->type('credit')
    ->paymentMethod('credit_card')
    ->accrualAt(DateTimeHelper::fromRfc3339DateTime('2023-08-21T12:51:28Z'))
    ->liquidationArrangementId(null)
    ->settlementId('03002e00-edde-6d4c-dd9e-ffaaafac08de')
    ->paymentProfileId('pp_abcde123fghijk789')
    ->build();
```

