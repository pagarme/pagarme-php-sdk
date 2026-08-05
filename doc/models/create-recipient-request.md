
# Create Recipient Request

Request for creating a recipient

## Structure

`CreateRecipientRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Recipient name. Required if the register_information field isn't populated. | getName(): ?string | setName(?string name): void |
| `email` | `?string` | Optional | Recipient email. Required if the register_information field isn't populated. | getEmail(): ?string | setEmail(?string email): void |
| `description` | `?string` | Optional | Recipient description | getDescription(): ?string | setDescription(?string description): void |
| `document` | `?string` | Optional | Recipient document number. Required if the register_information field isn't populated. | getDocument(): ?string | setDocument(?string document): void |
| `type` | `?string` | Optional | Recipient type. Required if the register_information field isn't populated. | getType(): ?string | setType(?string type): void |
| `defaultBankAccount` | [`CreateBankAccountRequest`](../../doc/models/create-bank-account-request.md) | Required | Bank account | getDefaultBankAccount(): CreateBankAccountRequest | setDefaultBankAccount(CreateBankAccountRequest defaultBankAccount): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `transferSettings` | [`?CreateTransferSettingsRequest`](../../doc/models/create-transfer-settings-request.md) | Optional | Receiver Transfer Information | getTransferSettings(): ?CreateTransferSettingsRequest | setTransferSettings(?CreateTransferSettingsRequest transferSettings): void |
| `code` | `string` | Required | Recipient code | getCode(): string | setCode(string code): void |
| `paymentMode` | `string` | Required | Payment mode<br><br>**Default**: `'bank_transfer'` | getPaymentMode(): string | setPaymentMode(string paymentMode): void |
| `registerInformation` | [`?CreateRegisterInformationBaseRequest`](../../doc/models/create-register-information-base-request.md) | Optional | Register Information | getRegisterInformation(): ?CreateRegisterInformationBaseRequest | setRegisterInformation(?CreateRegisterInformationBaseRequest registerInformation): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateRecipientRequestBuilder;

$createRecipientRequest = CreateRecipientRequestBuilder::init(
    null,
    [],
    '',
    'bank_transfer'
)
    ->name('name2')
    ->email('email4')
    ->description('description2')
    ->document('document4')
    ->type('type8')
    ->build();
```

