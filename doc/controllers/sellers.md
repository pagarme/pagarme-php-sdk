# Sellers

```php
$sellersController = $client->getSellersController();
```

## Class Name

`SellersController`

## Methods

* [Create Seller](/doc/controllers/sellers.md#create-seller)
* [Update Seller Metadata](/doc/controllers/sellers.md#update-seller-metadata)
* [Update Seller](/doc/controllers/sellers.md#update-seller)
* [Delete Seller](/doc/controllers/sellers.md#delete-seller)
* [Get Seller by Id](/doc/controllers/sellers.md#get-seller-by-id)
* [Get Sellers](/doc/controllers/sellers.md#get-sellers)


# Create Seller

```php
function createSeller(CreateSellerRequest $request, ?string $idempotencyKey = null): GetSellerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateSellerRequest`](/doc/models/create-seller-request.md) | Body, Required | Seller Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSellerResponse`](/doc/models/get-seller-response.md)

## Example Usage

```php
$request_name = 'name6';
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\CreateSellerRequest(
    $request_name,
    $request_metadata
);

$result = $sellersController->createSeller($request);
```


# Update Seller Metadata

```php
function updateSellerMetadata(
    string $sellerId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetSellerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `sellerId` | `string` | Template, Required | Seller Id |
| `request` | [`UpdateMetadataRequest`](/doc/models/update-metadata-request.md) | Body, Required | Request for updating the charge metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSellerResponse`](/doc/models/get-seller-response.md)

## Example Usage

```php
$sellerId = 'seller_id8';
$request_metadata = ['key0' => 'metadata3'];
$request = new Models\UpdateMetadataRequest(
    $request_metadata
);

$result = $sellersController->updateSellerMetadata($sellerId, $request);
```


# Update Seller

```php
function updateSeller(
    string $id,
    UpdateSellerRequest $request,
    ?string $idempotencyKey = null
): GetSellerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `request` | [`UpdateSellerRequest`](/doc/models/update-seller-request.md) | Body, Required | Update Seller model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSellerResponse`](/doc/models/get-seller-response.md)

## Example Usage

```php
$id = 'id0';
$request_name = 'name6';
$request_code = 'code4';
$request_description = 'description6';
$request_document = 'document0';
$request_status = 'status8';
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
$request = new Models\UpdateSellerRequest(
    $request_name,
    $request_code,
    $request_description,
    $request_document,
    $request_status,
    $request_type,
    $request_address,
    $request_metadata
);

$result = $sellersController->updateSeller($id, $request);
```


# Delete Seller

```php
function deleteSeller(string $sellerId, ?string $idempotencyKey = null): GetSellerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `sellerId` | `string` | Template, Required | Seller Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetSellerResponse`](/doc/models/get-seller-response.md)

## Example Usage

```php
$sellerId = 'sellerId4';

$result = $sellersController->deleteSeller($sellerId);
```


# Get Seller by Id

```php
function getSellerById(string $id): GetSellerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Seller Id |

## Response Type

[`GetSellerResponse`](/doc/models/get-seller-response.md)

## Example Usage

```php
$id = 'id0';

$result = $sellersController->getSellerById($id);
```


# Get Sellers

```php
function getSellers(
    ?int $page = null,
    ?int $size = null,
    ?string $name = null,
    ?string $document = null,
    ?string $code = null,
    ?string $status = null,
    ?string $type = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): ListSellerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `name` | `?string` | Query, Optional | - |
| `document` | `?string` | Query, Optional | - |
| `code` | `?string` | Query, Optional | - |
| `status` | `?string` | Query, Optional | - |
| `type` | `?string` | Query, Optional | - |
| `createdSince` | `?\DateTime` | Query, Optional | - |
| `createdUntil` | `?\DateTime` | Query, Optional | - |

## Response Type

[`ListSellerResponse`](/doc/models/list-seller-response.md)

## Example Usage

```php
$result = $sellersController->getSellers();
```

