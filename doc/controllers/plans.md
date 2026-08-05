# Plans

```php
$plansController = $client->getPlansController();
```

## Class Name

`PlansController`

## Methods

* [Create Plan](../../doc/controllers/plans.md#create-plan)
* [Create Plan Item](../../doc/controllers/plans.md#create-plan-item)
* [Delete Plan](../../doc/controllers/plans.md#delete-plan)
* [Delete Plan Item](../../doc/controllers/plans.md#delete-plan-item)
* [Get Plan](../../doc/controllers/plans.md#get-plan)
* [Get Plan Item](../../doc/controllers/plans.md#get-plan-item)
* [Get Plans](../../doc/controllers/plans.md#get-plans)
* [Update Plan](../../doc/controllers/plans.md#update-plan)
* [Update Plan Item](../../doc/controllers/plans.md#update-plan-item)
* [Update Plan Metadata](../../doc/controllers/plans.md#update-plan-metadata)


# Create Plan

Creates a new plan

```php
function createPlan(CreatePlanRequest $body, ?string $idempotencyKey = null): GetPlanResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreatePlanRequest`](../../doc/models/create-plan-request.md) | Body, Required | Request for creating a plan |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$body = CreatePlanRequestBuilder::init(
    '',
    '',
    '',
    [
        null
    ],
    false,
    [],
    [],
    '',
    '',
    0,
    [],
    '',
    null,
    []
)->build();

$plansController = $client->getPlansController();

try {
    $result = $plansController->createPlan($body);
    echo 'GetPlanResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Plan Item

Adds a new item to a plan

```php
function createPlanItem(
    string $planId,
    CreatePlanItemRequest $request,
    ?string $idempotencyKey = null
): GetPlanItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `request` | [`CreatePlanItemRequest`](../../doc/models/create-plan-item-request.md) | Body, Required | Request for creating a plan item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$request = CreatePlanItemRequestBuilder::init(
    'name6',
    null,
    'id6',
    'description6'
)->build();

$plansController = $client->getPlansController();

try {
    $result = $plansController->createPlanItem(
        $planId,
        $request
    );
    echo 'GetPlanItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Plan

Deletes a plan

```php
function deletePlan(string $planId, ?string $idempotencyKey = null): GetPlanResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$plansController = $client->getPlansController();

try {
    $result = $plansController->deletePlan($planId);
    echo 'GetPlanResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Plan Item

Removes an item from a plan

```php
function deletePlanItem(string $planId, string $planItemId, ?string $idempotencyKey = null): GetPlanItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `planItemId` | `string` | Template, Required | Plan item id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$planItemId = 'plan_item_id0';

$plansController = $client->getPlansController();

try {
    $result = $plansController->deletePlanItem(
        $planId,
        $planItemId
    );
    echo 'GetPlanItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Plan

Gets a plan

```php
function getPlan(string $planId): GetPlanResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |

## Response Type

**200**

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$plansController = $client->getPlansController();

try {
    $result = $plansController->getPlan($planId);
    echo 'GetPlanResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Plan Item

Gets a plan item

```php
function getPlanItem(string $planId, string $planItemId): GetPlanItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `planItemId` | `string` | Template, Required | Plan item id |

## Response Type

**200**

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$planItemId = 'plan_item_id0';

$plansController = $client->getPlansController();

try {
    $result = $plansController->getPlanItem(
        $planId,
        $planItemId
    );
    echo 'GetPlanItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Plans

Gets all plans

```php
function getPlans(
    ?int $page = null,
    ?int $size = null,
    ?string $name = null,
    ?string $status = null,
    ?string $billingType = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): ListPlansResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `name` | `?string` | Query, Optional | Filter for Plan's name |
| `status` | `?string` | Query, Optional | Filter for Plan's status |
| `billingType` | `?string` | Query, Optional | Filter for plan's billing type |
| `createdSince` | `?DateTime` | Query, Optional | Filter for plan's creation date start range |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for plan's creation date end range |

## Response Type

**200**

[`ListPlansResponse`](../../doc/models/list-plans-response.md)

## Example Usage

```php
$plansController = $client->getPlansController();

try {
    $result = $plansController->getPlans();
    echo 'ListPlansResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Plan

Updates a plan

```php
function updatePlan(string $planId, UpdatePlanRequest $request, ?string $idempotencyKey = null): GetPlanResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `request` | [`UpdatePlanRequest`](../../doc/models/update-plan-request.md) | Body, Required | Request for updating a plan |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$request = UpdatePlanRequestBuilder::init(
    'name6',
    'description6',
    [
        151,
        152
    ],
    'statement_descriptor6',
    'currency6',
    'interval4',
    114,
    [
        'payment_methods1',
        'payment_methods0',
        'payment_methods9'
    ],
    'billing_type0',
    'status8',
    false,
    [
        115
    ],
    [
        'key0' => 'metadata3'
    ]
)->build();

$plansController = $client->getPlansController();

try {
    $result = $plansController->updatePlan(
        $planId,
        $request
    );
    echo 'GetPlanResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Plan Item

Updates a plan item

```php
function updatePlanItem(
    string $planId,
    string $planItemId,
    UpdatePlanItemRequest $body,
    ?string $idempotencyKey = null
): GetPlanItemResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `planItemId` | `string` | Template, Required | Plan item id |
| `body` | [`UpdatePlanItemRequest`](../../doc/models/update-plan-item-request.md) | Body, Required | Request for updating the plan item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$planItemId = 'plan_item_id0';

$body = UpdatePlanItemRequestBuilder::init(
    '',
    '',
    '',
    UpdatePricingSchemeRequestBuilder::init(
        '',
        [
            null
        ]
    )->build()
)->build();

$plansController = $client->getPlansController();

try {
    $result = $plansController->updatePlanItem(
        $planId,
        $planItemId,
        $body
    );
    echo 'GetPlanItemResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Plan Metadata

Updates the metadata from a plan

```php
function updatePlanMetadata(
    string $planId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetPlanResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | The plan id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the plan metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$plansController = $client->getPlansController();

try {
    $result = $plansController->updatePlanMetadata(
        $planId,
        $request
    );
    echo 'GetPlanResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

