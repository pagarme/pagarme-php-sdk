
# Create Boleto Payment Request

Contains the settings for creating a boleto payment

## Structure

`CreateBoletoPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `retries` | `int` | Required | Number of retries | getRetries(): int | setRetries(int retries): void |
| `bank` | `?string` | Optional | The bank code, containing three characters. The available codes are on the API specification | getBank(): ?string | setBank(?string bank): void |
| `instructions` | `string` | Required | The instructions field that will be printed on the boleto. | getInstructions(): string | setInstructions(string instructions): void |
| `dueAt` | `?DateTime` | Optional | Boleto due date | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `billingAddress` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Card's billing address | getBillingAddress(): CreateAddressRequest | setBillingAddress(CreateAddressRequest billingAddress): void |
| `billingAddressId` | `?string` | Optional | The address id for the billing address | getBillingAddressId(): ?string | setBillingAddressId(?string billingAddressId): void |
| `nossoNumero` | `?string` | Optional | Customer identification number with the bank | getNossoNumero(): ?string | setNossoNumero(?string nossoNumero): void |
| `documentNumber` | `string` | Required | Boleto identification | getDocumentNumber(): string | setDocumentNumber(string documentNumber): void |
| `statementDescriptor` | `string` | Required | Soft Descriptor | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `interest` | [`?CreateInterestRequest`](../../doc/models/create-interest-request.md) | Optional | - | getInterest(): ?CreateInterestRequest | setInterest(?CreateInterestRequest interest): void |
| `fine` | [`?CreateFineRequest`](../../doc/models/create-fine-request.md) | Optional | - | getFine(): ?CreateFineRequest | setFine(?CreateFineRequest fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateBoletoPaymentRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$createBoletoPaymentRequest = CreateBoletoPaymentRequestBuilder::init(
    192,
    'instructions6',
    null,
    'document_number2',
    'statement_descriptor8'
)
    ->bank('bank6')
    ->dueAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->billingAddressId('billing_address_id4')
    ->nossoNumero('nosso_numero8')
    ->interest(
        null
    )
    ->build();
```

