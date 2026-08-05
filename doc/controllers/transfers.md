# Transfers

```php
$transfersController = $client->getTransfersController();
```

## Class Name

`TransfersController`

## Methods

* [Create Transfer](../../doc/controllers/transfers.md#create-transfer)
* [Get Transfer by Id](../../doc/controllers/transfers.md#get-transfer-by-id)
* [Get Transfers](../../doc/controllers/transfers.md#get-transfers)


# Create Transfer

```php
function createTransfer(CreateTransfer $request): GetTransfer
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateTransfer`](../../doc/models/create-transfer.md) | Body, Required | - |

## Response Type

**200**

[`GetTransfer`](../../doc/models/get-transfer.md)

## Example Usage

```php
$request = CreateTransferBuilder::init(
    242,
    'source_id0',
    'target_id6'
)->build();

$transfersController = $client->getTransfersController();

try {
    $result = $transfersController->createTransfer($request);
    echo 'GetTransfer:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Transfer by Id

```php
function getTransferById(string $transferId): GetTransfer
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transferId` | `string` | Template, Required | - |

## Response Type

**200**

[`GetTransfer`](../../doc/models/get-transfer.md)

## Example Usage

```php
$transferId = 'transfer_id6';

$transfersController = $client->getTransfersController();

try {
    $result = $transfersController->getTransferById($transferId);
    echo 'GetTransfer:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Transfers

Gets all transfers

```php
function getTransfers(): ListTransfers
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Response Type

**200**

[`ListTransfers`](../../doc/models/list-transfers.md)

## Example Usage

```php
$transfersController = $client->getTransfersController();

try {
    $result = $transfersController->getTransfers();
    echo 'ListTransfers:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

