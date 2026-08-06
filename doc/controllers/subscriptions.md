# Subscriptions

```php
$subscriptionsController = $client->getSubscriptionsController();
```

## Class Name

`SubscriptionsController`

## Methods

* [Cancel Subscription](../../doc/controllers/subscriptions.md#cancel-subscription)
* [Create an Usage](../../doc/controllers/subscriptions.md#create-an-usage)
* [Create Discount](../../doc/controllers/subscriptions.md#create-discount)
* [Create Increment](../../doc/controllers/subscriptions.md#create-increment)
* [Create Subscription](../../doc/controllers/subscriptions.md#create-subscription)
* [Create Subscription Item](../../doc/controllers/subscriptions.md#create-subscription-item)
* [Create Usage](../../doc/controllers/subscriptions.md#create-usage)
* [Delete Discount](../../doc/controllers/subscriptions.md#delete-discount)
* [Delete Increment](../../doc/controllers/subscriptions.md#delete-increment)
* [Delete Subscription Item](../../doc/controllers/subscriptions.md#delete-subscription-item)
* [Delete Usage](../../doc/controllers/subscriptions.md#delete-usage)
* [Get Discount by Id](../../doc/controllers/subscriptions.md#get-discount-by-id)
* [Get Discounts](../../doc/controllers/subscriptions.md#get-discounts)
* [Get Increment by Id](../../doc/controllers/subscriptions.md#get-increment-by-id)
* [Get Increments](../../doc/controllers/subscriptions.md#get-increments)
* [Get Subscription](../../doc/controllers/subscriptions.md#get-subscription)
* [Get Subscription Cycle by Id](../../doc/controllers/subscriptions.md#get-subscription-cycle-by-id)
* [Get Subscription Cycles](../../doc/controllers/subscriptions.md#get-subscription-cycles)
* [Get Subscription Item](../../doc/controllers/subscriptions.md#get-subscription-item)
* [Get Subscription Items](../../doc/controllers/subscriptions.md#get-subscription-items)
* [Get Subscriptions](../../doc/controllers/subscriptions.md#get-subscriptions)
* [Get Usage Report](../../doc/controllers/subscriptions.md#get-usage-report)
* [Get Usages](../../doc/controllers/subscriptions.md#get-usages)
* [Renew Subscription](../../doc/controllers/subscriptions.md#renew-subscription)
* [Update Current Cycle Status](../../doc/controllers/subscriptions.md#update-current-cycle-status)
* [Update Latest Period End At](../../doc/controllers/subscriptions.md#update-latest-period-end-at)
* [Update Split Subscription](../../doc/controllers/subscriptions.md#update-split-subscription)
* [Update Subscription Affiliation Id](../../doc/controllers/subscriptions.md#update-subscription-affiliation-id)
* [Update Subscription Billing Date](../../doc/controllers/subscriptions.md#update-subscription-billing-date)
* [Update Subscription Card](../../doc/controllers/subscriptions.md#update-subscription-card)
* [Update Subscription Due Days](../../doc/controllers/subscriptions.md#update-subscription-due-days)
* [Update Subscription Item](../../doc/controllers/subscriptions.md#update-subscription-item)
* [Update Subscription Metadata](../../doc/controllers/subscriptions.md#update-subscription-metadata)
* [Update Subscription Minium Price](../../doc/controllers/subscriptions.md#update-subscription-minium-price)
* [Update Subscription Payment Method](../../doc/controllers/subscriptions.md#update-subscription-payment-method)
* [Update Subscription Start At](../../doc/controllers/subscriptions.md#update-subscription-start-at)


# Cancel Subscription

Cancels a subscription

```php
function cancelSubscription(
    string $subscriptionId,
    ?CreateCancelSubscriptionRequest $request = null,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`?CreateCancelSubscriptionRequest`](../../doc/models/create-cancel-subscription-request.md) | Body, Optional | Request for cancelling a subscription |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = CreateCancelSubscriptionRequestBuilder::init(
    true
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->cancelSubscription(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create an Usage

Create Usage

```php
function createAnUsage(string $subscriptionId, string $itemId, ?string $idempotencyKey = null): GetUsageResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `itemId` | `string` | Template, Required | Item id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetUsageResponse`](../../doc/models/get-usage-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$itemId = 'item_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->createAnUsage(
        $subscriptionId,
        $itemId
    );
    echo 'GetUsageResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Discount

Creates a discount

```php
function createDiscount(
    string $subscriptionId,
    CreateDiscountRequest $request,
    ?string $idempotencyKey = null
): GetDiscountResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`CreateDiscountRequest`](../../doc/models/create-discount-request.md) | Body, Required | Request for creating a discount |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetDiscountResponse`](../../doc/models/get-discount-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = CreateDiscountRequestBuilder::init(
    185.28,
    'discount_type4',
    'item_id6'
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->createDiscount(
        $subscriptionId,
        $request
    );
    echo 'GetDiscountResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Increment

Creates a increment

```php
function createIncrement(
    string $subscriptionId,
    CreateIncrementRequest $request,
    ?string $idempotencyKey = null
): GetIncrementResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`CreateIncrementRequest`](../../doc/models/create-increment-request.md) | Body, Required | Request for creating a increment |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetIncrementResponse`](../../doc/models/get-increment-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = CreateIncrementRequestBuilder::init(
    185.28,
    'increment_type8',
    'item_id6'
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->createIncrement(
        $subscriptionId,
        $request
    );
    echo 'GetIncrementResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Subscription

Creates a new subscription

```php
function createSubscription(
    CreateSubscriptionRequest $body,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateSubscriptionRequest`](../../doc/models/create-subscription-request.md) | Body, Required | Request for creating a subscription |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$body = CreateSubscriptionRequestBuilder::init(
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
    CreateCardRequestBuilder::init()
        ->type('credit')
        ->build(),
    '',
    '',
    '',
    '',
    '',
    '',
    '',
    0,
    null,
    [
        CreateSubscriptionItemRequestBuilder::init(
            '',
            null,
            '',
            '',
            [
                null
            ],
            ''
        )->build()
    ],
    null,
    [
        null
    ],
    [],
    [
        null
    ]
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->createSubscription($body);
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Subscription Item

Creates a new Subscription item

```php
function createSubscriptionItem(
    string $subscriptionId,
    CreateSubscriptionItemRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`CreateSubscriptionItemRequest`](../../doc/models/create-subscription-item-request.md) | Body, Required | Request for creating a subscription item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = CreateSubscriptionItemRequestBuilder::init(
    '',
    null,
    '',
    '',
    [
        null
    ],
    ''
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->createSubscriptionItem(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Usage

Creates a usage

```php
function createUsage(
    string $subscriptionId,
    string $itemId,
    CreateUsageRequest $body,
    ?string $idempotencyKey = null
): GetUsageResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `itemId` | `string` | Template, Required | Item id |
| `body` | [`CreateUsageRequest`](../../doc/models/create-usage-request.md) | Body, Required | Request for creating a usage |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetUsageResponse`](../../doc/models/get-usage-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$itemId = 'item_id0';

$body = CreateUsageRequestBuilder::init(
    156,
    'description4',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->createUsage(
        $subscriptionId,
        $itemId,
        $body
    );
    echo 'GetUsageResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Discount

Deletes a discount

```php
function deleteDiscount(
    string $subscriptionId,
    string $discountId,
    ?string $idempotencyKey = null
): GetDiscountResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `discountId` | `string` | Template, Required | Discount Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetDiscountResponse`](../../doc/models/get-discount-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$discountId = 'discount_id8';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->deleteDiscount(
        $subscriptionId,
        $discountId
    );
    echo 'GetDiscountResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Increment

Deletes a increment

```php
function deleteIncrement(
    string $subscriptionId,
    string $incrementId,
    ?string $idempotencyKey = null
): GetIncrementResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `incrementId` | `string` | Template, Required | Increment id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetIncrementResponse`](../../doc/models/get-increment-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$incrementId = 'increment_id8';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->deleteIncrement(
        $subscriptionId,
        $incrementId
    );
    echo 'GetIncrementResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Subscription Item

Deletes a subscription item

```php
function deleteSubscriptionItem(
    string $subscriptionId,
    string $subscriptionItemId,
    ?string $idempotencyKey = null
): GetSubscriptionItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `subscriptionItemId` | `string` | Template, Required | Subscription item id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$subscriptionItemId = 'subscription_item_id4';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->deleteSubscriptionItem(
        $subscriptionId,
        $subscriptionItemId
    );
    echo 'GetSubscriptionItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Usage

Deletes a usage

```php
function deleteUsage(
    string $subscriptionId,
    string $itemId,
    string $usageId,
    ?string $idempotencyKey = null
): GetUsageResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `itemId` | `string` | Template, Required | The subscription item id |
| `usageId` | `string` | Template, Required | The usage id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetUsageResponse`](../../doc/models/get-usage-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$itemId = 'item_id0';

$usageId = 'usage_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->deleteUsage(
        $subscriptionId,
        $itemId,
        $usageId
    );
    echo 'GetUsageResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Discount by Id

```php
function getDiscountById(string $subscriptionId, string $discountId): GetDiscountResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `discountId` | `string` | Template, Required | - |

## Response Type

**200**

[`GetDiscountResponse`](../../doc/models/get-discount-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$discountId = 'discountId0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getDiscountById(
        $subscriptionId,
        $discountId
    );
    echo 'GetDiscountResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Discounts

```php
function getDiscounts(string $subscriptionId, int $page, int $size): ListDiscountsResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `page` | `int` | Query, Required | Page number |
| `size` | `int` | Query, Required | Page size |

## Response Type

**200**

[`ListDiscountsResponse`](../../doc/models/list-discounts-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$page = 30;

$size = 18;

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getDiscounts(
        $subscriptionId,
        $page,
        $size
    );
    echo 'ListDiscountsResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Increment by Id

```php
function getIncrementById(string $subscriptionId, string $incrementId): GetIncrementResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription Id |
| `incrementId` | `string` | Template, Required | The increment Id |

## Response Type

**200**

[`GetIncrementResponse`](../../doc/models/get-increment-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$incrementId = 'increment_id8';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getIncrementById(
        $subscriptionId,
        $incrementId
    );
    echo 'GetIncrementResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Increments

```php
function getIncrements(string $subscriptionId, ?int $page = null, ?int $size = null): ListIncrementsResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

**200**

[`ListIncrementsResponse`](../../doc/models/list-increments-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getIncrements($subscriptionId);
    echo 'ListIncrementsResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Subscription

Gets a subscription

```php
function getSubscription(string $subscriptionId): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getSubscription($subscriptionId);
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Subscription Cycle by Id

```php
function getSubscriptionCycleById(string $subscriptionId, string $cycleId): GetPeriodResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `cycleId` | `string` | Template, Required | - |

## Response Type

**200**

[`GetPeriodResponse`](../../doc/models/get-period-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$cycleId = 'cycleId0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getSubscriptionCycleById(
        $subscriptionId,
        $cycleId
    );
    echo 'GetPeriodResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Subscription Cycles

```php
function getSubscriptionCycles(string $subscriptionId, string $page, string $size): ListCyclesResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `page` | `string` | Query, Required | Page number |
| `size` | `string` | Query, Required | Page size |

## Response Type

**200**

[`ListCyclesResponse`](../../doc/models/list-cycles-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$page = 'page8';

$size = 'size0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getSubscriptionCycles(
        $subscriptionId,
        $page,
        $size
    );
    echo 'ListCyclesResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Subscription Item

Get Subscription Item

```php
function getSubscriptionItem(string $subscriptionId, string $itemId): GetSubscriptionItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `itemId` | `string` | Template, Required | Item id |

## Response Type

**200**

[`GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$itemId = 'item_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getSubscriptionItem(
        $subscriptionId,
        $itemId
    );
    echo 'GetSubscriptionItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Subscription Items

Get Subscription Items

```php
function getSubscriptionItems(
    string $subscriptionId,
    ?int $page = null,
    ?int $size = null,
    ?string $name = null,
    ?string $code = null,
    ?string $status = null,
    ?string $description = null,
    ?string $createdSince = null,
    ?string $createdUntil = null
): ListSubscriptionItemsResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `name` | `?string` | Query, Optional | The item name |
| `code` | `?string` | Query, Optional | Identification code in the client system |
| `status` | `?string` | Query, Optional | The item statis |
| `description` | `?string` | Query, Optional | The item description |
| `createdSince` | `?string` | Query, Optional | Filter for item's creation date start range |
| `createdUntil` | `?string` | Query, Optional | Filter for item's creation date end range |

## Response Type

**200**

[`ListSubscriptionItemsResponse`](../../doc/models/list-subscription-items-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getSubscriptionItems($subscriptionId);
    echo 'ListSubscriptionItemsResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Subscriptions

Gets all subscriptions

```php
function getSubscriptions(
    ?int $page = null,
    ?int $size = null,
    ?string $code = null,
    ?string $billingType = null,
    ?string $customerId = null,
    ?string $planId = null,
    ?string $cardId = null,
    ?string $status = null,
    ?\DateTime $nextBillingSince = null,
    ?\DateTime $nextBillingUntil = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): ListSubscriptionsResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Filter for subscription's code |
| `billingType` | `?string` | Query, Optional | Filter for subscription's billing type |
| `customerId` | `?string` | Query, Optional | Filter for subscription's customer id |
| `planId` | `?string` | Query, Optional | Filter for subscription's plan id |
| `cardId` | `?string` | Query, Optional | Filter for subscription's card id |
| `status` | `?string` | Query, Optional | Filter for subscription's status |
| `nextBillingSince` | `?DateTime` | Query, Optional | Filter for subscription's next billing date start range |
| `nextBillingUntil` | `?DateTime` | Query, Optional | Filter for subscription's next billing date end range |
| `createdSince` | `?DateTime` | Query, Optional | Filter for subscription's creation date start range |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for subscriptions creation date end range |

## Response Type

**200**

[`ListSubscriptionsResponse`](../../doc/models/list-subscriptions-response.md)

## Example Usage

```php
$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getSubscriptions();
    echo 'ListSubscriptionsResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Usage Report

```php
function getUsageReport(string $subscriptionId, string $periodId): GetUsageReportResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription Id |
| `periodId` | `string` | Template, Required | The period Id |

## Response Type

**200**

[`GetUsageReportResponse`](../../doc/models/get-usage-report-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$periodId = 'period_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getUsageReport(
        $subscriptionId,
        $periodId
    );
    echo 'GetUsageReportResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Usages

Lists all usages from a subscription item

```php
function getUsages(
    string $subscriptionId,
    string $itemId,
    ?int $page = null,
    ?int $size = null,
    ?string $code = null,
    ?string $group = null,
    ?\DateTime $usedSince = null,
    ?\DateTime $usedUntil = null
): ListUsagesResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `itemId` | `string` | Template, Required | The subscription item id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Identification code in the client system |
| `group` | `?string` | Query, Optional | Identification group in the client system |
| `usedSince` | `?DateTime` | Query, Optional | - |
| `usedUntil` | `?DateTime` | Query, Optional | - |

## Response Type

**200**

[`ListUsagesResponse`](../../doc/models/list-usages-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$itemId = 'item_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->getUsages(
        $subscriptionId,
        $itemId
    );
    echo 'ListUsagesResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Renew Subscription

```php
function renewSubscription(string $subscriptionId, ?string $idempotencyKey = null): GetPeriodResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | - |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPeriodResponse`](../../doc/models/get-period-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->renewSubscription($subscriptionId);
    echo 'GetPeriodResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Current Cycle Status

```php
function updateCurrentCycleStatus(
    string $subscriptionId,
    UpdateCurrentCycleStatusRequest $request,
    ?string $idempotencyKey = null
): void
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `request` | [`UpdateCurrentCycleStatusRequest`](../../doc/models/update-current-cycle-status-request.md) | Body, Required | Request for updating the end date of the subscription current status |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

`void`

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateCurrentCycleStatusRequestBuilder::init(
    'status8'
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $subscriptionsController->updateCurrentCycleStatus(
        $subscriptionId,
        $request
    );
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Latest Period End At

```php
function updateLatestPeriodEndAt(
    string $subscriptionId,
    UpdateCurrentCycleEndDateRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | - |
| `request` | [`UpdateCurrentCycleEndDateRequest`](../../doc/models/update-current-cycle-end-date-request.md) | Body, Required | Request for updating the end date of the current signature cycle |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateCurrentCycleEndDateRequestBuilder::init()->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateLatestPeriodEndAt(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Split Subscription

```php
function updateSplitSubscription(string $id, UpdateSubscriptionSplitRequest $request): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Subscription's id |
| `request` | [`UpdateSubscriptionSplitRequest`](../../doc/models/update-subscription-split-request.md) | Body, Required | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$id = 'id0';

$request = UpdateSubscriptionSplitRequestBuilder::init(
    false,
    [
        null
    ]
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSplitSubscription(
        $id,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Affiliation Id

```php
function updateSubscriptionAffiliationId(
    string $subscriptionId,
    UpdateSubscriptionAffiliationIdRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | - |
| `request` | [`UpdateSubscriptionAffiliationIdRequest`](../../doc/models/update-subscription-affiliation-id-request.md) | Body, Required | Request for updating a subscription affiliation id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateSubscriptionAffiliationIdRequestBuilder::init(
    'gateway_affiliation_id2'
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionAffiliationId(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Billing Date

Updates the billing date from a subscription

```php
function updateSubscriptionBillingDate(
    string $subscriptionId,
    UpdateSubscriptionBillingDateRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `request` | [`UpdateSubscriptionBillingDateRequest`](../../doc/models/update-subscription-billing-date-request.md) | Body, Required | Request for updating the subscription billing date |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateSubscriptionBillingDateRequestBuilder::init(
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionBillingDate(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Card

Updates the credit card from a subscription

```php
function updateSubscriptionCard(
    string $subscriptionId,
    UpdateSubscriptionCardRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`UpdateSubscriptionCardRequest`](../../doc/models/update-subscription-card-request.md) | Body, Required | Request for updating a card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateSubscriptionCardRequestBuilder::init(
    CreateCardRequestBuilder::init()
        ->type('credit')
        ->build(),
    ''
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionCard(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Due Days

Updates the boleto due days from a subscription

```php
function updateSubscriptionDueDays(
    string $subscriptionId,
    UpdateSubscriptionDueDaysRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `request` | [`UpdateSubscriptionDueDaysRequest`](../../doc/models/update-subscription-due-days-request.md) | Body, Required | - |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateSubscriptionDueDaysRequestBuilder::init(
    226
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionDueDays(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Item

Updates a subscription item

```php
function updateSubscriptionItem(
    string $subscriptionId,
    string $itemId,
    UpdateSubscriptionItemRequest $body,
    ?string $idempotencyKey = null
): GetSubscriptionItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `itemId` | `string` | Template, Required | Item id |
| `body` | [`UpdateSubscriptionItemRequest`](../../doc/models/update-subscription-item-request.md) | Body, Required | Request for updating a subscription item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$itemId = 'item_id0';

$body = UpdateSubscriptionItemRequestBuilder::init(
    '',
    '',
    UpdatePricingSchemeRequestBuilder::init(
        '',
        [
            null
        ]
    )->build(),
    ''
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionItem(
        $subscriptionId,
        $itemId,
        $body
    );
    echo 'GetSubscriptionItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Metadata

Updates the metadata from a subscription

```php
function updateSubscriptionMetadata(
    string $subscriptionId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the subscrption metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionMetadata(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Minium Price

Atualização do valor mínimo da assinatura

```php
function updateSubscriptionMiniumPrice(
    string $subscriptionId,
    UpdateSubscriptionMinimumPriceRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `request` | [`UpdateSubscriptionMinimumPriceRequest`](../../doc/models/update-subscription-minimum-price-request.md) | Body, Required | Request da requisição com o valor mínimo que será configurado |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateSubscriptionMinimumPriceRequestBuilder::init()->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionMiniumPrice(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Payment Method

Updates the payment method from a subscription

```php
function updateSubscriptionPaymentMethod(
    string $subscriptionId,
    UpdateSubscriptionPaymentMethodRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`UpdateSubscriptionPaymentMethodRequest`](../../doc/models/update-subscription-payment-method-request.md) | Body, Required | Request for updating the paymentmethod from a subscription |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateSubscriptionPaymentMethodRequestBuilder::init(
    '',
    '',
    CreateCardRequestBuilder::init()
        ->type('credit')
        ->build()
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionPaymentMethod(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Subscription Start At

Updates the start at date from a subscription

```php
function updateSubscriptionStartAt(
    string $subscriptionId,
    UpdateSubscriptionStartAtRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `request` | [`UpdateSubscriptionStartAtRequest`](../../doc/models/update-subscription-start-at-request.md) | Body, Required | Request for updating the subscription start date |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$request = UpdateSubscriptionStartAtRequestBuilder::init(
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();

$subscriptionsController = $client->getSubscriptionsController();

try {
    $result = $subscriptionsController->updateSubscriptionStartAt(
        $subscriptionId,
        $request
    );
    echo 'GetSubscriptionResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

