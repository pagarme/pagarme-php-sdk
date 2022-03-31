# Tokens

```php
$tokensController = $client->getTokensController();
```

## Class Name

`TokensController`

## Methods

* [Create Token](../../doc/controllers/tokens.md#create-token)
* [Get Token](../../doc/controllers/tokens.md#get-token)


# Create Token

:information_source: **Note** This endpoint does not require authentication.

```php
function createToken(
    string $publicKey,
    CreateTokenRequest $request,
    ?string $idempotencyKey = null
): GetTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `publicKey` | `string` | Template, Required | Public key |
| `request` | [`CreateTokenRequest`](../../doc/models/create-token-request.md) | Body, Required | Request for creating a token |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetTokenResponse`](../../doc/models/get-token-response.md)

## Example Usage

```php
$publicKey = 'public_key6';
$request_type = 'card';
$request_card_number = 'number2';
$request_card_holderName = 'holder_name6';
$request_card_expMonth = 80;
$request_card_expYear = 216;
$request_card_cvv = 'cvv8';
$request_card_brand = 'brand4';
$request_card_label = 'label0';
$request_card = new Models\CreateCardTokenRequest(
    $request_card_number,
    $request_card_holderName,
    $request_card_expMonth,
    $request_card_expYear,
    $request_card_cvv,
    $request_card_brand,
    $request_card_label
);
$request = new Models\CreateTokenRequest(
    $request_type,
    $request_card
);

$result = $tokensController->createToken($publicKey, $request);
```


# Get Token

Gets a token from its id

:information_source: **Note** This endpoint does not require authentication.

```php
function getToken(string $id, string $publicKey): GetTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Token id |
| `publicKey` | `string` | Template, Required | Public key |

## Response Type

[`GetTokenResponse`](../../doc/models/get-token-response.md)

## Example Usage

```php
$id = 'id0';
$publicKey = 'public_key6';

$result = $tokensController->getToken($id, $publicKey);
```

