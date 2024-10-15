# Tokens

```php
$tokensController = $client->getTokensController();
```

## Class Name

`TokensController`

## Methods

* [Get Token](../../doc/controllers/tokens.md#get-token)
* [Create Token](../../doc/controllers/tokens.md#create-token)


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

$result = $tokensController->getToken(
    $id,
    $publicKey
);
```


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

$request = CreateTokenRequestBuilder::init(
    'card',
    CreateCardTokenRequestBuilder::init(
        'number6',
        'holder_name2',
        228,
        68,
        'cvv4',
        'brand0',
        'label6'
    )->build()
)->build();

$result = $tokensController->createToken(
    $publicKey,
    $request
);
```

