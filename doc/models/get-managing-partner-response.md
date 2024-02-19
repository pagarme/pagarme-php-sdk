
# Get Managing Partner Response

Response object for getting an ManagingPartnerResponse

## Structure

`GetManagingPartnerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `document` | `?string` | Optional | - | getDocument(): ?string | setDocument(?string document): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `motherName` | `?string` | Optional | - | getMotherName(): ?string | setMotherName(?string motherName): void |
| `birthdate` | `?string` | Optional | - | getBirthdate(): ?string | setBirthdate(?string birthdate): void |
| `monthlyIncome` | `?string` | Optional | - | getMonthlyIncome(): ?string | setMonthlyIncome(?string monthlyIncome): void |
| `professionalOccupation` | `?string` | Optional | - | getProfessionalOccupation(): ?string | setProfessionalOccupation(?string professionalOccupation): void |
| `selfDeclaredRepresentative` | `?bool` | Optional | - | getSelfDeclaredRepresentative(): ?bool | setSelfDeclaredRepresentative(?bool selfDeclaredRepresentative): void |
| `address` | [`?GetRegisterInformationAddressResponse`](../../doc/models/get-register-information-address-response.md) | Optional | - | getAddress(): ?GetRegisterInformationAddressResponse | setAddress(?GetRegisterInformationAddressResponse address): void |
| `phoneNumbers` | [`?(GetPhoneNumberResponse[])`](../../doc/models/get-phone-number-response.md) | Optional | - | getPhoneNumbers(): ?array | setPhoneNumbers(?array phoneNumbers): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "email": "email6",
  "document": "document6",
  "type": "type0",
  "mother_name": "mother_name6"
}
```

