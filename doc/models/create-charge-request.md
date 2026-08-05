
# Create Charge Request

Request for creating a new charge

## Structure

`CreateChargeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Code | getCode(): ?string | setCode(?string code): void |
| `amount` | `int` | Required | The amount of the charge, in cents | getAmount(): int | setAmount(int amount): void |
| `customerId` | `?string` | Optional | The customer's id | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `customer` | [`?CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Optional | Customer data | getCustomer(): ?CreateCustomerRequest | setCustomer(?CreateCustomerRequest customer): void |
| `payment` | [`CreatePaymentRequest`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayment(): CreatePaymentRequest | setPayment(CreatePaymentRequest payment): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `dueAt` | `?DateTime` | Optional | The charge due date | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `antifraud` | [`?CreateAntifraudRequest`](../../doc/models/create-antifraud-request.md) | Optional | - | getAntifraud(): ?CreateAntifraudRequest | setAntifraud(?CreateAntifraudRequest antifraud): void |
| `orderId` | `string` | Required | Order Id | getOrderId(): string | setOrderId(string orderId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateChargeRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$createChargeRequest = CreateChargeRequestBuilder::init(
    160,
    null,
    'order_id8'
)
    ->code('code2')
    ->customerId('customer_id2')
    ->customer(
        null
    )
    ->metadata(
        [
            'key0' => 'metadata1',
            'key1' => 'metadata0',
            'key2' => 'metadata9'
        ]
    )
    ->dueAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

