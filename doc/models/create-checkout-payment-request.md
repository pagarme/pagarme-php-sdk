
# Create Checkout Payment Request

Checkout payment request

## Structure

`CreateCheckoutPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptedPaymentMethods` | `string[]` | Required | Accepted Payment Methods | getAcceptedPaymentMethods(): array | setAcceptedPaymentMethods(array acceptedPaymentMethods): void |
| `acceptedMultiPaymentMethods` | `array[]` | Required | Accepted Multi Payment Methods | getAcceptedMultiPaymentMethods(): array | setAcceptedMultiPaymentMethods(array acceptedMultiPaymentMethods): void |
| `successUrl` | `string` | Required | Success url | getSuccessUrl(): string | setSuccessUrl(string successUrl): void |
| `defaultPaymentMethod` | `?string` | Optional | Default payment method | getDefaultPaymentMethod(): ?string | setDefaultPaymentMethod(?string defaultPaymentMethod): void |
| `gatewayAffiliationId` | `?string` | Optional | Gateway Affiliation Id | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |
| `creditCard` | [`?CreateCheckoutCreditCardPaymentRequest`](../../doc/models/create-checkout-credit-card-payment-request.md) | Optional | Credit Card payment request | getCreditCard(): ?CreateCheckoutCreditCardPaymentRequest | setCreditCard(?CreateCheckoutCreditCardPaymentRequest creditCard): void |
| `debitCard` | [`?CreateCheckoutDebitCardPaymentRequest`](../../doc/models/create-checkout-debit-card-payment-request.md) | Optional | Debit Card payment request | getDebitCard(): ?CreateCheckoutDebitCardPaymentRequest | setDebitCard(?CreateCheckoutDebitCardPaymentRequest debitCard): void |
| `boleto` | [`?CreateCheckoutBoletoPaymentRequest`](../../doc/models/create-checkout-boleto-payment-request.md) | Optional | Boleto payment request | getBoleto(): ?CreateCheckoutBoletoPaymentRequest | setBoleto(?CreateCheckoutBoletoPaymentRequest boleto): void |
| `customerEditable` | `?bool` | Optional | Customer is editable? | getCustomerEditable(): ?bool | setCustomerEditable(?bool customerEditable): void |
| `expiresIn` | `?int` | Optional | Time in minutes for expiration | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `skipCheckoutSuccessPage` | `bool` | Required | Skip postpay success screen? | getSkipCheckoutSuccessPage(): bool | setSkipCheckoutSuccessPage(bool skipCheckoutSuccessPage): void |
| `billingAddressEditable` | `bool` | Required | Billing Address is editable? | getBillingAddressEditable(): bool | setBillingAddressEditable(bool billingAddressEditable): void |
| `billingAddress` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Billing Address | getBillingAddress(): CreateAddressRequest | setBillingAddress(CreateAddressRequest billingAddress): void |
| `bankTransfer` | [`?CreateCheckoutBankTransferRequest`](../../doc/models/create-checkout-bank-transfer-request.md) | Optional | Bank Transfer payment request | getBankTransfer(): ?CreateCheckoutBankTransferRequest | setBankTransfer(?CreateCheckoutBankTransferRequest bankTransfer): void |
| `acceptedBrands` | `string[]` | Required | Accepted Brands | getAcceptedBrands(): array | setAcceptedBrands(array acceptedBrands): void |
| `pix` | [`?CreateCheckoutPixPaymentRequest`](../../doc/models/create-checkout-pix-payment-request.md) | Optional | Pix payment request | getPix(): ?CreateCheckoutPixPaymentRequest | setPix(?CreateCheckoutPixPaymentRequest pix): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutPaymentRequestBuilder;
use PagarmeApiSDKLib\ApiHelper;

$createCheckoutPaymentRequest = CreateCheckoutPaymentRequestBuilder::init(
    [
        'accepted_payment_methods1'
    ],
    [
        ApiHelper::deserialize('{"key1":"val1","key2":"val2"}')
    ],
    'success_url0',
    false,
    false,
    null,
    [
        'accepted_brands6'
    ]
)
    ->defaultPaymentMethod('default_payment_method8')
    ->gatewayAffiliationId('gateway_affiliation_id4')
    ->creditCard(
        null
    )
    ->debitCard(
        null
    )
    ->boleto(
        null
    )
    ->build();
```

