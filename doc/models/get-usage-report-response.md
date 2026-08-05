
# Get Usage Report Response

## Structure

`GetUsageReportResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `usageReportUrl` | `?string` | Optional | - | getUsageReportUrl(): ?string | setUsageReportUrl(?string usageReportUrl): void |
| `groupedReportUrl` | `?string` | Optional | - | getGroupedReportUrl(): ?string | setGroupedReportUrl(?string groupedReportUrl): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetUsageReportResponseBuilder;

$getUsageReportResponse = GetUsageReportResponseBuilder::init()
    ->url('url2')
    ->usageReportUrl('usage_report_url0')
    ->groupedReportUrl('grouped_report_url0')
    ->build();
```

