
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

## Example (as JSON)

```json
{
  "name": "name4",
  "email": "email2",
  "document": "document2",
  "birthdate": "birthdate8",
  "monthly_income": 70,
  "professional_occupation": "professional_occupation8",
  "self_declared_legal_representative": false,
  "address": {
    "street": "street6",
    "complementary": "complementary8",
    "street_number": "street_number6",
    "neighborhood": "neighborhood2",
    "city": "city6",
    "state": "state2",
    "zip_code": "zip_code0",
    "reference_point": "reference_point0"
  },
  "phone_numbers": [
    {
      "ddd": "ddd4",
      "number": "number2",
      "type": "type0"
    }
  ],
  "mother_name": "mother_name0"
}
```

