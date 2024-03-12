# Customers

```php
$customersController = $client->getCustomersController();
```

## Class Name

`CustomersController`

## Methods

* [Create Address](../../doc/controllers/customers.md#create-address)
* [Update Card](../../doc/controllers/customers.md#update-card)
* [Delete Access Token](../../doc/controllers/customers.md#delete-access-token)
* [Create Customer](../../doc/controllers/customers.md#create-customer)
* [Delete Access Tokens](../../doc/controllers/customers.md#delete-access-tokens)
* [Update Address](../../doc/controllers/customers.md#update-address)
* [Get Address](../../doc/controllers/customers.md#get-address)
* [Delete Address](../../doc/controllers/customers.md#delete-address)
* [Get Customers](../../doc/controllers/customers.md#get-customers)
* [Get Access Tokens](../../doc/controllers/customers.md#get-access-tokens)
* [Delete Card](../../doc/controllers/customers.md#delete-card)
* [Get Card](../../doc/controllers/customers.md#get-card)
* [Create Card](../../doc/controllers/customers.md#create-card)
* [Get Access Token](../../doc/controllers/customers.md#get-access-token)
* [Get Addresses](../../doc/controllers/customers.md#get-addresses)
* [Update Customer](../../doc/controllers/customers.md#update-customer)
* [Create Access Token](../../doc/controllers/customers.md#create-access-token)
* [Get Cards](../../doc/controllers/customers.md#get-cards)
* [Renew Card](../../doc/controllers/customers.md#renew-card)
* [Update Customer Metadata](../../doc/controllers/customers.md#update-customer-metadata)
* [Get Customer](../../doc/controllers/customers.md#get-customer)


# Create Address

Creates a new address for a customer

```php
function createAddress(
    string $customerId,
    CreateAddressRequest $request,
    ?string $idempotencyKey = null
): GetAddressResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `request` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Body, Required | Request for creating an address |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetAddressResponse`](../../doc/models/get-address-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = CreateAddressRequestBuilder::init(
    'street6',
    'number4',
    'zip_code0',
    'neighborhood2',
    'city6',
    'state2',
    'country0',
    'complement2',
    'line_10',
    'line_24'
)->build();

$result = $customersController->createAddress(
    $customerId,
    $request
);
```


# Update Card

Updates a card

```php
function updateCard(
    string $customerId,
    string $cardId,
    UpdateCardRequest $request,
    ?string $idempotencyKey = null
): GetCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `cardId` | `string` | Template, Required | Card id |
| `request` | [`UpdateCardRequest`](../../doc/models/update-card-request.md) | Body, Required | Request for updating a card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$request = UpdateCardRequestBuilder::init(
    'holder_name2',
    10,
    30,
    CreateAddressRequestBuilder::init(
        'street8',
        'number4',
        'zip_code2',
        'neighborhood4',
        'city2',
        'state6',
        'country2',
        'complement6',
        'line_18',
        'line_26'
    )->build(),
    [
        'key0' => 'metadata3'
    ],
    'label6'
)->build();

$result = $customersController->updateCard(
    $customerId,
    $cardId,
    $request
);
```


# Delete Access Token

Delete a customer's access token

```php
function deleteAccessToken(
    string $customerId,
    string $tokenId,
    ?string $idempotencyKey = null
): GetAccessTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `tokenId` | `string` | Template, Required | Token Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetAccessTokenResponse`](../../doc/models/get-access-token-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$tokenId = 'token_id6';

$result = $customersController->deleteAccessToken(
    $customerId,
    $tokenId
);
```


# Create Customer

Creates a new customer

```php
function createCustomer(CreateCustomerRequest $request, ?string $idempotencyKey = null): GetCustomerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Body, Required | Request for creating a customer |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$request = CreateCustomerRequestBuilder::init(
    '{
    "name": "Tony Stark"
}',
    'email0',
    'document0',
    'type4',
    CreateAddressRequestBuilder::init(
        'street6',
        'number4',
        'zip_code0',
        'neighborhood2',
        'city6',
        'state2',
        'country0',
        'complement2',
        'line_10',
        'line_24'
    )->build(),
    [
        'key0' => 'metadata3'
    ],
    CreatePhonesRequestBuilder::init()->build(),
    'code4'
)->build();

$result = $customersController->createCustomer($request);
```


# Delete Access Tokens

Delete a Customer's access tokens

```php
function deleteAccessTokens(string $customerId): ListAccessTokensResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |

## Response Type

[`ListAccessTokensResponse`](../../doc/models/list-access-tokens-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$result = $customersController->deleteAccessTokens($customerId);
```


# Update Address

Updates an address

```php
function updateAddress(
    string $customerId,
    string $addressId,
    UpdateAddressRequest $request,
    ?string $idempotencyKey = null
): GetAddressResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `addressId` | `string` | Template, Required | Address Id |
| `request` | [`UpdateAddressRequest`](../../doc/models/update-address-request.md) | Body, Required | Request for updating an address |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetAddressResponse`](../../doc/models/get-address-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$addressId = 'address_id0';

$request = UpdateAddressRequestBuilder::init(
    'number4',
    'complement2',
    [
        'key0' => 'metadata3'
    ],
    'line_24'
)->build();

$result = $customersController->updateAddress(
    $customerId,
    $addressId,
    $request
);
```


# Get Address

Get a customer's address

```php
function getAddress(string $customerId, string $addressId): GetAddressResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `addressId` | `string` | Template, Required | Address Id |

## Response Type

[`GetAddressResponse`](../../doc/models/get-address-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$addressId = 'address_id0';

$result = $customersController->getAddress(
    $customerId,
    $addressId
);
```


# Delete Address

Delete a Customer's address

```php
function deleteAddress(
    string $customerId,
    string $addressId,
    ?string $idempotencyKey = null
): GetAddressResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `addressId` | `string` | Template, Required | Address Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetAddressResponse`](../../doc/models/get-address-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$addressId = 'address_id0';

$result = $customersController->deleteAddress(
    $customerId,
    $addressId
);
```


# Get Customers

Get all Customers

```php
function getCustomers(
    ?string $name = null,
    ?string $document = null,
    ?int $page = 1,
    ?int $size = 10,
    ?string $email = null,
    ?string $code = null
): ListCustomersResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `?string` | Query, Optional | Name of the Customer |
| `document` | `?string` | Query, Optional | Document of the Customer |
| `page` | `?int` | Query, Optional | Current page the the search |
| `size` | `?int` | Query, Optional | Quantity pages of the search |
| `email` | `?string` | Query, Optional | Customer's email |
| `code` | `?string` | Query, Optional | Customer's code |

## Response Type

[`ListCustomersResponse`](../../doc/models/list-customers-response.md)

## Example Usage

```php
$page = 1;

$size = 10;

$result = $customersController->getCustomers(
    null,
    null,
    $page,
    $size
);
```


# Get Access Tokens

Get all access tokens from a customer

```php
function getAccessTokens(string $customerId, ?int $page = null, ?int $size = null): ListAccessTokensResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

[`ListAccessTokensResponse`](../../doc/models/list-access-tokens-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$result = $customersController->getAccessTokens($customerId);
```


# Delete Card

Delete a customer's card

```php
function deleteCard(string $customerId, string $cardId, ?string $idempotencyKey = null): GetCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `cardId` | `string` | Template, Required | Card Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$result = $customersController->deleteCard(
    $customerId,
    $cardId
);
```


# Get Card

Get a customer's card

```php
function getCard(string $customerId, string $cardId): GetCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `cardId` | `string` | Template, Required | Card id |

## Response Type

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$result = $customersController->getCard(
    $customerId,
    $cardId
);
```


# Create Card

Creates a new card for a customer

```php
function createCard(
    string $customerId,
    CreateCardRequest $request,
    ?string $idempotencyKey = null
): GetCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `request` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Body, Required | Request for creating a card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = CreateCardRequestBuilder::init()
    ->type('credit')
    ->build();

$result = $customersController->createCard(
    $customerId,
    $request
);
```


# Get Access Token

Get a Customer's access token

```php
function getAccessToken(string $customerId, string $tokenId): GetAccessTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `tokenId` | `string` | Template, Required | Token Id |

## Response Type

[`GetAccessTokenResponse`](../../doc/models/get-access-token-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$tokenId = 'token_id6';

$result = $customersController->getAccessToken(
    $customerId,
    $tokenId
);
```


# Get Addresses

Gets all adressess from a customer

```php
function getAddresses(string $customerId, ?int $page = null, ?int $size = null): ListAddressesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

[`ListAddressesResponse`](../../doc/models/list-addresses-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$result = $customersController->getAddresses($customerId);
```


# Update Customer

Updates a customer

```php
function updateCustomer(
    string $customerId,
    UpdateCustomerRequest $request,
    ?string $idempotencyKey = null
): GetCustomerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `request` | [`UpdateCustomerRequest`](../../doc/models/update-customer-request.md) | Body, Required | Request for updating a customer |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = UpdateCustomerRequestBuilder::init()->build();

$result = $customersController->updateCustomer(
    $customerId,
    $request
);
```


# Create Access Token

Creates a access token for a customer

```php
function createAccessToken(
    string $customerId,
    CreateAccessTokenRequest $request,
    ?string $idempotencyKey = null
): GetAccessTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `request` | [`CreateAccessTokenRequest`](../../doc/models/create-access-token-request.md) | Body, Required | Request for creating a access token |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetAccessTokenResponse`](../../doc/models/get-access-token-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = CreateAccessTokenRequestBuilder::init()->build();

$result = $customersController->createAccessToken(
    $customerId,
    $request
);
```


# Get Cards

Get all cards from a customer

```php
function getCards(string $customerId, ?int $page = null, ?int $size = null): ListCardsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

[`ListCardsResponse`](../../doc/models/list-cards-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$result = $customersController->getCards($customerId);
```


# Renew Card

Renew a card

```php
function renewCard(string $customerId, string $cardId, ?string $idempotencyKey = null): GetCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `cardId` | `string` | Template, Required | Card Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$result = $customersController->renewCard(
    $customerId,
    $cardId
);
```


# Update Customer Metadata

Updates the metadata a customer

```php
function updateCustomerMetadata(
    string $customerId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetCustomerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | The customer id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the customer metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$result = $customersController->updateCustomerMetadata(
    $customerId,
    $request
);
```


# Get Customer

Get a customer

```php
function getCustomer(string $customerId): GetCustomerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |

## Response Type

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$result = $customersController->getCustomer($customerId);
```

