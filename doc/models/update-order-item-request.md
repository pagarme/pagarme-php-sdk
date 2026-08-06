
# Update Order Item Request

Update Order item Request

## Structure

`UpdateOrderItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `quantity` | `int` | Required | - | getQuantity(): int | setQuantity(int quantity): void |
| `category` | `string` | Required | - | getCategory(): string | setCategory(string category): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateOrderItemRequestBuilder;

$updateOrderItemRequest = UpdateOrderItemRequestBuilder::init(
    202,
    'description0',
    60,
    'category8'
)->build();
```

