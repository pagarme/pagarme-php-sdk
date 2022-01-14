# Transfers

```php
$transfersController = $client->getTransfersController();
```

## Class Name

`TransfersController`

## Methods

* [Get Transfer by Id](/doc/controllers/transfers.md#get-transfer-by-id)
* [Create Transfer](/doc/controllers/transfers.md#create-transfer)
* [Get Transfers](/doc/controllers/transfers.md#get-transfers)


# Get Transfer by Id

```php
function getTransferById(string $transferId): GetTransfer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transferId` | `string` | Template, Required | - |

## Response Type

[`GetTransfer`](/doc/models/get-transfer.md)

## Example Usage

```php
$transferId = 'transfer_id6';

$result = $transfersController->getTransferById($transferId);
```


# Create Transfer

```php
function createTransfer(CreateTransfer $request): GetTransfer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateTransfer`](/doc/models/create-transfer.md) | Body, Required | - |

## Response Type

[`GetTransfer`](/doc/models/get-transfer.md)

## Example Usage

```php
$request_amount = 242;
$request_sourceId = 'source_id0';
$request_targetId = 'target_id6';
$request = new Models\CreateTransfer(
    $request_amount,
    $request_sourceId,
    $request_targetId
);

$result = $transfersController->createTransfer($request);
```


# Get Transfers

Gets all transfers

```php
function getTransfers(): ListTransfers
```

## Response Type

[`ListTransfers`](/doc/models/list-transfers.md)

## Example Usage

```php
$result = $transfersController->getTransfers();
```

