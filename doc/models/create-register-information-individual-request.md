
# Create Register Information Individual Request

## Structure

`CreateRegisterInformationIndividualRequest`

## Inherits From

[`CreateRegisterInformationBaseRequest`](../../doc/models/create-register-information-base-request.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `motherName` | `?string` | Optional | - | getMotherName(): ?string | setMotherName(?string motherName): void |
| `birthdate` | `string` | Required | - | getBirthdate(): string | setBirthdate(string birthdate): void |
| `monthlyIncome` | `int` | Required | - | getMonthlyIncome(): int | setMonthlyIncome(int monthlyIncome): void |
| `professionalOccupation` | `string` | Required | - | getProfessionalOccupation(): string | setProfessionalOccupation(string professionalOccupation): void |
| `address` | [`CreateRegisterInformationAddressRequest`](../../doc/models/create-register-information-address-request.md) | Required | - | getAddress(): CreateRegisterInformationAddressRequest | setAddress(CreateRegisterInformationAddressRequest address): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateRegisterInformationIndividualRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateRegisterInformationPhoneRequestBuilder;

$createRegisterInformationIndividualRequest = CreateRegisterInformationIndividualRequestBuilder::init(
    'email4',
    'document6',
    'type8',
    [
        null,
        CreateRegisterInformationPhoneRequestBuilder::init(
            '',
            '',
            ''
        )->build()
    ],
    'name2',
    'birthdate6',
    20,
    'professional_occupation6',
    null
)
    ->siteUrl('site_url4')
    ->motherName('mother_name8')
    ->build();
```

