
# Get Order Item Response

Response object for getting an order item

## Structure

`GetOrderItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id | getId(): ?string | setId(?string id): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `category` | `?string` | Optional | Category | getCategory(): ?string | setCategory(?string category): void |
| `code` | `?string` | Optional | Code | getCode(): ?string | setCode(?string code): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetOrderItemResponseBuilder;

$getOrderItemResponse = GetOrderItemResponseBuilder::init()
    ->id('id4')
    ->type('type6')
    ->description('description6')
    ->amount(212)
    ->quantity(70)
    ->build();
```

