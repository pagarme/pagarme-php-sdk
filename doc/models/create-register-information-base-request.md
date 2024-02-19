
# Create Register Information Base Request

Request object for RegisterInformation.

## Structure

`CreateRegisterInformationBaseRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `document` | `string` | Required | - | getDocument(): string | setDocument(string document): void |
| `type` | `string` | Required | "individual" ou "corporation" | getType(): string | setType(string type): void |
| `siteUrl` | `?string` | Optional | - | getSiteUrl(): ?string | setSiteUrl(?string siteUrl): void |
| `phoneNumbers` | [`CreateRegisterInformationPhoneRequest[]`](../../doc/models/create-register-information-phone-request.md) | Required | - | getPhoneNumbers(): array | setPhoneNumbers(array phoneNumbers): void |

## Example (as JSON)

```json
{
  "email": "email4",
  "document": "document6",
  "type": "type8",
  "phone_numbers": [
    {
      "ddd": "ddd4",
      "number": "number2",
      "type": "type0"
    }
  ],
  "site_url": "site_url4"
}
```

