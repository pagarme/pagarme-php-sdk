
# Get Subscription Split Response

## Structure

`GetSubscriptionSplitResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Defines if the split is enabled | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `rules` | [`?(GetSplitResponse[])`](../../doc/models/get-split-response.md) | Optional | Split | getRules(): ?array | setRules(?array rules): void |

## Example (as JSON)

```json
{
  "enabled": false,
  "rules": [
    {
      "type": "type2",
      "amount": 118,
      "recipient": {
        "id": "id8",
        "name": "name8",
        "email": "email8",
        "document": "document8",
        "description": "description2"
      },
      "gateway_id": "gateway_id2",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": "charge_remainder_fee0"
      }
    },
    {
      "type": "type2",
      "amount": 118,
      "recipient": {
        "id": "id8",
        "name": "name8",
        "email": "email8",
        "document": "document8",
        "description": "description2"
      },
      "gateway_id": "gateway_id2",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": "charge_remainder_fee0"
      }
    },
    {
      "type": "type2",
      "amount": 118,
      "recipient": {
        "id": "id8",
        "name": "name8",
        "email": "email8",
        "document": "document8",
        "description": "description2"
      },
      "gateway_id": "gateway_id2",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": "charge_remainder_fee0"
      }
    }
  ]
}
```

