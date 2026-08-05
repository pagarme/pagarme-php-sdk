
# Update Subscription Affiliation Id Request

Request for updating a Subscription Affiliation Id

## Structure

`UpdateSubscriptionAffiliationIdRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `gatewayAffiliationId` | `string` | Required | - | getGatewayAffiliationId(): string | setGatewayAffiliationId(string gatewayAffiliationId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionAffiliationIdRequestBuilder;

$updateSubscriptionAffiliationIdRequest = UpdateSubscriptionAffiliationIdRequestBuilder::init(
    'gateway_affiliation_id6'
)->build();
```

