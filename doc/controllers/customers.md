# Customers

```php
$customersController = $client->getCustomersController();
```

## Class Name

`CustomersController`

## Methods

* [Update Card](../../doc/controllers/customers.md#update-card)
* [Update Address](../../doc/controllers/customers.md#update-address)
* [Delete Access Token](../../doc/controllers/customers.md#delete-access-token)
* [Create Address](../../doc/controllers/customers.md#create-address)
* [Create Customer](../../doc/controllers/customers.md#create-customer)
* [Create Card](../../doc/controllers/customers.md#create-card)
* [Get Cards](../../doc/controllers/customers.md#get-cards)
* [Renew Card](../../doc/controllers/customers.md#renew-card)
* [Get Address](../../doc/controllers/customers.md#get-address)
* [Delete Address](../../doc/controllers/customers.md#delete-address)
* [Get Access Token](../../doc/controllers/customers.md#get-access-token)
* [Update Customer Metadata](../../doc/controllers/customers.md#update-customer-metadata)
* [Get Card](../../doc/controllers/customers.md#get-card)
* [Delete Access Tokens](../../doc/controllers/customers.md#delete-access-tokens)
* [Create Access Token](../../doc/controllers/customers.md#create-access-token)
* [Get Access Tokens](../../doc/controllers/customers.md#get-access-tokens)
* [Get Customers](../../doc/controllers/customers.md#get-customers)
* [Update Customer](../../doc/controllers/customers.md#update-customer)
* [Delete Card](../../doc/controllers/customers.md#delete-card)
* [Get Addresses](../../doc/controllers/customers.md#get-addresses)
* [Get Customer](../../doc/controllers/customers.md#get-customer)


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
$request_holderName = 'holder_name2';
$request_expMonth = 10;
$request_expYear = 30;
$request_billingAddressId = 'billing_address_id2';
$request_billingAddress_street = 'street8';
$request_billingAddress_number = 'number4';
$request_billingAddress_zipCode = 'zip_code2';
$request_billingAddress_neighborhood = 'neighborhood4';
$request_billingAddress_city = 'city8';
$request_billingAddress_state = 'state4';
$request_billingAddress_country = 'country2';
$request_billingAddress_complement = 'complement6';
$request_billingAddress_metadata = ['key0' => 'metadata5', 'key1' => 'metadata6'];
$request_billingAddress_line1 = 'line_18';
$request_billingAddress_line2 = 'line_26';
$request_billingAddress = new Models\CreateAddressRequest(
    $request_billingAddress_street,
    $request_billingAddress_number,
    $request_billingAddress_zipCode,
    $request_billingAddress_neighborhood,
    $request_billingAddress_city,
    $request_billingAddress_state,
    $request_billingAddress_country,
    $request_billingAddress_complement,
    $request_billingAddress_metadata,
    $request_billingAddress_line1,
    $request_billingAddress_line2
);
$request_metadata = ['key0' => 'metadata3'];
$request_label = 'label6';
$request = new Models\UpdateCardRequest(
    $request_holderName,
    $request_expMonth,
    $request_expYear,
    $request_billingAddressId,
    $request_billingAddress,
    $request_metadata,
    $request_label
);

$result = $customersController->updateCard($customerId, $cardId, $request);
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
$request_number = 'number4';
$request_complement = 'complement2';
$request_metadata = ['key0' => 'metadata3'];
$request_line2 = 'line_24';
$request = new Models\UpdateAddressRequest(
    $request_number,
    $request_complement,
    $request_metadata,
    $request_line2
);

$result = $customersController->updateAddress($customerId, $addressId, $request);
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

$result = $customersController->deleteAccessToken($customerId, $tokenId);
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
$request_street = 'street6';
$request_number = 'number4';
$request_zipCode = 'zip_code0';
$request_neighborhood = 'neighborhood2';
$request_city = 'city6';
$request_state = 'state2';
$request_country = 'country0';
$request_complement = 'complement2';
$request_metadata = ['key0' => 'metadata3'];
$request_line1 = 'line_10';
$request_line2 = 'line_24';
$request = new Models\CreateAddressRequest(
    $request_street,
    $request_number,
    $request_zipCode,
    $request_neighborhood,
    $request_city,
    $request_state,
    $request_country,
    $request_complement,
    $request_metadata,
    $request_line1,
    $request_line2
);

$result = $customersController->createAddress($customerId, $request);
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
$request_name = '{
    "name": "Tony Stark"
}';
$request_email = 'email0';
$request_document = 'document0';
$request_type = 'type4';
$request_address_street = 'street2';
$request_address_number = 'number0';
$request_address_zipCode = 'zip_code6';
$request_address_neighborhood = 'neighborhood8';
$request_address_city = 'city2';
$request_address_state = 'state8';
$request_address_country = 'country6';
$request_address_complement = 'complement8';
$request_address_metadata = ['key0' => 'metadata7'];
$request_address_line1 = 'line_16';
$request_address_line2 = 'line_20';
$request_address = new Models\CreateAddressRequest(
    $request_address_street,
    $request_address_number,
    $request_address_zipCode,
    $request_address_neighborhood,
    $request_address_city,
    $request_address_state,
    $request_address_country,
    $request_address_complement,
    $request_address_metadata,
    $request_address_line1,
    $request_address_line2
);
$request_metadata = ['key0' => 'metadata3'];
$request_phones = new Models\CreatePhonesRequest();
$request_code = 'code4';
$request = new Models\CreateCustomerRequest(
    $request_name,
    $request_email,
    $request_document,
    $request_type,
    $request_address,
    $request_metadata,
    $request_phones,
    $request_code
);

$result = $customersController->createCustomer($request);
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
$request_number = 'number4';
$request_holderName = 'holder_name2';
$request_expMonth = 10;
$request_expYear = 30;
$request_cvv = 'cvv4';
$request_billingAddress_street = 'street8';
$request_billingAddress_number = 'number4';
$request_billingAddress_zipCode = 'zip_code2';
$request_billingAddress_neighborhood = 'neighborhood4';
$request_billingAddress_city = 'city8';
$request_billingAddress_state = 'state4';
$request_billingAddress_country = 'country2';
$request_billingAddress_complement = 'complement6';
$request_billingAddress_metadata = ['key0' => 'metadata5', 'key1' => 'metadata6'];
$request_billingAddress_line1 = 'line_18';
$request_billingAddress_line2 = 'line_26';
$request_billingAddress = new Models\CreateAddressRequest(
    $request_billingAddress_street,
    $request_billingAddress_number,
    $request_billingAddress_zipCode,
    $request_billingAddress_neighborhood,
    $request_billingAddress_city,
    $request_billingAddress_state,
    $request_billingAddress_country,
    $request_billingAddress_complement,
    $request_billingAddress_metadata,
    $request_billingAddress_line1,
    $request_billingAddress_line2
);
$request_brand = 'brand0';
$request_billingAddressId = 'billing_address_id2';
$request_metadata = ['key0' => 'metadata3'];
$request_type = 'credit';
$request_options_verifyCard = false;
$request_options = new Models\CreateCardOptionsRequest(
    $request_options_verifyCard
);
$request_privateLabel = false;
$request_label = 'label6';
$request = new Models\CreateCardRequest(
    $request_number,
    $request_holderName,
    $request_expMonth,
    $request_expYear,
    $request_cvv,
    $request_billingAddress,
    $request_brand,
    $request_billingAddressId,
    $request_metadata,
    $request_type,
    $request_options,
    $request_privateLabel,
    $request_label
);

$result = $customersController->createCard($customerId, $request);
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

$result = $customersController->renewCard($customerId, $cardId);
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

$result = $customersController->getAddress($customerId, $addressId);
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

$result = $customersController->deleteAddress($customerId, $addressId);
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

$result = $customersController->getAccessToken($customerId, $tokenId);
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
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\UpdateMetadataRequest(
    $request_metadata
);

$result = $customersController->updateCustomerMetadata($customerId, $request);
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

$result = $customersController->getCard($customerId, $cardId);
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
$request = new Models\CreateAccessTokenRequest();

$result = $customersController->createAccessToken($customerId, $request);
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
| `page` | `?int` | Query, Optional | Current page the the search<br>**Default**: `1` |
| `size` | `?int` | Query, Optional | Quantity pages of the search<br>**Default**: `10` |
| `email` | `?string` | Query, Optional | Customer's email |
| `code` | `?string` | Query, Optional | Customer's code |

## Response Type

[`ListCustomersResponse`](../../doc/models/list-customers-response.md)

## Example Usage

```php
$page = 1;
$size = 10;

$result = $customersController->getCustomers(null, null, $page, $size);
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
$request = new Models\UpdateCustomerRequest();

$result = $customersController->updateCustomer($customerId, $request);
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

$result = $customersController->deleteCard($customerId, $cardId);
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

