
# Get Phones Response

## Structure

`GetPhonesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `homePhone` | [`GetPhoneResponse`](../../doc/models/get-phone-response.md) | Required | - | getHomePhone(): GetPhoneResponse | setHomePhone(GetPhoneResponse homePhone): void |
| `mobilePhone` | [`GetPhoneResponse`](../../doc/models/get-phone-response.md) | Required | - | getMobilePhone(): GetPhoneResponse | setMobilePhone(GetPhoneResponse mobilePhone): void |

## Example (as JSON)

```json
{
  "home_phone": {
    "country_code": null,
    "number": null,
    "area_code": null
  },
  "mobile_phone": {
    "country_code": null,
    "number": null,
    "area_code": null
  }
}
```

