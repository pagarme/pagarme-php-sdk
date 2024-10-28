# Plans

```php
$plansController = $client->getPlansController();
```

## Class Name

`PlansController`

## Methods

* [Get Plan](../../doc/controllers/plans.md#get-plan)
* [Delete Plan Item](../../doc/controllers/plans.md#delete-plan-item)
* [Update Plan Metadata](../../doc/controllers/plans.md#update-plan-metadata)
* [Create Plan](../../doc/controllers/plans.md#create-plan)
* [Update Plan](../../doc/controllers/plans.md#update-plan)
* [Delete Plan](../../doc/controllers/plans.md#delete-plan)
* [Get Plans](../../doc/controllers/plans.md#get-plans)
* [Update Plan Item](../../doc/controllers/plans.md#update-plan-item)
* [Create Plan Item](../../doc/controllers/plans.md#create-plan-item)
* [Get Plan Item](../../doc/controllers/plans.md#get-plan-item)


# Get Plan

Gets a plan

```php
function getPlan(string $planId): GetPlanResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |

## Response Type

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$result = $plansController->getPlan($planId);
```


# Delete Plan Item

Removes an item from a plan

```php
function deletePlanItem(string $planId, string $planItemId, ?string $idempotencyKey = null): GetPlanItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `planItemId` | `string` | Template, Required | Plan item id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$planItemId = 'plan_item_id0';

$result = $plansController->deletePlanItem(
    $planId,
    $planItemId
);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | The plan id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the plan metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$result = $plansController->updatePlanMetadata(
    $planId,
    $request
);
```


# Create Plan

Creates a new plan

```php
function createPlan(CreatePlanRequest $body, ?string $idempotencyKey = null): GetPlanResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreatePlanRequest`](../../doc/models/create-plan-request.md) | Body, Required | Request for creating a plan |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$body = CreatePlanRequestBuilder::init(
    'name6',
    'description4',
    'statement_descriptor6',
    [
        CreatePlanItemRequestBuilder::init(
            'name8',
            CreatePricingSchemeRequestBuilder::init(
                'scheme_type8'
            )->build(),
            'id8',
            'description2'
        )->build()
    ],
    false,
    [
        'payment_methods9'
    ],
    [
        207
    ],
    'currency6',
    'interval6',
    170,
    [
        201,
        200
    ],
    'billing_type0',
    CreatePricingSchemeRequestBuilder::init(
        'scheme_type8'
    )->build(),
    [
        'key0' => 'metadata7',
        'key1' => 'metadata8'
    ]
)->build();

$result = $plansController->createPlan($body);
```


# Update Plan

Updates a plan

```php
function updatePlan(string $planId, UpdatePlanRequest $request, ?string $idempotencyKey = null): GetPlanResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `request` | [`UpdatePlanRequest`](../../doc/models/update-plan-request.md) | Body, Required | Request for updating a plan |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

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

$result = $plansController->updatePlan(
    $planId,
    $request
);
```


# Delete Plan

Deletes a plan

```php
function deletePlan(string $planId, ?string $idempotencyKey = null): GetPlanResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetPlanResponse`](../../doc/models/get-plan-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$result = $plansController->deletePlan($planId);
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

[`ListPlansResponse`](../../doc/models/list-plans-response.md)

## Example Usage

```php
$result = $plansController->getPlans();
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `planItemId` | `string` | Template, Required | Plan item id |
| `body` | [`UpdatePlanItemRequest`](../../doc/models/update-plan-item-request.md) | Body, Required | Request for updating the plan item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$planItemId = 'plan_item_id0';

$body = UpdatePlanItemRequestBuilder::init(
    'name6',
    'description4',
    'status2',
    UpdatePricingSchemeRequestBuilder::init(
        'scheme_type8',
        [
            UpdatePriceBracketRequestBuilder::init(
                144,
                174
            )->build()
        ]
    )->build()
)->build();

$result = $plansController->updatePlanItem(
    $planId,
    $planItemId,
    $body
);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `request` | [`CreatePlanItemRequest`](../../doc/models/create-plan-item-request.md) | Body, Required | Request for creating a plan item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$request = CreatePlanItemRequestBuilder::init(
    'name6',
    CreatePricingSchemeRequestBuilder::init(
        'scheme_type8'
    )->build(),
    'id6',
    'description6'
)->build();

$result = $plansController->createPlanItem(
    $planId,
    $request
);
```


# Get Plan Item

Gets a plan item

```php
function getPlanItem(string $planId, string $planItemId): GetPlanItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `planId` | `string` | Template, Required | Plan id |
| `planItemId` | `string` | Template, Required | Plan item id |

## Response Type

[`GetPlanItemResponse`](../../doc/models/get-plan-item-response.md)

## Example Usage

```php
$planId = 'plan_id8';

$planItemId = 'plan_item_id0';

$result = $plansController->getPlanItem(
    $planId,
    $planItemId
);
```

