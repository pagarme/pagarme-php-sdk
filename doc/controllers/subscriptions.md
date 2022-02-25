# Subscriptions

```php
$subscriptionsController = $client->getSubscriptionsController();
```

## Class Name

`SubscriptionsController`

## Methods

* [Renew Subscription](/doc/controllers/subscriptions.md#renew-subscription)
* [Delete Discount](/doc/controllers/subscriptions.md#delete-discount)
* [Get Subscriptions](/doc/controllers/subscriptions.md#get-subscriptions)
* [Get Discount by Id](/doc/controllers/subscriptions.md#get-discount-by-id)
* [Create Subscription](/doc/controllers/subscriptions.md#create-subscription)
* [Get Increment by Id](/doc/controllers/subscriptions.md#get-increment-by-id)
* [Update Subscription Metadata](/doc/controllers/subscriptions.md#update-subscription-metadata)
* [Delete Increment](/doc/controllers/subscriptions.md#delete-increment)
* [Get Subscription](/doc/controllers/subscriptions.md#get-subscription)
* [Update Latest Period End At](/doc/controllers/subscriptions.md#update-latest-period-end-at)
* [Update Current Cycle Status](/doc/controllers/subscriptions.md#update-current-cycle-status)
* [Get Subscription Items](/doc/controllers/subscriptions.md#get-subscription-items)
* [Get Subscription Item](/doc/controllers/subscriptions.md#get-subscription-item)
* [Update Subscription Affiliation Id](/doc/controllers/subscriptions.md#update-subscription-affiliation-id)
* [Get Discounts](/doc/controllers/subscriptions.md#get-discounts)
* [Update Subscription Item](/doc/controllers/subscriptions.md#update-subscription-item)
* [Create Subscription Item](/doc/controllers/subscriptions.md#create-subscription-item)
* [Get Usages](/doc/controllers/subscriptions.md#get-usages)
* [Update Subscription Minium Price](/doc/controllers/subscriptions.md#update-subscription-minium-price)
* [Get Subscription Cycle by Id](/doc/controllers/subscriptions.md#get-subscription-cycle-by-id)
* [Create an Usage](/doc/controllers/subscriptions.md#create-an-usage)
* [Cancel Subscription](/doc/controllers/subscriptions.md#cancel-subscription)
* [Delete Subscription Item](/doc/controllers/subscriptions.md#delete-subscription-item)
* [Get Increments](/doc/controllers/subscriptions.md#get-increments)
* [Update Subscription Due Days](/doc/controllers/subscriptions.md#update-subscription-due-days)
* [Update Subscription Card](/doc/controllers/subscriptions.md#update-subscription-card)
* [Delete Usage](/doc/controllers/subscriptions.md#delete-usage)
* [Create Discount](/doc/controllers/subscriptions.md#create-discount)
* [Update Subscription Payment Method](/doc/controllers/subscriptions.md#update-subscription-payment-method)
* [Create Increment](/doc/controllers/subscriptions.md#create-increment)
* [Create Usage](/doc/controllers/subscriptions.md#create-usage)
* [Get Subscription Cycles](/doc/controllers/subscriptions.md#get-subscription-cycles)
* [Update Subscription Billing Date](/doc/controllers/subscriptions.md#update-subscription-billing-date)
* [Update Subscription Start At](/doc/controllers/subscriptions.md#update-subscription-start-at)
* [Get Usage Report](/doc/controllers/subscriptions.md#get-usage-report)
* [Update Split Subscription](/doc/controllers/subscriptions.md#update-split-subscription)


# Renew Subscription

```php
function renewSubscription(string $subscriptionId, ?string $idempotencyKey = null): GetPeriodResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | - |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetPeriodResponse`](/doc/models/get-period-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$result = $subscriptionsController->renewSubscription($subscriptionId);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `discountId` | `string` | Template, Required | Discount Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetDiscountResponse`](/doc/models/get-discount-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$discountId = 'discount_id8';

$result = $subscriptionsController->deleteDiscount($subscriptionId, $discountId);
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
| `nextBillingSince` | `?\DateTime` | Query, Optional | Filter for subscription's next billing date start range |
| `nextBillingUntil` | `?\DateTime` | Query, Optional | Filter for subscription's next billing date end range |
| `createdSince` | `?\DateTime` | Query, Optional | Filter for subscription's creation date start range |
| `createdUntil` | `?\DateTime` | Query, Optional | Filter for subscriptions creation date end range |

## Response Type

[`ListSubscriptionsResponse`](/doc/models/list-subscriptions-response.md)

## Example Usage

```php
$result = $subscriptionsController->getSubscriptions();
```


# Get Discount by Id

```php
function getDiscountById(string $subscriptionId, string $discountId): GetDiscountResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `discountId` | `string` | Template, Required | - |

## Response Type

[`GetDiscountResponse`](/doc/models/get-discount-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$discountId = 'discountId0';

$result = $subscriptionsController->getDiscountById($subscriptionId, $discountId);
```


# Create Subscription

Creates a new subscription

```php
function createSubscription(
    CreateSubscriptionRequest $body,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateSubscriptionRequest`](/doc/models/create-subscription-request.md) | Body, Required | Request for creating a subscription |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
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
$body_customer_phones = new Models\CreatePhonesRequest;
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
$body_card_number = 'number2';
$body_card_holderName = 'holder_name6';
$body_card_expMonth = 60;
$body_card_expYear = 236;
$body_card_cvv = 'cvv8';
$body_card_billingAddress_street = 'street8';
$body_card_billingAddress_number = 'number4';
$body_card_billingAddress_zipCode = 'zip_code2';
$body_card_billingAddress_neighborhood = 'neighborhood4';
$body_card_billingAddress_city = 'city2';
$body_card_billingAddress_state = 'state6';
$body_card_billingAddress_country = 'country2';
$body_card_billingAddress_complement = 'complement6';
$body_card_billingAddress_metadata = ['key0' => 'metadata5', 'key1' => 'metadata6', 'key2' => 'metadata7'];
$body_card_billingAddress_line1 = 'line_18';
$body_card_billingAddress_line2 = 'line_26';
$body_card_billingAddress = new Models\CreateAddressRequest(
    $body_card_billingAddress_street,
    $body_card_billingAddress_number,
    $body_card_billingAddress_zipCode,
    $body_card_billingAddress_neighborhood,
    $body_card_billingAddress_city,
    $body_card_billingAddress_state,
    $body_card_billingAddress_country,
    $body_card_billingAddress_complement,
    $body_card_billingAddress_metadata,
    $body_card_billingAddress_line1,
    $body_card_billingAddress_line2
);
$body_card_brand = 'brand4';
$body_card_billingAddressId = 'billing_address_id6';
$body_card_metadata = ['key0' => 'metadata3', 'key1' => 'metadata4'];
$body_card_type = 'credit';
$body_card_options_verifyCard = false;
$body_card_options = new Models\CreateCardOptionsRequest(
    $body_card_options_verifyCard
);
$body_card_privateLabel = false;
$body_card_label = 'label0';
$body_card = new Models\CreateCardRequest(
    $body_card_number,
    $body_card_holderName,
    $body_card_expMonth,
    $body_card_expYear,
    $body_card_cvv,
    $body_card_billingAddress,
    $body_card_brand,
    $body_card_billingAddressId,
    $body_card_metadata,
    $body_card_type,
    $body_card_options,
    $body_card_privateLabel,
    $body_card_label
);
$body_code = 'code4';
$body_paymentMethod = 'payment_method4';
$body_billingType = 'billing_type0';
$body_statementDescriptor = 'statement_descriptor6';
$body_description = 'description4';
$body_currency = 'currency6';
$body_interval = 'interval6';
$body_intervalCount = 170;
$body_pricingScheme_schemeType = 'scheme_type2';
$body_pricingScheme_priceBrackets = [];

$body_pricingScheme_priceBrackets_0_startQuantity = 31;
$body_pricingScheme_priceBrackets_0_price = 225;
$body_pricingScheme_priceBrackets[0] = new Models\CreatePriceBracketRequest(
    $body_pricingScheme_priceBrackets_0_startQuantity,
    $body_pricingScheme_priceBrackets_0_price
);

$body_pricingScheme_priceBrackets_1_startQuantity = 32;
$body_pricingScheme_priceBrackets_1_price = 226;
$body_pricingScheme_priceBrackets[1] = new Models\CreatePriceBracketRequest(
    $body_pricingScheme_priceBrackets_1_startQuantity,
    $body_pricingScheme_priceBrackets_1_price
);

$body_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_pricingScheme_schemeType,
    $body_pricingScheme_priceBrackets
);
$body_items = [];

$body_items_0_description = 'description3';
$body_items_0_pricingScheme_schemeType = 'scheme_type5';
$body_items_0_pricingScheme_priceBrackets = [];

$body_items_0_pricingScheme_priceBrackets_0_startQuantity = 228;
$body_items_0_pricingScheme_priceBrackets_0_price = 90;
$body_items_0_pricingScheme_priceBrackets[0] = new Models\CreatePriceBracketRequest(
    $body_items_0_pricingScheme_priceBrackets_0_startQuantity,
    $body_items_0_pricingScheme_priceBrackets_0_price
);

$body_items_0_pricingScheme_priceBrackets_1_startQuantity = 229;
$body_items_0_pricingScheme_priceBrackets_1_price = 89;
$body_items_0_pricingScheme_priceBrackets[1] = new Models\CreatePriceBracketRequest(
    $body_items_0_pricingScheme_priceBrackets_1_startQuantity,
    $body_items_0_pricingScheme_priceBrackets_1_price
);

$body_items_0_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_items_0_pricingScheme_schemeType,
    $body_items_0_pricingScheme_priceBrackets
);
$body_items_0_id = 'id3';
$body_items_0_planItemId = 'plan_item_id3';
$body_items_0_discounts = [];

$body_items_0_discounts_0_value = 65.46;
$body_items_0_discounts_0_discountType = 'discount_type2';
$body_items_0_discounts_0_itemId = 'item_id4';
$body_items_0_discounts[0] = new Models\CreateDiscountRequest(
    $body_items_0_discounts_0_value,
    $body_items_0_discounts_0_discountType,
    $body_items_0_discounts_0_itemId
);

$body_items_0_name = 'name3';
$body_items[0] = new Models\CreateSubscriptionItemRequest(
    $body_items_0_description,
    $body_items_0_pricingScheme,
    $body_items_0_id,
    $body_items_0_planItemId,
    $body_items_0_discounts,
    $body_items_0_name
);

$body_items_1_description = 'description4';
$body_items_1_pricingScheme_schemeType = 'scheme_type4';
$body_items_1_pricingScheme_priceBrackets = [];

$body_items_1_pricingScheme_priceBrackets_0_startQuantity = 227;
$body_items_1_pricingScheme_priceBrackets_0_price = 91;
$body_items_1_pricingScheme_priceBrackets[0] = new Models\CreatePriceBracketRequest(
    $body_items_1_pricingScheme_priceBrackets_0_startQuantity,
    $body_items_1_pricingScheme_priceBrackets_0_price
);

$body_items_1_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_items_1_pricingScheme_schemeType,
    $body_items_1_pricingScheme_priceBrackets
);
$body_items_1_id = 'id4';
$body_items_1_planItemId = 'plan_item_id4';
$body_items_1_discounts = [];

$body_items_1_discounts_0_value = 65.47;
$body_items_1_discounts_0_discountType = 'discount_type3';
$body_items_1_discounts_0_itemId = 'item_id5';
$body_items_1_discounts[0] = new Models\CreateDiscountRequest(
    $body_items_1_discounts_0_value,
    $body_items_1_discounts_0_discountType,
    $body_items_1_discounts_0_itemId
);

$body_items_1_discounts_1_value = 65.48;
$body_items_1_discounts_1_discountType = 'discount_type4';
$body_items_1_discounts_1_itemId = 'item_id6';
$body_items_1_discounts[1] = new Models\CreateDiscountRequest(
    $body_items_1_discounts_1_value,
    $body_items_1_discounts_1_discountType,
    $body_items_1_discounts_1_itemId
);

$body_items_1_name = 'name4';
$body_items[1] = new Models\CreateSubscriptionItemRequest(
    $body_items_1_description,
    $body_items_1_pricingScheme,
    $body_items_1_id,
    $body_items_1_planItemId,
    $body_items_1_discounts,
    $body_items_1_name
);

$body_items_2_description = 'description5';
$body_items_2_pricingScheme_schemeType = 'scheme_type3';
$body_items_2_pricingScheme_priceBrackets = [];

$body_items_2_pricingScheme_priceBrackets_0_startQuantity = 226;
$body_items_2_pricingScheme_priceBrackets_0_price = 92;
$body_items_2_pricingScheme_priceBrackets[0] = new Models\CreatePriceBracketRequest(
    $body_items_2_pricingScheme_priceBrackets_0_startQuantity,
    $body_items_2_pricingScheme_priceBrackets_0_price
);

$body_items_2_pricingScheme_priceBrackets_1_startQuantity = 227;
$body_items_2_pricingScheme_priceBrackets_1_price = 91;
$body_items_2_pricingScheme_priceBrackets[1] = new Models\CreatePriceBracketRequest(
    $body_items_2_pricingScheme_priceBrackets_1_startQuantity,
    $body_items_2_pricingScheme_priceBrackets_1_price
);

$body_items_2_pricingScheme_priceBrackets_2_startQuantity = 228;
$body_items_2_pricingScheme_priceBrackets_2_price = 90;
$body_items_2_pricingScheme_priceBrackets[2] = new Models\CreatePriceBracketRequest(
    $body_items_2_pricingScheme_priceBrackets_2_startQuantity,
    $body_items_2_pricingScheme_priceBrackets_2_price
);

$body_items_2_pricingScheme = new Models\CreatePricingSchemeRequest(
    $body_items_2_pricingScheme_schemeType,
    $body_items_2_pricingScheme_priceBrackets
);
$body_items_2_id = 'id5';
$body_items_2_planItemId = 'plan_item_id5';
$body_items_2_discounts = [];

$body_items_2_discounts_0_value = 65.48;
$body_items_2_discounts_0_discountType = 'discount_type4';
$body_items_2_discounts_0_itemId = 'item_id6';
$body_items_2_discounts[0] = new Models\CreateDiscountRequest(
    $body_items_2_discounts_0_value,
    $body_items_2_discounts_0_discountType,
    $body_items_2_discounts_0_itemId
);

$body_items_2_discounts_1_value = 65.49;
$body_items_2_discounts_1_discountType = 'discount_type5';
$body_items_2_discounts_1_itemId = 'item_id7';
$body_items_2_discounts[1] = new Models\CreateDiscountRequest(
    $body_items_2_discounts_1_value,
    $body_items_2_discounts_1_discountType,
    $body_items_2_discounts_1_itemId
);

$body_items_2_discounts_2_value = 65.5;
$body_items_2_discounts_2_discountType = 'discount_type6';
$body_items_2_discounts_2_itemId = 'item_id8';
$body_items_2_discounts[2] = new Models\CreateDiscountRequest(
    $body_items_2_discounts_2_value,
    $body_items_2_discounts_2_discountType,
    $body_items_2_discounts_2_itemId
);

$body_items_2_name = 'name5';
$body_items[2] = new Models\CreateSubscriptionItemRequest(
    $body_items_2_description,
    $body_items_2_pricingScheme,
    $body_items_2_id,
    $body_items_2_planItemId,
    $body_items_2_discounts,
    $body_items_2_name
);

$body_shipping_amount = 140;
$body_shipping_description = 'description0';
$body_shipping_recipientName = 'recipient_name8';
$body_shipping_recipientPhone = 'recipient_phone2';
$body_shipping_addressId = 'address_id0';
$body_shipping_address_street = 'street6';
$body_shipping_address_number = 'number4';
$body_shipping_address_zipCode = 'zip_code0';
$body_shipping_address_neighborhood = 'neighborhood2';
$body_shipping_address_city = 'city6';
$body_shipping_address_state = 'state2';
$body_shipping_address_country = 'country0';
$body_shipping_address_complement = 'complement2';
$body_shipping_address_metadata = ['key0' => 'metadata3', 'key1' => 'metadata2'];
$body_shipping_address_line1 = 'line_10';
$body_shipping_address_line2 = 'line_24';
$body_shipping_address = new Models\CreateAddressRequest(
    $body_shipping_address_street,
    $body_shipping_address_number,
    $body_shipping_address_zipCode,
    $body_shipping_address_neighborhood,
    $body_shipping_address_city,
    $body_shipping_address_state,
    $body_shipping_address_country,
    $body_shipping_address_complement,
    $body_shipping_address_metadata,
    $body_shipping_address_line1,
    $body_shipping_address_line2
);
$body_shipping_type = 'type0';
$body_shipping = new Models\CreateShippingRequest(
    $body_shipping_amount,
    $body_shipping_description,
    $body_shipping_recipientName,
    $body_shipping_recipientPhone,
    $body_shipping_addressId,
    $body_shipping_address,
    $body_shipping_type
);
$body_discounts = [];

$body_discounts_0_value = 95.59;
$body_discounts_0_discountType = 'discount_type5';
$body_discounts_0_itemId = 'item_id7';
$body_discounts[0] = new Models\CreateDiscountRequest(
    $body_discounts_0_value,
    $body_discounts_0_discountType,
    $body_discounts_0_itemId
);

$body_metadata = ['key0' => 'metadata7', 'key1' => 'metadata8'];
$body_setup_amount = 150;
$body_setup_description = 'description0';
$body_setup_payment_paymentMethod = 'payment_method4';
$body_setup_payment_privateLabel = new Models\CreatePrivateLabelPaymentRequest;
$body_setup_payment = new Models\CreatePaymentRequest(
    $body_setup_payment_paymentMethod,
    $body_setup_payment_privateLabel
);
$body_setup = new Models\CreateSetupRequest(
    $body_setup_amount,
    $body_setup_description,
    $body_setup_payment
);
$body_increments = [];

$body_increments_0_value = 38.83;
$body_increments_0_incrementType = 'increment_type3';
$body_increments_0_itemId = 'item_id9';
$body_increments[0] = new Models\CreateIncrementRequest(
    $body_increments_0_value,
    $body_increments_0_incrementType,
    $body_increments_0_itemId
);

$body_increments_1_value = 38.84;
$body_increments_1_incrementType = 'increment_type4';
$body_increments_1_itemId = 'item_id8';
$body_increments[1] = new Models\CreateIncrementRequest(
    $body_increments_1_value,
    $body_increments_1_incrementType,
    $body_increments_1_itemId
);

$body_increments_2_value = 38.85;
$body_increments_2_incrementType = 'increment_type5';
$body_increments_2_itemId = 'item_id7';
$body_increments[2] = new Models\CreateIncrementRequest(
    $body_increments_2_value,
    $body_increments_2_incrementType,
    $body_increments_2_itemId
);

$body = new Models\CreateSubscriptionRequest(
    $body_customer,
    $body_card,
    $body_code,
    $body_paymentMethod,
    $body_billingType,
    $body_statementDescriptor,
    $body_description,
    $body_currency,
    $body_interval,
    $body_intervalCount,
    $body_pricingScheme,
    $body_items,
    $body_shipping,
    $body_discounts,
    $body_metadata,
    $body_setup,
    $body_increments
);

$result = $subscriptionsController->createSubscription($body);
```


# Get Increment by Id

```php
function getIncrementById(string $subscriptionId, string $incrementId): GetIncrementResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription Id |
| `incrementId` | `string` | Template, Required | The increment Id |

## Response Type

[`GetIncrementResponse`](/doc/models/get-increment-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$incrementId = 'increment_id8';

$result = $subscriptionsController->getIncrementById($subscriptionId, $incrementId);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `request` | [`UpdateMetadataRequest`](/doc/models/update-metadata-request.md) | Body, Required | Request for updating the subscrption metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\UpdateMetadataRequest(
    $request_metadata
);

$result = $subscriptionsController->updateSubscriptionMetadata($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `incrementId` | `string` | Template, Required | Increment id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetIncrementResponse`](/doc/models/get-increment-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$incrementId = 'increment_id8';

$result = $subscriptionsController->deleteIncrement($subscriptionId, $incrementId);
```


# Get Subscription

Gets a subscription

```php
function getSubscription(string $subscriptionId): GetSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$result = $subscriptionsController->getSubscription($subscriptionId);
```


# Update Latest Period End At

```php
function updateLatestPeriodEndAt(
    string $subscriptionId,
    UpdateCurrentCycleEndDateRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | - |
| `request` | [`UpdateCurrentCycleEndDateRequest`](/doc/models/update-current-cycle-end-date-request.md) | Body, Required | Request for updating the end date of the current signature cycle |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request = new Models\UpdateCurrentCycleEndDateRequest;

$result = $subscriptionsController->updateLatestPeriodEndAt($subscriptionId, $request);
```


# Update Current Cycle Status

```php
function updateCurrentCycleStatus(
    string $subscriptionId,
    UpdateCurrentCycleStatusRequest $request,
    ?string $idempotencyKey = null
): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `request` | [`UpdateCurrentCycleStatusRequest`](/doc/models/update-current-cycle-status-request.md) | Body, Required | Request for updating the end date of the subscription current status |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

`void`

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_status = 'status8';
$request = new Models\UpdateCurrentCycleStatusRequest(
    $request_status
);

$subscriptionsController->updateCurrentCycleStatus($subscriptionId, $request);
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

[`ListSubscriptionItemsResponse`](/doc/models/list-subscription-items-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$result = $subscriptionsController->getSubscriptionItems($subscriptionId);
```


# Get Subscription Item

Get Subscription Item

```php
function getSubscriptionItem(string $subscriptionId, string $itemId): GetSubscriptionItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `itemId` | `string` | Template, Required | Item id |

## Response Type

[`GetSubscriptionItemResponse`](/doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$itemId = 'item_id0';

$result = $subscriptionsController->getSubscriptionItem($subscriptionId, $itemId);
```


# Update Subscription Affiliation Id

```php
function updateSubscriptionAffiliationId(
    string $subscriptionId,
    UpdateSubscriptionAffiliationIdRequest $request,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | - |
| `request` | [`UpdateSubscriptionAffiliationIdRequest`](/doc/models/update-subscription-affiliation-id-request.md) | Body, Required | Request for updating a subscription affiliation id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_gatewayAffiliationId = 'gateway_affiliation_id2';
$request = new Models\UpdateSubscriptionAffiliationIdRequest(
    $request_gatewayAffiliationId
);

$result = $subscriptionsController->updateSubscriptionAffiliationId($subscriptionId, $request);
```


# Get Discounts

```php
function getDiscounts(string $subscriptionId, int $page, int $size): ListDiscountsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `page` | `int` | Query, Required | Page number |
| `size` | `int` | Query, Required | Page size |

## Response Type

[`ListDiscountsResponse`](/doc/models/list-discounts-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$page = 30;
$size = 18;

$result = $subscriptionsController->getDiscounts($subscriptionId, $page, $size);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `itemId` | `string` | Template, Required | Item id |
| `body` | [`UpdateSubscriptionItemRequest`](/doc/models/update-subscription-item-request.md) | Body, Required | Request for updating a subscription item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionItemResponse`](/doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$itemId = 'item_id0';
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
$body_name = 'name6';
$body = new Models\UpdateSubscriptionItemRequest(
    $body_description,
    $body_status,
    $body_pricingScheme,
    $body_name
);

$result = $subscriptionsController->updateSubscriptionItem($subscriptionId, $itemId, $body);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`CreateSubscriptionItemRequest`](/doc/models/create-subscription-item-request.md) | Body, Required | Request for creating a subscription item |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionItemResponse`](/doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_description = 'description6';
$request_pricingScheme_schemeType = 'scheme_type2';
$request_pricingScheme_priceBrackets = [];

$request_pricingScheme_priceBrackets_0_startQuantity = 87;
$request_pricingScheme_priceBrackets_0_price = 231;
$request_pricingScheme_priceBrackets[0] = new Models\CreatePriceBracketRequest(
    $request_pricingScheme_priceBrackets_0_startQuantity,
    $request_pricingScheme_priceBrackets_0_price
);

$request_pricingScheme = new Models\CreatePricingSchemeRequest(
    $request_pricingScheme_schemeType,
    $request_pricingScheme_priceBrackets
);
$request_id = 'id6';
$request_planItemId = 'plan_item_id6';
$request_discounts = [];

$request_discounts_0_value = 199.99;
$request_discounts_0_discountType = 'discount_type5';
$request_discounts_0_itemId = 'item_id7';
$request_discounts[0] = new Models\CreateDiscountRequest(
    $request_discounts_0_value,
    $request_discounts_0_discountType,
    $request_discounts_0_itemId
);

$request_discounts_1_value = 200;
$request_discounts_1_discountType = 'discount_type6';
$request_discounts_1_itemId = 'item_id8';
$request_discounts[1] = new Models\CreateDiscountRequest(
    $request_discounts_1_value,
    $request_discounts_1_discountType,
    $request_discounts_1_itemId
);

$request_name = 'name6';
$request = new Models\CreateSubscriptionItemRequest(
    $request_description,
    $request_pricingScheme,
    $request_id,
    $request_planItemId,
    $request_discounts,
    $request_name
);

$result = $subscriptionsController->createSubscriptionItem($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `itemId` | `string` | Template, Required | The subscription item id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Identification code in the client system |
| `group` | `?string` | Query, Optional | Identification group in the client system |
| `usedSince` | `?\DateTime` | Query, Optional | - |
| `usedUntil` | `?\DateTime` | Query, Optional | - |

## Response Type

[`ListUsagesResponse`](/doc/models/list-usages-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$itemId = 'item_id0';

$result = $subscriptionsController->getUsages($subscriptionId, $itemId);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `request` | [`UpdateSubscriptionMinimumPriceRequest`](/doc/models/update-subscription-minimum-price-request.md) | Body, Required | Request da requisição com o valor mínimo que será configurado |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request = new Models\UpdateSubscriptionMinimumPriceRequest;

$result = $subscriptionsController->updateSubscriptionMiniumPrice($subscriptionId, $request);
```


# Get Subscription Cycle by Id

```php
function getSubscriptionCycleById(string $subscriptionId, string $cycleId): GetPeriodResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `cycleId` | `string` | Template, Required | - |

## Response Type

[`GetPeriodResponse`](/doc/models/get-period-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$cycleId = 'cycleId0';

$result = $subscriptionsController->getSubscriptionCycleById($subscriptionId, $cycleId);
```


# Create an Usage

Create Usage

```php
function createAnUsage(string $subscriptionId, string $itemId, ?string $idempotencyKey = null): GetUsageResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `itemId` | `string` | Template, Required | Item id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetUsageResponse`](/doc/models/get-usage-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$itemId = 'item_id0';

$result = $subscriptionsController->createAnUsage($subscriptionId, $itemId);
```


# Cancel Subscription

Cancels a subscription

```php
function cancelSubscription(
    string $subscriptionId,
    ?CreateCancelSubscriptionRequest $request = null,
    ?string $idempotencyKey = null
): GetSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`?CreateCancelSubscriptionRequest`](/doc/models/create-cancel-subscription-request.md) | Body, Optional | Request for cancelling a subscription |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_cancelPendingInvoices = true;
$request = new Models\CreateCancelSubscriptionRequest(
    $request_cancelPendingInvoices
);

$result = $subscriptionsController->cancelSubscription($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `subscriptionItemId` | `string` | Template, Required | Subscription item id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionItemResponse`](/doc/models/get-subscription-item-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$subscriptionItemId = 'subscription_item_id4';

$result = $subscriptionsController->deleteSubscriptionItem($subscriptionId, $subscriptionItemId);
```


# Get Increments

```php
function getIncrements(string $subscriptionId, ?int $page = null, ?int $size = null): ListIncrementsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

[`ListIncrementsResponse`](/doc/models/list-increments-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$result = $subscriptionsController->getIncrements($subscriptionId);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `request` | [`UpdateSubscriptionDueDaysRequest`](/doc/models/update-subscription-due-days-request.md) | Body, Required | - |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_boletoDueDays = 226;
$request = new Models\UpdateSubscriptionDueDaysRequest(
    $request_boletoDueDays
);

$result = $subscriptionsController->updateSubscriptionDueDays($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`UpdateSubscriptionCardRequest`](/doc/models/update-subscription-card-request.md) | Body, Required | Request for updating a card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_card_number = 'number2';
$request_card_holderName = 'holder_name6';
$request_card_expMonth = 80;
$request_card_expYear = 216;
$request_card_cvv = 'cvv8';
$request_card_billingAddress_street = 'street2';
$request_card_billingAddress_number = 'number0';
$request_card_billingAddress_zipCode = 'zip_code6';
$request_card_billingAddress_neighborhood = 'neighborhood8';
$request_card_billingAddress_city = 'city8';
$request_card_billingAddress_state = 'state2';
$request_card_billingAddress_country = 'country6';
$request_card_billingAddress_complement = 'complement2';
$request_card_billingAddress_metadata = ['key0' => 'metadata1'];
$request_card_billingAddress_line1 = 'line_14';
$request_card_billingAddress_line2 = 'line_20';
$request_card_billingAddress = new Models\CreateAddressRequest(
    $request_card_billingAddress_street,
    $request_card_billingAddress_number,
    $request_card_billingAddress_zipCode,
    $request_card_billingAddress_neighborhood,
    $request_card_billingAddress_city,
    $request_card_billingAddress_state,
    $request_card_billingAddress_country,
    $request_card_billingAddress_complement,
    $request_card_billingAddress_metadata,
    $request_card_billingAddress_line1,
    $request_card_billingAddress_line2
);
$request_card_brand = 'brand4';
$request_card_billingAddressId = 'billing_address_id6';
$request_card_metadata = ['key0' => 'metadata3', 'key1' => 'metadata4', 'key2' => 'metadata5'];
$request_card_type = 'credit';
$request_card_options_verifyCard = false;
$request_card_options = new Models\CreateCardOptionsRequest(
    $request_card_options_verifyCard
);
$request_card_privateLabel = false;
$request_card_label = 'label0';
$request_card = new Models\CreateCardRequest(
    $request_card_number,
    $request_card_holderName,
    $request_card_expMonth,
    $request_card_expYear,
    $request_card_cvv,
    $request_card_billingAddress,
    $request_card_brand,
    $request_card_billingAddressId,
    $request_card_metadata,
    $request_card_type,
    $request_card_options,
    $request_card_privateLabel,
    $request_card_label
);
$request_cardId = 'card_id2';
$request = new Models\UpdateSubscriptionCardRequest(
    $request_card,
    $request_cardId
);

$result = $subscriptionsController->updateSubscriptionCard($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `itemId` | `string` | Template, Required | The subscription item id |
| `usageId` | `string` | Template, Required | The usage id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetUsageResponse`](/doc/models/get-usage-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$itemId = 'item_id0';
$usageId = 'usage_id0';

$result = $subscriptionsController->deleteUsage($subscriptionId, $itemId, $usageId);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`CreateDiscountRequest`](/doc/models/create-discount-request.md) | Body, Required | Request for creating a discount |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetDiscountResponse`](/doc/models/get-discount-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_value = 185.28;
$request_discountType = 'discount_type4';
$request_itemId = 'item_id6';
$request = new Models\CreateDiscountRequest(
    $request_value,
    $request_discountType,
    $request_itemId
);

$result = $subscriptionsController->createDiscount($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`UpdateSubscriptionPaymentMethodRequest`](/doc/models/update-subscription-payment-method-request.md) | Body, Required | Request for updating the paymentmethod from a subscription |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_paymentMethod = 'payment_method4';
$request_cardId = 'card_id2';
$request_card_number = 'number2';
$request_card_holderName = 'holder_name6';
$request_card_expMonth = 80;
$request_card_expYear = 216;
$request_card_cvv = 'cvv8';
$request_card_billingAddress_street = 'street2';
$request_card_billingAddress_number = 'number0';
$request_card_billingAddress_zipCode = 'zip_code6';
$request_card_billingAddress_neighborhood = 'neighborhood8';
$request_card_billingAddress_city = 'city8';
$request_card_billingAddress_state = 'state2';
$request_card_billingAddress_country = 'country6';
$request_card_billingAddress_complement = 'complement2';
$request_card_billingAddress_metadata = ['key0' => 'metadata1'];
$request_card_billingAddress_line1 = 'line_14';
$request_card_billingAddress_line2 = 'line_20';
$request_card_billingAddress = new Models\CreateAddressRequest(
    $request_card_billingAddress_street,
    $request_card_billingAddress_number,
    $request_card_billingAddress_zipCode,
    $request_card_billingAddress_neighborhood,
    $request_card_billingAddress_city,
    $request_card_billingAddress_state,
    $request_card_billingAddress_country,
    $request_card_billingAddress_complement,
    $request_card_billingAddress_metadata,
    $request_card_billingAddress_line1,
    $request_card_billingAddress_line2
);
$request_card_brand = 'brand4';
$request_card_billingAddressId = 'billing_address_id6';
$request_card_metadata = ['key0' => 'metadata3', 'key1' => 'metadata4', 'key2' => 'metadata5'];
$request_card_type = 'credit';
$request_card_options_verifyCard = false;
$request_card_options = new Models\CreateCardOptionsRequest(
    $request_card_options_verifyCard
);
$request_card_privateLabel = false;
$request_card_label = 'label0';
$request_card = new Models\CreateCardRequest(
    $request_card_number,
    $request_card_holderName,
    $request_card_expMonth,
    $request_card_expYear,
    $request_card_cvv,
    $request_card_billingAddress,
    $request_card_brand,
    $request_card_billingAddressId,
    $request_card_metadata,
    $request_card_type,
    $request_card_options,
    $request_card_privateLabel,
    $request_card_label
);
$request = new Models\UpdateSubscriptionPaymentMethodRequest(
    $request_paymentMethod,
    $request_cardId,
    $request_card
);

$result = $subscriptionsController->updateSubscriptionPaymentMethod($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription id |
| `request` | [`CreateIncrementRequest`](/doc/models/create-increment-request.md) | Body, Required | Request for creating a increment |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetIncrementResponse`](/doc/models/get-increment-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_value = 185.28;
$request_incrementType = 'increment_type8';
$request_itemId = 'item_id6';
$request = new Models\CreateIncrementRequest(
    $request_value,
    $request_incrementType,
    $request_itemId
);

$result = $subscriptionsController->createIncrement($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `itemId` | `string` | Template, Required | Item id |
| `body` | [`CreateUsageRequest`](/doc/models/create-usage-request.md) | Body, Required | Request for creating a usage |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetUsageResponse`](/doc/models/get-usage-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$itemId = 'item_id0';
$body_quantity = 156;
$body_description = 'description4';
$body_usedAt = DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z');
$body = new Models\CreateUsageRequest(
    $body_quantity,
    $body_description,
    $body_usedAt
);

$result = $subscriptionsController->createUsage($subscriptionId, $itemId, $body);
```


# Get Subscription Cycles

```php
function getSubscriptionCycles(string $subscriptionId, string $page, string $size): ListCyclesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | Subscription Id |
| `page` | `string` | Query, Required | Page number |
| `size` | `string` | Query, Required | Page size |

## Response Type

[`ListCyclesResponse`](/doc/models/list-cycles-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$page = 'page8';
$size = 'size0';

$result = $subscriptionsController->getSubscriptionCycles($subscriptionId, $page, $size);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `request` | [`UpdateSubscriptionBillingDateRequest`](/doc/models/update-subscription-billing-date-request.md) | Body, Required | Request for updating the subscription billing date |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_nextBillingAt = DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z');
$request = new Models\UpdateSubscriptionBillingDateRequest(
    $request_nextBillingAt
);

$result = $subscriptionsController->updateSubscriptionBillingDate($subscriptionId, $request);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription id |
| `request` | [`UpdateSubscriptionStartAtRequest`](/doc/models/update-subscription-start-at-request.md) | Body, Required | Request for updating the subscription start date |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$request_startAt = DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z');
$request = new Models\UpdateSubscriptionStartAtRequest(
    $request_startAt
);

$result = $subscriptionsController->updateSubscriptionStartAt($subscriptionId, $request);
```


# Get Usage Report

```php
function getUsageReport(string $subscriptionId, string $periodId): GetUsageReportResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | The subscription Id |
| `periodId` | `string` | Template, Required | The period Id |

## Response Type

[`GetUsageReportResponse`](/doc/models/get-usage-report-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$periodId = 'period_id0';

$result = $subscriptionsController->getUsageReport($subscriptionId, $periodId);
```


# Update Split Subscription

```php
function updateSplitSubscription(string $id, UpdateSubscriptionSplitRequest $request): GetSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Subscription's id |
| `request` | [`UpdateSubscriptionSplitRequest`](/doc/models/update-subscription-split-request.md) | Body, Required | - |

## Response Type

[`GetSubscriptionResponse`](/doc/models/get-subscription-response.md)

## Example Usage

```php
$id = 'id0';
$request_enabled = false;
$request_rules = [];

$request_rules_0_type = 'type6';
$request_rules_0_amount = 222;
$request_rules_0_recipientId = 'recipient_id6';
$request_rules[0] = new Models\CreateSplitRequest(
    $request_rules_0_type,
    $request_rules_0_amount,
    $request_rules_0_recipientId
);

$request_rules_1_type = 'type5';
$request_rules_1_amount = 223;
$request_rules_1_recipientId = 'recipient_id5';
$request_rules[1] = new Models\CreateSplitRequest(
    $request_rules_1_type,
    $request_rules_1_amount,
    $request_rules_1_recipientId
);

$request_rules_2_type = 'type4';
$request_rules_2_amount = 224;
$request_rules_2_recipientId = 'recipient_id4';
$request_rules[2] = new Models\CreateSplitRequest(
    $request_rules_2_type,
    $request_rules_2_amount,
    $request_rules_2_recipientId
);

$request = new Models\UpdateSubscriptionSplitRequest(
    $request_enabled,
    $request_rules
);

$result = $subscriptionsController->updateSplitSubscription($id, $request);
```

