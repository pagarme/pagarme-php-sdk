
# Get Register Information Response

Response object for getting an RegisterInformationResponse

## Structure

`GetRegisterInformationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `document` | `?string` | Optional | - | getDocument(): ?string | setDocument(?string document): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `siteUrl` | `?string` | Optional | - | getSiteUrl(): ?string | setSiteUrl(?string siteUrl): void |
| `phoneNumbers` | [`?(GetPhoneNumberResponse[])`](../../doc/models/get-phone-number-response.md) | Optional | - | getPhoneNumbers(): ?array | setPhoneNumbers(?array phoneNumbers): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `motherName` | `?string` | Optional | - | getMotherName(): ?string | setMotherName(?string motherName): void |
| `birthdate` | `?string` | Optional | - | getBirthdate(): ?string | setBirthdate(?string birthdate): void |
| `monthlyIncome` | `?string` | Optional | - | getMonthlyIncome(): ?string | setMonthlyIncome(?string monthlyIncome): void |
| `professionalOccupation` | `?string` | Optional | - | getProfessionalOccupation(): ?string | setProfessionalOccupation(?string professionalOccupation): void |
| `address` | [`?GetRegisterInformationAddressResponse`](../../doc/models/get-register-information-address-response.md) | Optional | - | getAddress(): ?GetRegisterInformationAddressResponse | setAddress(?GetRegisterInformationAddressResponse address): void |
| `companyName` | `?string` | Optional | - | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `tradingName` | `?string` | Optional | - | getTradingName(): ?string | setTradingName(?string tradingName): void |
| `annualRevenue` | `?string` | Optional | - | getAnnualRevenue(): ?string | setAnnualRevenue(?string annualRevenue): void |
| `corporationType` | `?string` | Optional | - | getCorporationType(): ?string | setCorporationType(?string corporationType): void |
| `foundingDate` | `?string` | Optional | - | getFoundingDate(): ?string | setFoundingDate(?string foundingDate): void |
| `cnae` | `?string` | Optional | - | getCnae(): ?string | setCnae(?string cnae): void |
| `mainAddress` | [`?GetRegisterInformationAddressResponse`](../../doc/models/get-register-information-address-response.md) | Optional | - | getMainAddress(): ?GetRegisterInformationAddressResponse | setMainAddress(?GetRegisterInformationAddressResponse mainAddress): void |
| `managingPartners` | [`?(GetManagingPartnerResponse[])`](../../doc/models/get-managing-partner-response.md) | Optional | - | getManagingPartners(): ?array | setManagingPartners(?array managingPartners): void |

## Example (as JSON)

```json
{
  "email": "email2",
  "document": "document2",
  "type": "type6",
  "site_url": "site_url6",
  "phone_numbers": [
    {
      "ddd": "ddd4",
      "number": "number2",
      "type": "type0"
    },
    {
      "ddd": "ddd4",
      "number": "number2",
      "type": "type0"
    }
  ]
}
```

