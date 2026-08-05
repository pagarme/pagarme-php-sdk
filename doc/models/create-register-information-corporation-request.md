
# Create Register Information Corporation Request

## Structure

`CreateRegisterInformationCorporationRequest`

## Inherits From

[`CreateRegisterInformationBaseRequest`](../../doc/models/create-register-information-base-request.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `companyName` | `string` | Required | - | getCompanyName(): string | setCompanyName(string companyName): void |
| `tradingName` | `string` | Required | - | getTradingName(): string | setTradingName(string tradingName): void |
| `annualRevenue` | `int` | Required | - | getAnnualRevenue(): int | setAnnualRevenue(int annualRevenue): void |
| `corporationType` | `?string` | Optional | - | getCorporationType(): ?string | setCorporationType(?string corporationType): void |
| `foundingDate` | `?string` | Optional | - | getFoundingDate(): ?string | setFoundingDate(?string foundingDate): void |
| `cnae` | `?string` | Optional | - | getCnae(): ?string | setCnae(?string cnae): void |
| `managingPartners` | [`CreateManagingPartnerRequest[]`](../../doc/models/create-managing-partner-request.md) | Required | - | getManagingPartners(): array | setManagingPartners(array managingPartners): void |
| `mainAddress` | [`CreateRegisterInformationAddressRequest`](../../doc/models/create-register-information-address-request.md) | Required | - | getMainAddress(): CreateRegisterInformationAddressRequest | setMainAddress(CreateRegisterInformationAddressRequest mainAddress): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateRegisterInformationCorporationRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateManagingPartnerRequestBuilder;

$createRegisterInformationCorporationRequest = CreateRegisterInformationCorporationRequestBuilder::init(
    '',
    '',
    '',
    [
        null
    ],
    '',
    '',
    0,
    [
        CreateManagingPartnerRequestBuilder::init(
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
            ->motherName('mother_name0')
            ->build()
    ],
    null
)
    ->siteUrl('site_url4')
    ->corporationType('corporation_type0')
    ->foundingDate('founding_date0')
    ->cnae('cnae0')
    ->build();
```

