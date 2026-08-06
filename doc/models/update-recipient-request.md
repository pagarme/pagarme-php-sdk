
# Update Recipient Request

Request for updating a Recipient

## Structure

`UpdateRecipientRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Name | getName(): string | setName(string name): void |
| `email` | `string` | Required | Email | getEmail(): string | setEmail(string email): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `type` | `string` | Required | Type | getType(): string | setType(string type): void |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateRecipientRequestBuilder;

$updateRecipientRequest = UpdateRecipientRequestBuilder::init(
    'name4',
    'email2',
    'description4',
    'type4',
    'status6',
    [
        'key0' => 'metadata1',
        'key1' => 'metadata0'
    ]
)->build();
```

