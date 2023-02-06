# Plans

```php
$plansController = $client->getPlansController();
```

## Class Name

`PlansController`

## Methods

* [Get Plan](../../doc/controllers/plans.md#get-plan)
* [Update Plan](../../doc/controllers/plans.md#update-plan)
* [Update Plan Metadata](../../doc/controllers/plans.md#update-plan-metadata)
* [Delete Plan Item](../../doc/controllers/plans.md#delete-plan-item)
* [Get Plans](../../doc/controllers/plans.md#get-plans)
* [Get Plan Item](../../doc/controllers/plans.md#get-plan-item)
* [Delete Plan](../../doc/controllers/plans.md#delete-plan)
* [Update Plan Item](../../doc/controllers/plans.md#update-plan-item)
* [Create Plan Item](../../doc/controllers/plans.md#create-plan-item)
* [Create Plan](../../doc/controllers/plans.md#create-plan)


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
$request_name = 'name6';
$request_description = 'description6';
$request_installments = [151, 152];
$request_statementDescriptor = 'statement_descriptor6';
$request_currency = 'currency6';
$request_interval = 'interval4';
$request_intervalCount = 114;
$request_paymentMethods = ['payment_methods1', 'payment_methods0', 'payment_methods9'];
$request_billingType = 'billing_type0';
$request_status = 'status8';
$request_shippable = false;
$request_billingDays = [115];
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\UpdatePlanRequest(
    $request_name,
    $request_description,
    $request_installments,
    $request_statementDescriptor,
    $request_currency,
    $request_interval,
    $request_intervalCount,
    $request_paymentMethods,
    $request_billingType,
    $request_status,
    $request_shippable,
    $request_billingDays,
    $request_metadata
);

$result = $plansController->updatePlan($planId, $request);
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
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\UpdateMetadataRequest(
    $request_metadata
);

$result = $plansController->updatePlanMetadata($planId, $request);
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

$result = $plansController->deletePlanItem($planId, $planItemId);
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
| `createdSince` | `?\DateTime` | Query, Optional | Filter for plan's creation date start range |
| `createdUntil` | `?\DateTime` | Query, Optional | Filter for plan's creation date end range |

## Response Type

[`ListPlansResponse`](../../doc/models/list-plans-response.md)

## Example Usage

```php
$result = $plansController->getPlans();
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

$result = $plansController->getPlanItem($planId, $planItemId);
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
$body_name = 'name6';
$body_description = 'description4';
$body_status = 'status2';
$body_pricingScheme_schemeType = 'scheme_type2';
$body_pricingScheme_priceBrackets = [];

$body_pricingScheme_priceBrackets_0_startQuantity = 31;
$body_pricingScheme_priceBrackets_0_price = 225;
$body_pricingScheme_priceBrackets[0] = new Models\UpdatePriceBracketRequest(
    $body_pricingScheme_priceBrackets_0_startQuantity,
    $body_pricingScheme_priceBrackets_0_price
);

$body_pricingScheme_priceBrackets_1_startQuantity = 32;
$body_pricingScheme_priceBrackets_1_price = 226;
$body_pricingScheme_priceBrackets[1] = new Models\UpdatePriceBracketRequest(
    $body_pricingScheme_priceBrackets_1_startQuantity,
    $body_pricingScheme_priceBrackets_1_price
);

$body_pricingScheme = new Models\UpdatePricingSchemeRequest(
    $body_pricingScheme_schemeType,
    $body_pricingScheme_priceBrackets
);
$body = new Models\UpdatePlanItemRequest(
    $body_name,
    $body_description,
    $body_status,
    $body_pricingScheme
);

$result = $plansController->updatePlanItem($planId, $planItemId, $body);
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
$request_name = 'name6';
$request_pricingScheme_schemeType = 'scheme_type2';
$request_pricingScheme = new Models\CreatePricingSchemeRequest(
    $request_pricingScheme_schemeType
);
$request_id = 'id6';
$request_description = 'description6';
$request = new Models\CreatePlanItemRequest(
    $request_name,
    $request_pricingScheme,
    $request_id,
    $request_description
);

$result = $plansController->createPlanItem($planId, $request);
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
$body_name = 'name6';
$body_description = 'description4';
$body_statementDescriptor = 'statement_descriptor6';
$body_items = [];

$body_items_0_name = 'name3';
$body_items_0_pricingScheme_schemeType = 'scheme_type5';
$body_items_0_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_items_0_pricingScheme_schemeType
);
$body_items_0_id = 'id3';
$body_items_0_description = 'description3';
$body_items[0] = new Models\CreatePlanItemRequest(
    $body_items_0_name,
    $body_items_0_pricingScheme,
    $body_items_0_id,
    $body_items_0_description
);

$body_items_1_name = 'name4';
$body_items_1_pricingScheme_schemeType = 'scheme_type4';
$body_items_1_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_items_1_pricingScheme_schemeType
);
$body_items_1_id = 'id4';
$body_items_1_description = 'description4';
$body_items[1] = new Models\CreatePlanItemRequest(
    $body_items_1_name,
    $body_items_1_pricingScheme,
    $body_items_1_id,
    $body_items_1_description
);

$body_items_2_name = 'name5';
$body_items_2_pricingScheme_schemeType = 'scheme_type3';
$body_items_2_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_items_2_pricingScheme_schemeType
);
$body_items_2_id = 'id5';
$body_items_2_description = 'description5';
$body_items[2] = new Models\CreatePlanItemRequest(
    $body_items_2_name,
    $body_items_2_pricingScheme,
    $body_items_2_id,
    $body_items_2_description
);

$body_shippable = false;
$body_paymentMethods = ['payment_methods9'];
$body_installments = [207];
$body_currency = 'currency6';
$body_interval = 'interval6';
$body_intervalCount = 170;
$body_billingDays = [201, 200];
$body_billingType = 'billing_type0';
$body_pricingScheme_schemeType = 'scheme_type2';
$body_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_pricingScheme_schemeType
);
$body_metadata = ['key0' => 'metadata7', 'key1' => 'metadata8'];
$body = new Models\CreatePlanRequest(
    $body_name,
    $body_description,
    $body_statementDescriptor,
    $body_items,
    $body_shippable,
    $body_paymentMethods,
    $body_installments,
    $body_currency,
    $body_interval,
    $body_intervalCount,
    $body_billingDays,
    $body_billingType,
    $body_pricingScheme,
    $body_metadata
);

$result = $plansController->createPlan($body);
```

