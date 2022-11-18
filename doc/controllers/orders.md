# Orders

```php
$ordersController = $client->getOrdersController();
```

## Class Name

`OrdersController`

## Methods

* [Get Orders](../../doc/controllers/orders.md#get-orders)
* [Update Order Item](../../doc/controllers/orders.md#update-order-item)
* [Delete All Order Items](../../doc/controllers/orders.md#delete-all-order-items)
* [Delete Order Item](../../doc/controllers/orders.md#delete-order-item)
* [Close Order](../../doc/controllers/orders.md#close-order)
* [Create Order](../../doc/controllers/orders.md#create-order)
* [Create Order Item](../../doc/controllers/orders.md#create-order-item)
* [Get Order Item](../../doc/controllers/orders.md#get-order-item)
* [Update Order Metadata](../../doc/controllers/orders.md#update-order-metadata)
* [Get Order](../../doc/controllers/orders.md#get-order)


# Get Orders

Gets all orders

```php
function getOrders(
    ?int $page = null,
    ?int $size = null,
    ?string $code = null,
    ?string $status = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null,
    ?string $customerId = null
): ListOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Filter for order's code |
| `status` | `?string` | Query, Optional | Filter for order's status |
| `createdSince` | `?\DateTime` | Query, Optional | Filter for order's creation date start range |
| `createdUntil` | `?\DateTime` | Query, Optional | Filter for order's creation date end range |
| `customerId` | `?string` | Query, Optional | Filter for order's customer id |

## Response Type

[`ListOrderResponse`](../../doc/models/list-order-response.md)

## Example Usage

```php
$result = $ordersController->getOrders();
```


# Update Order Item

```php
function updateOrderItem(
    string $orderId,
    string $itemId,
    UpdateOrderItemRequest $request,
    ?string $idempotencyKey = null
): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |
| `request` | [`UpdateOrderItemRequest`](../../doc/models/update-order-item-request.md) | Body, Required | Item Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';
$itemId = 'itemId8';
$request_amount = 242;
$request_description = 'description6';
$request_quantity = 100;
$request_category = 'category4';
$request = new Models\UpdateOrderItemRequest(
    $request_amount,
    $request_description,
    $request_quantity,
    $request_category
);

$result = $ordersController->updateOrderItem($orderId, $itemId, $request);
```


# Delete All Order Items

```php
function deleteAllOrderItems(string $orderId, ?string $idempotencyKey = null): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$result = $ordersController->deleteAllOrderItems($orderId);
```


# Delete Order Item

```php
function deleteOrderItem(string $orderId, string $itemId, ?string $idempotencyKey = null): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';
$itemId = 'itemId8';

$result = $ordersController->deleteOrderItem($orderId, $itemId);
```


# Close Order

```php
function closeOrder(
    string $id,
    UpdateOrderStatusRequest $request,
    ?string $idempotencyKey = null
): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Order Id |
| `request` | [`UpdateOrderStatusRequest`](../../doc/models/update-order-status-request.md) | Body, Required | Update Order Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$id = 'id0';
$request_status = 'status8';
$request = new Models\UpdateOrderStatusRequest(
    $request_status
);

$result = $ordersController->closeOrder($id, $request);
```


# Create Order

Creates a new Order

```php
function createOrder(CreateOrderRequest $body, ?string $idempotencyKey = null): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateOrderRequest`](../../doc/models/create-order-request.md) | Body, Required | Request for creating an order |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$body_items = [];

$body_items_0_amount = 101;
$body_items_0_description = 'description3';
$body_items_0_quantity = 215;
$body_items_0_category = 'category1';
$body_items[0] = new Models\CreateOrderItemRequest(
    $body_items_0_amount,
    $body_items_0_description,
    $body_items_0_quantity,
    $body_items_0_category
);

$body_items_1_amount = 102;
$body_items_1_description = 'description4';
$body_items_1_quantity = 216;
$body_items_1_category = 'category2';
$body_items[1] = new Models\CreateOrderItemRequest(
    $body_items_1_amount,
    $body_items_1_description,
    $body_items_1_quantity,
    $body_items_1_category
);

$body_items_2_amount = 103;
$body_items_2_description = 'description5';
$body_items_2_quantity = 217;
$body_items_2_category = 'category3';
$body_items[2] = new Models\CreateOrderItemRequest(
    $body_items_2_amount,
    $body_items_2_description,
    $body_items_2_quantity,
    $body_items_2_category
);

$body_customer_name = '{
    "name": "Tony Stark"
}';
$body_customer_email = 'email2';
$body_customer_document = 'document2';
$body_customer_type = 'type6';
$body_customer_address_street = 'street0';
$body_customer_address_number = 'number8';
$body_customer_address_zipCode = 'zip_code4';
$body_customer_address_neighborhood = 'neighborhood6';
$body_customer_address_city = 'city0';
$body_customer_address_state = 'state6';
$body_customer_address_country = 'country4';
$body_customer_address_complement = 'complement6';
$body_customer_address_metadata = ['key0' => 'metadata7', 'key1' => 'metadata6'];
$body_customer_address_line1 = 'line_16';
$body_customer_address_line2 = 'line_28';
$body_customer_address = new Models\CreateAddressRequest(
    $body_customer_address_street,
    $body_customer_address_number,
    $body_customer_address_zipCode,
    $body_customer_address_neighborhood,
    $body_customer_address_city,
    $body_customer_address_state,
    $body_customer_address_country,
    $body_customer_address_complement,
    $body_customer_address_metadata,
    $body_customer_address_line1,
    $body_customer_address_line2
);
$body_customer_metadata = ['key0' => 'metadata9', 'key1' => 'metadata0'];
$body_customer_phones = new Models\CreatePhonesRequest();
$body_customer_code = 'code2';
$body_customer = new Models\CreateCustomerRequest(
    $body_customer_name,
    $body_customer_email,
    $body_customer_document,
    $body_customer_type,
    $body_customer_address,
    $body_customer_metadata,
    $body_customer_phones,
    $body_customer_code
);
$body_payments = [];

$body_payments_0_paymentMethod = 'payment_method0';
$body_payments_0_privateLabel = new Models\CreatePrivateLabelPaymentRequest();
$body_payments[0] = new Models\CreatePaymentRequest(
    $body_payments_0_paymentMethod,
    $body_payments_0_privateLabel
);

$body_payments_1_paymentMethod = 'payment_method9';
$body_payments_1_privateLabel = new Models\CreatePrivateLabelPaymentRequest();
$body_payments[1] = new Models\CreatePaymentRequest(
    $body_payments_1_paymentMethod,
    $body_payments_1_privateLabel
);

$body_code = 'code4';
$body_customerId = 'customer_id4';
$body_metadata = ['key0' => 'metadata7', 'key1' => 'metadata8'];
$body_closed = true;
$body = new Models\CreateOrderRequest(
    $body_items,
    $body_customer,
    $body_payments,
    $body_code,
    $body_customerId,
    $body_metadata,
    $body_closed
);

$result = $ordersController->createOrder($body);
```


# Create Order Item

```php
function createOrderItem(
    string $orderId,
    CreateOrderItemRequest $request,
    ?string $idempotencyKey = null
): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `request` | [`CreateOrderItemRequest`](../../doc/models/create-order-item-request.md) | Body, Required | Order Item Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';
$request_amount = 242;
$request_description = 'description6';
$request_quantity = 100;
$request_category = 'category4';
$request = new Models\CreateOrderItemRequest(
    $request_amount,
    $request_description,
    $request_quantity,
    $request_category
);

$result = $ordersController->createOrderItem($orderId, $request);
```


# Get Order Item

```php
function getOrderItem(string $orderId, string $itemId): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';
$itemId = 'itemId8';

$result = $ordersController->getOrderItem($orderId, $itemId);
```


# Update Order Metadata

Updates the metadata from an order

```php
function updateOrderMetadata(
    string $orderId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The order id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the order metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'order_id6';
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\UpdateMetadataRequest(
    $request_metadata
);

$result = $ordersController->updateOrderMetadata($orderId, $request);
```


# Get Order

Gets an order

```php
function getOrder(string $orderId): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order id |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'order_id6';

$result = $ordersController->getOrder($orderId);
```

