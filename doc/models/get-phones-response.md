
# Get Phones Response

## Structure

`GetPhonesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `homePhone` | [`?GetPhoneResponse`](../../doc/models/get-phone-response.md) | Optional | - | getHomePhone(): ?GetPhoneResponse | setHomePhone(?GetPhoneResponse homePhone): void |
| `mobilePhone` | [`?GetPhoneResponse`](../../doc/models/get-phone-response.md) | Optional | - | getMobilePhone(): ?GetPhoneResponse | setMobilePhone(?GetPhoneResponse mobilePhone): void |

## Example (as JSON)

```json
{
  "home_phone": {
    "country_code": "country_code0",
    "number": "number2",
    "area_code": "area_code0"
  },
  "mobile_phone": {
    "country_code": "country_code0",
    "number": "number8",
    "area_code": "area_code0"
  }
}
```

