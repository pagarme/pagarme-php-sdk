# Orders

```php
$ordersController = $client->getOrdersController();
```

## Class Name

`OrdersController`

## Methods

* [Close Order](../../doc/controllers/orders.md#close-order)
* [Create Order](../../doc/controllers/orders.md#create-order)
* [Create Order Item](../../doc/controllers/orders.md#create-order-item)
* [Delete All Order Items](../../doc/controllers/orders.md#delete-all-order-items)
* [Delete Order Item](../../doc/controllers/orders.md#delete-order-item)
* [Get Order](../../doc/controllers/orders.md#get-order)
* [Get Order Item](../../doc/controllers/orders.md#get-order-item)
* [Get Orders](../../doc/controllers/orders.md#get-orders)
* [Update Order Item](../../doc/controllers/orders.md#update-order-item)
* [Update Order Metadata](../../doc/controllers/orders.md#update-order-metadata)


# Close Order

```php
function closeOrder(
    string $id,
    UpdateOrderStatusRequest $request,
    ?string $idempotencyKey = null
): GetOrderResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Order Id |
| `request` | [`UpdateOrderStatusRequest`](../../doc/models/update-order-status-request.md) | Body, Required | Update Order Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$id = 'id0';

$request = UpdateOrderStatusRequestBuilder::init(
    'status8'
)->build();

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->closeOrder(
        $id,
        $request
    );
    echo 'GetOrderResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Order

Creates a new Order

```php
function createOrder(CreateOrderRequest $body, ?string $idempotencyKey = null): GetOrderResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateOrderRequest`](../../doc/models/create-order-request.md) | Body, Required | Request for creating an order |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$body = CreateOrderRequestBuilder::init(
    [
        null
    ],
    CreateCustomerRequestBuilder::init(
        'Tony Stark',
        '',
        '',
        '',
        null,
        [],
        null,
        ''
    )->build(),
    [
        null
    ],
    '',
    true
)->build();

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->createOrder($body);
    echo 'GetOrderResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Order Item

```php
function createOrderItem(
    string $orderId,
    CreateOrderItemRequest $request,
    ?string $idempotencyKey = null
): GetOrderItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `request` | [`CreateOrderItemRequest`](../../doc/models/create-order-item-request.md) | Body, Required | Order Item Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$request = CreateOrderItemRequestBuilder::init(
    242,
    'description6',
    100,
    'category4'
)->build();

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->createOrderItem(
        $orderId,
        $request
    );
    echo 'GetOrderItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete All Order Items

```php
function deleteAllOrderItems(string $orderId, ?string $idempotencyKey = null): GetOrderResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->deleteAllOrderItems($orderId);
    echo 'GetOrderResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Order Item

```php
function deleteOrderItem(string $orderId, string $itemId, ?string $idempotencyKey = null): GetOrderItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$itemId = 'itemId8';

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->deleteOrderItem(
        $orderId,
        $itemId
    );
    echo 'GetOrderItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Order

Gets an order

```php
function getOrder(string $orderId): GetOrderResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order id |

## Response Type

**200**

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'order_id6';

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->getOrder($orderId);
    echo 'GetOrderResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Order Item

```php
function getOrderItem(string $orderId, string $itemId): GetOrderItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |

## Response Type

**200**

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$itemId = 'itemId8';

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->getOrderItem(
        $orderId,
        $itemId
    );
    echo 'GetOrderItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Filter for order's code |
| `status` | `?string` | Query, Optional | Filter for order's status |
| `createdSince` | `?DateTime` | Query, Optional | Filter for order's creation date start range |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for order's creation date end range |
| `customerId` | `?string` | Query, Optional | Filter for order's customer id |

## Response Type

**200**

[`ListOrderResponse`](../../doc/models/list-order-response.md)

## Example Usage

```php
$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->getOrders();
    echo 'ListOrderResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |
| `request` | [`UpdateOrderItemRequest`](../../doc/models/update-order-item-request.md) | Body, Required | Item Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$itemId = 'itemId8';

$request = UpdateOrderItemRequestBuilder::init(
    242,
    'description6',
    100,
    'category4'
)->build();

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->updateOrderItem(
        $orderId,
        $itemId,
        $request
    );
    echo 'GetOrderItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The order id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the order metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'order_id6';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$ordersController = $client->getOrdersController();

try {
    $result = $ordersController->updateOrderMetadata(
        $orderId,
        $request
    );
    echo 'GetOrderResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

