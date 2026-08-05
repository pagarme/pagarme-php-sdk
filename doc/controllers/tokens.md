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

**200**

[`GetTokenResponse`](../../doc/models/get-token-response.md)

## Example Usage

```php
$publicKey = 'public_key6';

$request = CreateTokenRequestBuilder::init(
    'card',
    null
)->build();

$tokensController = $client->getTokensController();

try {
    $result = $tokensController->createToken(
        $publicKey,
        $request
    );
    echo 'GetTokenResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

**200**

[`GetTokenResponse`](../../doc/models/get-token-response.md)

## Example Usage

```php
$id = 'id0';

$publicKey = 'public_key6';

$tokensController = $client->getTokensController();

try {
    $result = $tokensController->getToken(
        $id,
        $publicKey
    );
    echo 'GetTokenResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

