# Recipients

```php
$recipientsController = $client->getRecipientsController();
```

## Class Name

`RecipientsController`

## Methods

* [Update Recipient](../../doc/controllers/recipients.md#update-recipient)
* [Get Withdraw by Id](../../doc/controllers/recipients.md#get-withdraw-by-id)
* [Get Recipient](../../doc/controllers/recipients.md#get-recipient)
* [Get Balance](../../doc/controllers/recipients.md#get-balance)
* [Get Recipients](../../doc/controllers/recipients.md#get-recipients)
* [Update Recipient Default Bank Account](../../doc/controllers/recipients.md#update-recipient-default-bank-account)
* [Get Transfers](../../doc/controllers/recipients.md#get-transfers)
* [Get Transfer](../../doc/controllers/recipients.md#get-transfer)
* [Create Withdraw](../../doc/controllers/recipients.md#create-withdraw)
* [Get Anticipation](../../doc/controllers/recipients.md#get-anticipation)
* [Update Recipient Transfer Settings](../../doc/controllers/recipients.md#update-recipient-transfer-settings)
* [Get Recipient by Code](../../doc/controllers/recipients.md#get-recipient-by-code)
* [Update Automatic Anticipation Settings](../../doc/controllers/recipients.md#update-automatic-anticipation-settings)
* [Create Transfer](../../doc/controllers/recipients.md#create-transfer)
* [Create Recipient](../../doc/controllers/recipients.md#create-recipient)
* [Get Default Recipient](../../doc/controllers/recipients.md#get-default-recipient)
* [Create Anticipation](../../doc/controllers/recipients.md#create-anticipation)
* [Get Anticipation Limits](../../doc/controllers/recipients.md#get-anticipation-limits)
* [Update Recipient Metadata](../../doc/controllers/recipients.md#update-recipient-metadata)
* [Get Anticipations](../../doc/controllers/recipients.md#get-anticipations)
* [Get Withdrawals](../../doc/controllers/recipients.md#get-withdrawals)
* [Create KYC Link](../../doc/controllers/recipients.md#create-kyc-link)
* [Update Recipient Code](../../doc/controllers/recipients.md#update-recipient-code)


# Update Recipient

Updates a recipient

```php
function updateRecipient(
    string $recipientId,
    UpdateRecipientRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateRecipientRequest`](../../doc/models/update-recipient-request.md) | Body, Required | Recipient data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

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

$result = $recipientsController->updateRecipient(
    $recipientId,
    $request
);
```


# Get Withdraw by Id

```php
function getWithdrawById(string $recipientId, string $withdrawalId): GetWithdrawResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | - |
| `withdrawalId` | `string` | Template, Required | - |

## Response Type

[`GetWithdrawResponse`](../../doc/models/get-withdraw-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$withdrawalId = 'withdrawal_id2';

$result = $recipientsController->getWithdrawById(
    $recipientId,
    $withdrawalId
);
```


# Get Recipient

Retrieves recipient information

```php
function getRecipient(string $recipientId): GetRecipientResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipiend id |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$result = $recipientsController->getRecipient($recipientId);
```


# Get Balance

Get balance information for a recipient

```php
function getBalance(string $recipientId): GetBalanceResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |

## Response Type

[`GetBalanceResponse`](../../doc/models/get-balance-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$result = $recipientsController->getBalance($recipientId);
```


# Get Recipients

Retrieves paginated recipients information

```php
function getRecipients(?int $page = null, ?int $size = null): ListRecipientResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |

## Response Type

[`ListRecipientResponse`](../../doc/models/list-recipient-response.md)

## Example Usage

```php
$result = $recipientsController->getRecipients();
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateRecipientBankAccountRequest`](../../doc/models/update-recipient-bank-account-request.md) | Body, Required | Bank account data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateRecipientBankAccountRequestBuilder::init(
    CreateBankAccountRequestBuilder::init(
        'holder_name0',
        'holder_type6',
        'holder_document8',
        'bank2',
        'branch_number0',
        'account_number4',
        'account_check_digit0',
        'type6',
        [
            'key0' => 'metadata1',
            'key1' => 'metadata0'
        ]
    )->build(),
    'bank_transfer'
)->build();

$result = $recipientsController->updateRecipientDefaultBankAccount(
    $recipientId,
    $request
);
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

[`ListTransferResponse`](../../doc/models/list-transfer-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$result = $recipientsController->getTransfers($recipientId);
```


# Get Transfer

Gets a transfer

```php
function getTransfer(string $recipientId, string $transferId): GetTransferResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `transferId` | `string` | Template, Required | Transfer id |

## Response Type

[`GetTransferResponse`](../../doc/models/get-transfer-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$transferId = 'transfer_id6';

$result = $recipientsController->getTransfer(
    $recipientId,
    $transferId
);
```


# Create Withdraw

```php
function createWithdraw(string $recipientId, CreateWithdrawRequest $request): GetWithdrawResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | - |
| `request` | [`CreateWithdrawRequest`](../../doc/models/create-withdraw-request.md) | Body, Required | - |

## Response Type

[`GetWithdrawResponse`](../../doc/models/get-withdraw-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = CreateWithdrawRequestBuilder::init(
    242
)->build();

$result = $recipientsController->createWithdraw(
    $recipientId,
    $request
);
```


# Get Anticipation

Gets an anticipation

```php
function getAnticipation(string $recipientId, string $anticipationId): GetAnticipationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `anticipationId` | `string` | Template, Required | Anticipation id |

## Response Type

[`GetAnticipationResponse`](../../doc/models/get-anticipation-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$anticipationId = 'anticipation_id0';

$result = $recipientsController->getAnticipation(
    $recipientId,
    $anticipationId
);
```


# Update Recipient Transfer Settings

```php
function updateRecipientTransferSettings(
    string $recipientId,
    UpdateTransferSettingsRequest $request,
    ?string $idempotencyKey = null
): GetRecipientResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient Identificator |
| `request` | [`UpdateTransferSettingsRequest`](../../doc/models/update-transfer-settings-request.md) | Body, Required | - |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateTransferSettingsRequestBuilder::init(
    'transfer_enabled2',
    'transfer_interval6',
    'transfer_day6'
)->build();

$result = $recipientsController->updateRecipientTransferSettings(
    $recipientId,
    $request
);
```


# Get Recipient by Code

Retrieves recipient information

```php
function getRecipientByCode(string $code): GetRecipientResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `code` | `string` | Template, Required | Recipient code |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$code = 'code8';

$result = $recipientsController->getRecipientByCode($code);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateAutomaticAnticipationSettingsRequest`](../../doc/models/update-automatic-anticipation-settings-request.md) | Body, Required | Metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateAutomaticAnticipationSettingsRequestBuilder::init()->build();

$result = $recipientsController->updateAutomaticAnticipationSettings(
    $recipientId,
    $request
);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient Id |
| `request` | [`CreateTransferRequest`](../../doc/models/create-transfer-request.md) | Body, Required | Transfer data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

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

$result = $recipientsController->createTransfer(
    $recipientId,
    $request
);
```


# Create Recipient

Creates a new recipient

```php
function createRecipient(CreateRecipientRequest $request, ?string $idempotencyKey = null): GetRecipientResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateRecipientRequest`](../../doc/models/create-recipient-request.md) | Body, Required | Recipient data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$request = CreateRecipientRequestBuilder::init(
    CreateBankAccountRequestBuilder::init(
        'holder_name4',
        'holder_type0',
        'holder_document2',
        'bank6',
        'branch_number4',
        'account_number8',
        'account_check_digit4',
        'type2',
        [
            'key0' => 'metadata5',
            'key1' => 'metadata4',
            'key2' => 'metadata3'
        ]
    )->build(),
    [
        'key0' => 'metadata3'
    ],
    'code4',
    'bank_transfer'
)->build();

$result = $recipientsController->createRecipient($request);
```


# Get Default Recipient

```php
function getDefaultRecipient(): GetRecipientResponse
```

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$result = $recipientsController->getDefaultRecipient();
```


# Create Anticipation

Creates an anticipation

```php
function createAnticipation(
    string $recipientId,
    CreateAnticipationRequest $request,
    ?string $idempotencyKey = null
): GetAnticipationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`CreateAnticipationRequest`](../../doc/models/create-anticipation-request.md) | Body, Required | Anticipation data |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetAnticipationResponse`](../../doc/models/get-anticipation-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = CreateAnticipationRequestBuilder::init(
    242,
    'timeframe8',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();

$result = $recipientsController->createAnticipation(
    $recipientId,
    $request
);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `timeframe` | `string` | Query, Required | Timeframe |
| `paymentDate` | `DateTime` | Query, Required | Anticipation payment date |

## Response Type

[`GetAnticipationLimitResponse`](../../doc/models/get-anticipation-limit-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$timeframe = 'timeframe2';

$paymentDate = DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z');

$result = $recipientsController->getAnticipationLimits(
    $recipientId,
    $timeframe,
    $paymentDate
);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$result = $recipientsController->updateRecipientMetadata(
    $recipientId,
    $request
);
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

[`ListAnticipationResponse`](../../doc/models/list-anticipation-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$result = $recipientsController->getAnticipations($recipientId);
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

[`ListWithdrawals`](../../doc/models/list-withdrawals.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$result = $recipientsController->getWithdrawals($recipientId);
```


# Create KYC Link

Create a KYC link

```php
function createKYCLink(string $recipientId): CreateKYCLinkResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |

## Response Type

[`CreateKYCLinkResponse`](../../doc/models/create-kyc-link-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$result = $recipientsController->createKYCLink($recipientId);
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

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recipientId` | `string` | Template, Required | Recipient id |
| `request` | [`UpdateRecipientCodeRequest`](../../doc/models/update-recipient-code-request.md) | Body, Required | UpdateRecipientCodeRequest |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetRecipientResponse`](../../doc/models/get-recipient-response.md)

## Example Usage

```php
$recipientId = 'recipient_id0';

$request = UpdateRecipientCodeRequestBuilder::init(
    'code4'
)->build();

$result = $recipientsController->updateRecipientCode(
    $recipientId,
    $request
);
```

