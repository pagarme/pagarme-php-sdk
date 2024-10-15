# Transfers

```php
$transfersController = $client->getTransfersController();
```

## Class Name

`TransfersController`

## Methods

* [Get Transfer by Id](../../doc/controllers/transfers.md#get-transfer-by-id)
* [Get Transfers](../../doc/controllers/transfers.md#get-transfers)
* [Create Transfer](../../doc/controllers/transfers.md#create-transfer)


# Get Transfer by Id

```php
function getTransferById(string $transferId): GetTransfer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transferId` | `string` | Template, Required | - |

## Response Type

[`GetTransfer`](../../doc/models/get-transfer.md)

## Example Usage

```php
$transferId = 'transfer_id6';

$result = $transfersController->getTransferById($transferId);
```


# Get Transfers

Gets all transfers

```php
function getTransfers(): ListTransfers
```

## Response Type

[`ListTransfers`](../../doc/models/list-transfers.md)

## Example Usage

```php
$result = $transfersController->getTransfers();
```


# Create Transfer

```php
function createTransfer(CreateTransfer $request): GetTransfer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateTransfer`](../../doc/models/create-transfer.md) | Body, Required | - |

## Response Type

[`GetTransfer`](../../doc/models/get-transfer.md)

## Example Usage

```php
$request = CreateTransferBuilder::init(
    242,
    'source_id0',
    'target_id6'
)->build();

$result = $transfersController->createTransfer($request);
```

