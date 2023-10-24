
# Create Phones Request

## Structure

`CreatePhonesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `homePhone` | [`?CreatePhoneRequest`](../../doc/models/create-phone-request.md) | Optional | - | getHomePhone(): ?CreatePhoneRequest | setHomePhone(?CreatePhoneRequest homePhone): void |
| `mobilePhone` | [`?CreatePhoneRequest`](../../doc/models/create-phone-request.md) | Optional | - | getMobilePhone(): ?CreatePhoneRequest | setMobilePhone(?CreatePhoneRequest mobilePhone): void |

## Example (as JSON)

```json
{
  "home_phone": {
    "country_code": "country_code0",
    "number": "number2",
    "area_code": "area_code0",
    "Type": "Type0"
  },
  "mobile_phone": {
    "country_code": "country_code0",
    "number": "number8",
    "area_code": "area_code0",
    "Type": "Type0"
  }
}
```

