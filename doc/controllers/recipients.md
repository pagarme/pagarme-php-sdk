# Recipients

```php
$recipientsController = $client->getRecipientsController();
```

## Class Name

`RecipientsController`

## Methods

* [Create Anticipation](../../doc/controllers/recipients.md#create-anticipation)
* [Create KYC Link](../../doc/controllers/recipients.md#create-kyc-link)
* [Create Recipient](../../doc/controllers/recipients.md#create-recipient)
* [Create Transfer](../../doc/controllers/recipients.md#create-transfer)
* [Create Withdraw](../../doc/controllers/recipients.md#create-withdraw)
* [Get Anticipation](../../doc/controllers/recipients.md#get-anticipation)
* [Get Anticipation Limits](../../doc/controllers/recipients.md#get-anticipation-limits)
* [Get Anticipations](../../doc/controllers/recipients.md#get-anticipations)
* [Get Balance](../../doc/controllers/recipients.md#get-balance)
* [Get Default Recipient](../../doc/controllers/recipients.md#get-default-recipient)
* [Get Recipient](../../doc/controllers/recipients.md#get-recipient)
* [Get Recipient by Code](../../doc/controllers/recipients.md#get-recipient-by-code)
* [Get Recipients](../../doc/controllers/recipients.md#get-recipients)
* [Get Transfer](../../doc/controllers/recipients.md#get-transfer)
* [Get Transfers](../../doc/controllers/recipients.md#get-transfers)
* [Get Withdraw by Id](../../doc/controllers/recipients.md#get-withdraw-by-id)
* [Get Withdrawals](../../doc/controllers/recipients.md#get-withdrawals)
* [Update Automatic Anticipation Settings](../../doc/controllers/recipients.md#update-automatic-anticipation-settings)
* [Update Recipient](../../doc/controllers/recipients.md#update-recipient)
* [Update Recipient Code](../../doc/controllers/recipients.md#update-recipient-code)
* [Update Recipient Default Bank Account](../../doc/controllers/recipients.md#update-recipient-default-bank-account)
* [Update Recipient Metadata](../../doc/controllers/recipients.md#update-recipient-metadata)
* [Update Recipient Transfer Settings](../../doc/controllers/recipients.md#update-recipient-transfer-settings)


# Create Anticipation

Creates an anticipation

```php
function createAnticipation(
    string $recipientId,
    CreateAnticipationRequest $request,
    ?string $idempotencyKey = null
): GetAnticipationResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`CreateAnticipationRequest`](../../doc/models/create-anticipation-request.md) | Body, Required | Anticipation data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetAnticipationResponse`](../../doc/models/get-anticipation-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = CreateAnticipationRequestBuilder::init(
    242,
    'timeframe8',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->createAnticipation(
        $recipientId,
        $request
    );
    echo 'GetAnticipationResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create KYC Link

Create a KYC link

```php
function createKYCLink(string $recipientId): CreateKYCLinkResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |

## Response Type

**200**

[`CreateKYCLinkResponse`](../../doc/models/create-kyc-link-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->createKYCLink($recipientId);
    echo 'CreateKYCLinkResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Recipient

Creates a new recipient

```php
function createRecipient(CreateRecipientRequest $request, ?string $idempotencyKey = null): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateRecipientRequest`](../../doc/models/create-recipient-request.md) | Body, Required | Recipient data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$request = CreateRecipientRequestBuilder::init(
    null,
    [],
    '',
    'bank_transfer'
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->createRecipient($request);
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Transfer

Creates a transfer for a recipient

```php
function createTransfer(
    string $recipientId,
    CreateTransferRequest $request,
    ?string $idempotencyKey = null
): GetTransferResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient Id |
| `request` | [`CreateTransferRequest`](../../doc/models/create-transfer-request.md) | Body, Required | Transfer data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetTransferResponse`](../../doc/models/get-transfer-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = CreateTransferRequestBuilder::init(
    242,
    [
        'key0' => 'metadata3'
    ]
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->createTransfer(
        $recipientId,
        $request
    );
    echo 'GetTransferResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Withdraw

```php
function createWithdraw(string $recipientId, CreateWithdrawRequest $request): GetWithdrawResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | - |
| `request` | [`CreateWithdrawRequest`](../../doc/models/create-withdraw-request.md) | Body, Required | - |

## Response Type

**200**

[`GetWithdrawResponse`](../../doc/models/get-withdraw-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = CreateWithdrawRequestBuilder::init(
    242
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->createWithdraw(
        $recipientId,
        $request
    );
    echo 'GetWithdrawResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Anticipation

Gets an anticipation

```php
function getAnticipation(string $recipientId, string $anticipationId): GetAnticipationResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `anticipationId` | `string` | Template, Required | Anticipation id |

## Response Type

**200**

[`GetAnticipationResponse`](../../doc/models/get-anticipation-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$anticipationId = 'anticipation_id0';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getAnticipation(
        $recipientId,
        $anticipationId
    );
    echo 'GetAnticipationResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Anticipation Limits

Gets the anticipation limits for a recipient

```php
function getAnticipationLimits(
    string $recipientId,
    string $timeframe,
    \DateTime $paymentDate
): GetAnticipationLimitResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `timeframe` | `string` | Query, Required | Timeframe |
| `paymentDate` | `DateTime` | Query, Required | Anticipation payment date |

## Response Type

**200**

[`GetAnticipationLimitResponse`](../../doc/models/get-anticipation-limit-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$timeframe = 'timeframe2';

$paymentDate = DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z');

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getAnticipationLimits(
        $recipientId,
        $timeframe,
        $paymentDate
    );
    echo 'GetAnticipationLimitResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Anticipations

Retrieves a paginated list of anticipations from a recipient

```php
function getAnticipations(
    string $recipientId,
    ?int $page = null,
    ?int $size = null,
    ?string $status = null,
    ?string $timeframe = null,
    ?\DateTime $paymentDateSince = null,
    ?\DateTime $paymentDateUntil = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): ListAnticipationResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `status` | `?string` | Query, Optional | Filter for anticipation status |
| `timeframe` | `?string` | Query, Optional | Filter for anticipation timeframe |
| `paymentDateSince` | `?DateTime` | Query, Optional | Filter for start range for anticipation payment date |
| `paymentDateUntil` | `?DateTime` | Query, Optional | Filter for end range for anticipation payment date |
| `createdSince` | `?DateTime` | Query, Optional | Filter for start range for anticipation creation date |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for end range for anticipation creation date |

## Response Type

**200**

[`ListAnticipationResponse`](../../doc/models/list-anticipation-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getAnticipations($recipientId);
    echo 'ListAnticipationResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Balance

Get balance information for a recipient

```php
function getBalance(string $recipientId): GetBalanceResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |

## Response Type

**200**

[`GetBalanceResponse`](../../doc/models/get-balance-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getBalance($recipientId);
    echo 'GetBalanceResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Default Recipient

```php
function getDefaultRecipient(): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getDefaultRecipient();
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Recipient

Retrieves recipient information

```php
function getRecipient(string $recipientId): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipiend id |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getRecipient($recipientId);
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Recipient by Code

Retrieves recipient information

```php
function getRecipientByCode(string $code): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `code` | `string` | Template, Required | Recipient code |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$code = 'code8';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getRecipientByCode($code);
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Recipients

Retrieves paginated recipients information

```php
function getRecipients(?int $page = null, ?int $size = null): ListRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

**200**

[`ListRecipientResponse`](../../doc/models/list-recipient-response.md)

## Example Usage

```php
$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getRecipients();
    echo 'ListRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Transfer

Gets a transfer

```php
function getTransfer(string $recipientId, string $transferId): GetTransferResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `transferId` | `string` | Template, Required | Transfer id |

## Response Type

**200**

[`GetTransferResponse`](../../doc/models/get-transfer-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$transferId = 'transfer_id6';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getTransfer(
        $recipientId,
        $transferId
    );
    echo 'GetTransferResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Transfers

Gets a paginated list of transfers for the recipient

```php
function getTransfers(
    string $recipientId,
    ?int $page = null,
    ?int $size = null,
    ?string $status = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): ListTransferResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `status` | `?string` | Query, Optional | Filter for transfer status |
| `createdSince` | `?DateTime` | Query, Optional | Filter for start range of transfer creation date |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for end range of transfer creation date |

## Response Type

**200**

[`ListTransferResponse`](../../doc/models/list-transfer-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getTransfers($recipientId);
    echo 'ListTransferResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Withdraw by Id

```php
function getWithdrawById(string $recipientId, string $withdrawalId): GetWithdrawResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | - |
| `withdrawalId` | `string` | Template, Required | - |

## Response Type

**200**

[`GetWithdrawResponse`](../../doc/models/get-withdraw-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$withdrawalId = 'withdrawal_id2';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getWithdrawById(
        $recipientId,
        $withdrawalId
    );
    echo 'GetWithdrawResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Get Withdrawals

Gets a paginated list of transfers for the recipient

```php
function getWithdrawals(
    string $recipientId,
    ?int $page = null,
    ?int $size = null,
    ?string $status = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null
): ListWithdrawals
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | - |
| `page` | `?int` | Query, Optional | - |
| `size` | `?int` | Query, Optional | - |
| `status` | `?string` | Query, Optional | - |
| `createdSince` | `?DateTime` | Query, Optional | - |
| `createdUntil` | `?DateTime` | Query, Optional | - |

## Response Type

**200**

[`ListWithdrawals`](../../doc/models/list-withdrawals.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->getWithdrawals($recipientId);
    echo 'ListWithdrawals:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Automatic Anticipation Settings

Updates recipient metadata

```php
function updateAutomaticAnticipationSettings(
    string $recipientId,
    UpdateAutomaticAnticipationSettingsRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateAutomaticAnticipationSettingsRequest`](../../doc/models/update-automatic-anticipation-settings-request.md) | Body, Required | Metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateAutomaticAnticipationSettingsRequestBuilder::init()->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->updateAutomaticAnticipationSettings(
        $recipientId,
        $request
    );
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Recipient

Updates a recipient

```php
function updateRecipient(
    string $recipientId,
    UpdateRecipientRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateRecipientRequest`](../../doc/models/update-recipient-request.md) | Body, Required | Recipient data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateRecipientRequestBuilder::init(
    'name6',
    'email0',
    'description6',
    'type4',
    'status8',
    [
        'key0' => 'metadata3'
    ]
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->updateRecipient(
        $recipientId,
        $request
    );
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Recipient Code

Updates recipient code

```php
function updateRecipientCode(
    string $recipientId,
    UpdateRecipientCodeRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateRecipientCodeRequest`](../../doc/models/update-recipient-code-request.md) | Body, Required | UpdateRecipientCodeRequest |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateRecipientCodeRequestBuilder::init(
    'code4'
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->updateRecipientCode(
        $recipientId,
        $request
    );
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Recipient Default Bank Account

Updates the default bank account from a recipient

```php
function updateRecipientDefaultBankAccount(
    string $recipientId,
    UpdateRecipientBankAccountRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateRecipientBankAccountRequest`](../../doc/models/update-recipient-bank-account-request.md) | Body, Required | Bank account data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateRecipientBankAccountRequestBuilder::init(
    null,
    'bank_transfer'
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->updateRecipientDefaultBankAccount(
        $recipientId,
        $request
    );
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Recipient Metadata

Updates recipient metadata

```php
function updateRecipientMetadata(
    string $recipientId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->updateRecipientMetadata(
        $recipientId,
        $request
    );
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Update Recipient Transfer Settings

```php
function updateRecipientTransferSettings(
    string $recipientId,
    UpdateTransferSettingsRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Authentication

This endpoint requires [httpBasic](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient Identificator |
| `request` | [`UpdateTransferSettingsRequest`](../../doc/models/update-transfer-settings-request.md) | Body, Required | - |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

**200**

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateTransferSettingsRequestBuilder::init(
    'transfer_enabled2',
    'transfer_interval6',
    'transfer_day6'
)->build();

$recipientsController = $client->getRecipientsController();

try {
    $result = $recipientsController->updateRecipientTransferSettings(
        $recipientId,
        $request
    );
    echo 'GetRecipientResponse:';
    var_dump($result);
} catch (ErrorException $exp) {
    echo 'Caught ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

