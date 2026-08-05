
# Create Managing Partner Request

Managing Partner Request

## Structure

`CreateManagingPartnerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `document` | `string` | Required | - | getDocument(): string | setDocument(string document): void |
| `motherName` | `?string` | Optional | - | getMotherName(): ?string | setMotherName(?string motherName): void |
| `birthdate` | `string` | Required | - | getBirthdate(): string | setBirthdate(string birthdate): void |
| `monthlyIncome` | `int` | Required | - | getMonthlyIncome(): int | setMonthlyIncome(int monthlyIncome): void |
| `professionalOccupation` | `string` | Required | - | getProfessionalOccupation(): string | setProfessionalOccupation(string professionalOccupation): void |
| `selfDeclaredLegalRepresentative` | `bool` | Required | - | getSelfDeclaredLegalRepresentative(): bool | setSelfDeclaredLegalRepresentative(bool selfDeclaredLegalRepresentative): void |
| `address` | [`CreateRegisterInformationAddressRequest`](../../doc/models/create-register-information-address-request.md) | Required | - | getAddress(): CreateRegisterInformationAddressRequest | setAddress(CreateRegisterInformationAddressRequest address): void |
| `phoneNumbers` | [`CreateRegisterInformationPhoneRequest[]`](../../doc/models/create-register-information-phone-request.md) | Required | - | getPhoneNumbers(): array | setPhoneNumbers(array phoneNumbers): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateManagingPartnerRequestBuilder;

$createManagingPartnerRequest = CreateManagingPartnerRequestBuilder::init(
    '',
    '',
    '',
    '',
    0,
    '',
    false,
    null,
    [
        null
    ]
)
    ->motherName('mother_name8')
    ->build();
```

