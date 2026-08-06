
# Get Access Token Response

Response object for getting a access token

## Structure

`GetAccessTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetAccessTokenResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getAccessTokenResponse = GetAccessTokenResponseBuilder::init()
    ->id('id2')
    ->code('code0')
    ->status('status6')
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->customer(
        null
    )
    ->build();
```

