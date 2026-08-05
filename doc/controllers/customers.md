# Customers

```php
$customersController = $client->getCustomersController();
```

## Class Name

`CustomersController`

## Methods

* [Create Access Token](../../doc/controllers/customers.md#create-access-token)
* [Create Address](../../doc/controllers/customers.md#create-address)
* [Create Card](../../doc/controllers/customers.md#create-card)
* [Create Customer](../../doc/controllers/customers.md#create-customer)
* [Delete Access Token](../../doc/controllers/customers.md#delete-access-token)
* [Delete Access Tokens](../../doc/controllers/customers.md#delete-access-tokens)
* [Delete Address](../../doc/controllers/customers.md#delete-address)
* [Delete Card](../../doc/controllers/customers.md#delete-card)
* [Get Access Token](../../doc/controllers/customers.md#get-access-token)
* [Get Access Tokens](../../doc/controllers/customers.md#get-access-tokens)
* [Get Address](../../doc/controllers/customers.md#get-address)
* [Get Addresses](../../doc/controllers/customers.md#get-addresses)
* [Get Card](../../doc/controllers/customers.md#get-card)
* [Get Cards](../../doc/controllers/customers.md#get-cards)
* [Get Customer](../../doc/controllers/customers.md#get-customer)
* [Get Customers](../../doc/controllers/customers.md#get-customers)
* [Renew Card](../../doc/controllers/customers.md#renew-card)
* [Update Address](../../doc/controllers/customers.md#update-address)
* [Update Card](../../doc/controllers/customers.md#update-card)
* [Update Customer](../../doc/controllers/customers.md#update-customer)
* [Update Customer Metadata](../../doc/controllers/customers.md#update-customer-metadata)


# Create Access Token

Creates a access token for a customer

```php
function createAccessToken(
    string $customerId,
    CreateAccessTokenRequest $request,
    ?string $idempotencyKey = null
): GetAccessTokenResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `request` | [`CreateAccessTokenRequest`](../../doc/models/create-access-token-request.md) | Body, Required | Request for creating a access token |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetAccessTokenResponse`](../../doc/models/get-access-token-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = CreateAccessTokenRequestBuilder::init()->build();

$customersController = $client->getCustomersController();

try {
    $result = $customersController->createAccessToken(
        $customerId,
        $request
    );
    echo 'GetAccessTokenResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Address

Creates a new address for a customer

```php
function createAddress(
    string $customerId,
    CreateAddressRequest $request,
    ?string $idempotencyKey = null
): GetAddressResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `request` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Body, Required | Request for creating an address |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

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

$customersController = $client->getCustomersController();

try {
    $result = $customersController->createAddress(
        $customerId,
        $request
    );
    echo 'GetAddressResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `request` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Body, Required | Request for creating a card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = CreateCardRequestBuilder::init()
    ->type('credit')
    ->build();

$customersController = $client->getCustomersController();

try {
    $result = $customersController->createCard(
        $customerId,
        $request
    );
    echo 'GetCardResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Customer

Creates a new customer

```php
function createCustomer(CreateCustomerRequest $request, ?string $idempotencyKey = null): GetCustomerResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Body, Required | Request for creating a customer |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$request = CreateCustomerRequestBuilder::init(
    'Tony Stark',
    '',
    '',
    '',
    null,
    [],
    null,
    ''
)->build();

$customersController = $client->getCustomersController();

try {
    $result = $customersController->createCustomer($request);
    echo 'GetCustomerResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `tokenId` | `string` | Template, Required | Token Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetAccessTokenResponse`](../../doc/models/get-access-token-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$tokenId = 'token_id6';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->deleteAccessToken(
        $customerId,
        $tokenId
    );
    echo 'GetAccessTokenResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Access Tokens

Delete a Customer's access tokens

```php
function deleteAccessTokens(string $customerId): ListAccessTokensResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |

## Response Type

**200**

[`ListAccessTokensResponse`](../../doc/models/list-access-tokens-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->deleteAccessTokens($customerId);
    echo 'ListAccessTokensResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `addressId` | `string` | Template, Required | Address Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetAddressResponse`](../../doc/models/get-address-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$addressId = 'address_id0';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->deleteAddress(
        $customerId,
        $addressId
    );
    echo 'GetAddressResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Delete Card

Delete a customer's card

```php
function deleteCard(string $customerId, string $cardId, ?string $idempotencyKey = null): GetCardResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `cardId` | `string` | Template, Required | Card Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->deleteCard(
        $customerId,
        $cardId
    );
    echo 'GetCardResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Access Token

Get a Customer's access token

```php
function getAccessToken(string $customerId, string $tokenId): GetAccessTokenResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `tokenId` | `string` | Template, Required | Token Id |

## Response Type

**200**

[`GetAccessTokenResponse`](../../doc/models/get-access-token-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$tokenId = 'token_id6';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getAccessToken(
        $customerId,
        $tokenId
    );
    echo 'GetAccessTokenResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Access Tokens

Get all access tokens from a customer

```php
function getAccessTokens(string $customerId, ?int $page = null, ?int $size = null): ListAccessTokensResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

**200**

[`ListAccessTokensResponse`](../../doc/models/list-access-tokens-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getAccessTokens($customerId);
    echo 'ListAccessTokensResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Address

Get a customer's address

```php
function getAddress(string $customerId, string $addressId): GetAddressResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `addressId` | `string` | Template, Required | Address Id |

## Response Type

**200**

[`GetAddressResponse`](../../doc/models/get-address-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$addressId = 'address_id0';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getAddress(
        $customerId,
        $addressId
    );
    echo 'GetAddressResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Addresses

Gets all adressess from a customer

```php
function getAddresses(string $customerId, ?int $page = null, ?int $size = null): ListAddressesResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

**200**

[`ListAddressesResponse`](../../doc/models/list-addresses-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getAddresses($customerId);
    echo 'ListAddressesResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Card

Get a customer's card

```php
function getCard(string $customerId, string $cardId): GetCardResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `cardId` | `string` | Template, Required | Card id |

## Response Type

**200**

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getCard(
        $customerId,
        $cardId
    );
    echo 'GetCardResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Cards

Get all cards from a customer

```php
function getCards(string $customerId, ?int $page = null, ?int $size = null): ListCardsResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

**200**

[`ListCardsResponse`](../../doc/models/list-cards-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getCards($customerId);
    echo 'ListCardsResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Customer

Get a customer

```php
function getCustomer(string $customerId): GetCustomerResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |

## Response Type

**200**

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getCustomer($customerId);
    echo 'GetCustomerResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `?string` | Query, Optional | Name of the Customer |
| `document` | `?string` | Query, Optional | Document of the Customer |
| `page` | `?int` | Query, Optional | Current page the the search<br><br>**Default**: `1` |
| `size` | `?int` | Query, Optional | Quantity pages of the search<br><br>**Default**: `10` |
| `email` | `?string` | Query, Optional | Customer's email |
| `code` | `?string` | Query, Optional | Customer's code |

## Response Type

**200**

[`ListCustomersResponse`](../../doc/models/list-customers-response.md)

## Example Usage

```php
$page = 1;

$size = 10;

$customersController = $client->getCustomersController();

try {
    $result = $customersController->getCustomers(
        null,
        null,
        $page,
        $size
    );
    echo 'ListCustomersResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Renew Card

Renew a card

```php
function renewCard(string $customerId, string $cardId, ?string $idempotencyKey = null): GetCardResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `cardId` | `string` | Template, Required | Card Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$customersController = $client->getCustomersController();

try {
    $result = $customersController->renewCard(
        $customerId,
        $cardId
    );
    echo 'GetCardResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `addressId` | `string` | Template, Required | Address Id |
| `request` | [`UpdateAddressRequest`](../../doc/models/update-address-request.md) | Body, Required | Request for updating an address |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

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

$customersController = $client->getCustomersController();

try {
    $result = $customersController->updateAddress(
        $customerId,
        $addressId,
        $request
    );
    echo 'GetAddressResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer Id |
| `cardId` | `string` | Template, Required | Card id |
| `request` | [`UpdateCardRequest`](../../doc/models/update-card-request.md) | Body, Required | Request for updating a card |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetCardResponse`](../../doc/models/get-card-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$cardId = 'card_id4';

$request = UpdateCardRequestBuilder::init(
    'holder_name2',
    10,
    30,
    null,
    [
        'key0' => 'metadata3'
    ],
    'label6'
)->build();

$customersController = $client->getCustomersController();

try {
    $result = $customersController->updateCard(
        $customerId,
        $cardId,
        $request
    );
    echo 'GetCardResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | Customer id |
| `request` | [`UpdateCustomerRequest`](../../doc/models/update-customer-request.md) | Body, Required | Request for updating a customer |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = UpdateCustomerRequestBuilder::init()->build();

$customersController = $client->getCustomersController();

try {
    $result = $customersController->updateCustomer(
        $customerId,
        $request
    );
    echo 'GetCustomerResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `customerId` | `string` | Template, Required | The customer id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the customer metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetCustomerResponse`](../../doc/models/get-customer-response.md)

## Example Usage

```php
$customerId = 'customer_id8';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$customersController = $client->getCustomersController();

try {
    $result = $customersController->updateCustomerMetadata(
        $customerId,
        $request
    );
    echo 'GetCustomerResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

