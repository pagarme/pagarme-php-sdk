<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;
use PagarmeApiSDKLib\Exceptions\ApiException;
use PagarmeApiSDKLib\Models\CreateAnticipationRequest;
use PagarmeApiSDKLib\Models\CreateRecipientRequest;
use PagarmeApiSDKLib\Models\CreateTransferRequest;
use PagarmeApiSDKLib\Models\CreateWithdrawRequest;
use PagarmeApiSDKLib\Models\GetAnticipationLimitResponse;
use PagarmeApiSDKLib\Models\GetAnticipationResponse;
use PagarmeApiSDKLib\Models\GetBalanceResponse;
use PagarmeApiSDKLib\Models\GetRecipientResponse;
use PagarmeApiSDKLib\Models\GetTransferResponse;
use PagarmeApiSDKLib\Models\GetWithdrawResponse;
use PagarmeApiSDKLib\Models\ListAnticipationResponse;
use PagarmeApiSDKLib\Models\ListRecipientResponse;
use PagarmeApiSDKLib\Models\ListTransferResponse;
use PagarmeApiSDKLib\Models\ListWithdrawals;
use PagarmeApiSDKLib\Models\UpdateAutomaticAnticipationSettingsRequest;
use PagarmeApiSDKLib\Models\UpdateMetadataRequest;
use PagarmeApiSDKLib\Models\UpdateRecipientBankAccountRequest;
use PagarmeApiSDKLib\Models\UpdateRecipientRequest;
use PagarmeApiSDKLib\Models\UpdateTransferSettingsRequest;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

class RecipientsController extends BaseController
{
    /**
     * Updates a recipient
     *
     * @param string $recipientId Recipient id
     * @param UpdateRecipientRequest $request Recipient data
     * @param string|null $idempotencyKey
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateRecipient(
        string $recipientId,
        UpdateRecipientRequest $request,
        ?string $idempotencyKey = null
    ): GetRecipientResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/recipients/{recipient_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates an anticipation
     *
     * @param string $recipientId Recipient id
     * @param CreateAnticipationRequest $request Anticipation data
     * @param string|null $idempotencyKey
     *
     * @return GetAnticipationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createAnticipation(
        string $recipientId,
        CreateAnticipationRequest $request,
        ?string $idempotencyKey = null
    ): GetAnticipationResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/recipients/{recipient_id}/anticipations')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetAnticipationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets the anticipation limits for a recipient
     *
     * @param string $recipientId Recipient id
     * @param string $timeframe Timeframe
     * @param \DateTime $paymentDate Anticipation payment date
     *
     * @return GetAnticipationLimitResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getAnticipationLimits(
        string $recipientId,
        string $timeframe,
        \DateTime $paymentDate
    ): GetAnticipationLimitResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/{recipient_id}/anticipation_limits')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                QueryParam::init('timeframe', $timeframe),
                QueryParam::init('payment_date', $paymentDate)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(GetAnticipationLimitResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves paginated recipients information
     *
     * @param int|null $page Page number
     * @param int|null $size Page size
     *
     * @return ListRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getRecipients(?int $page = null, ?int $size = null): ListRecipientResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients')
            ->auth('global')
            ->parameters(QueryParam::init('page', $page), QueryParam::init('size', $size));

        $_resHandler = $this->responseHandler()->type(ListRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $recipientId
     * @param string $withdrawalId
     *
     * @return GetWithdrawResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getWithdrawById(string $recipientId, string $withdrawalId): GetWithdrawResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/recipients/{recipient_id}/withdrawals/{withdrawal_id}'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                TemplateParam::init('withdrawal_id', $withdrawalId)
            );

        $_resHandler = $this->responseHandler()->type(GetWithdrawResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the default bank account from a recipient
     *
     * @param string $recipientId Recipient id
     * @param UpdateRecipientBankAccountRequest $request Bank account data
     * @param string|null $idempotencyKey
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateRecipientDefaultBankAccount(
        string $recipientId,
        UpdateRecipientBankAccountRequest $request,
        ?string $idempotencyKey = null
    ): GetRecipientResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/recipients/{recipient_id}/default-bank-account'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates recipient metadata
     *
     * @param string $recipientId Recipient id
     * @param UpdateMetadataRequest $request Metadata
     * @param string|null $idempotencyKey
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateRecipientMetadata(
        string $recipientId,
        UpdateMetadataRequest $request,
        ?string $idempotencyKey = null
    ): GetRecipientResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/recipients/{recipient_id}/metadata')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets a paginated list of transfers for the recipient
     *
     * @param string $recipientId Recipient id
     * @param int|null $page Page number
     * @param int|null $size Page size
     * @param string|null $status Filter for transfer status
     * @param \DateTime|null $createdSince Filter for start range of transfer creation date
     * @param \DateTime|null $createdUntil Filter for end range of transfer creation date
     *
     * @return ListTransferResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getTransfers(
        string $recipientId,
        ?int $page = null,
        ?int $size = null,
        ?string $status = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null
    ): ListTransferResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/{recipient_id}/transfers')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                QueryParam::init('page', $page),
                QueryParam::init('size', $size),
                QueryParam::init('status', $status),
                QueryParam::init('created_since', $createdSince)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('created_until', $createdUntil)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(ListTransferResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets a transfer
     *
     * @param string $recipientId Recipient id
     * @param string $transferId Transfer id
     *
     * @return GetTransferResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getTransfer(string $recipientId, string $transferId): GetTransferResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/recipients/{recipient_id}/transfers/{transfer_id}'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                TemplateParam::init('transfer_id', $transferId)
            );

        $_resHandler = $this->responseHandler()->type(GetTransferResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $recipientId
     * @param CreateWithdrawRequest $request
     *
     * @return GetWithdrawResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createWithdraw(string $recipientId, CreateWithdrawRequest $request): GetWithdrawResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/recipients/{recipient_id}/withdrawals')
            ->auth('global')
            ->parameters(TemplateParam::init('recipient_id', $recipientId), BodyParam::init($request));

        $_resHandler = $this->responseHandler()->type(GetWithdrawResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates recipient metadata
     *
     * @param string $recipientId Recipient id
     * @param UpdateAutomaticAnticipationSettingsRequest $request Metadata
     * @param string|null $idempotencyKey
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateAutomaticAnticipationSettings(
        string $recipientId,
        UpdateAutomaticAnticipationSettingsRequest $request,
        ?string $idempotencyKey = null
    ): GetRecipientResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/recipients/{recipient_id}/automatic-anticipation-settings'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets an anticipation
     *
     * @param string $recipientId Recipient id
     * @param string $anticipationId Anticipation id
     *
     * @return GetAnticipationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getAnticipation(string $recipientId, string $anticipationId): GetAnticipationResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/recipients/{recipient_id}/anticipations/{anticipation_id}'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                TemplateParam::init('anticipation_id', $anticipationId)
            );

        $_resHandler = $this->responseHandler()->type(GetAnticipationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $recipientId Recipient Identificator
     * @param UpdateTransferSettingsRequest $request
     * @param string|null $idempotencyKey
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateRecipientTransferSettings(
        string $recipientId,
        UpdateTransferSettingsRequest $request,
        ?string $idempotencyKey = null
    ): GetRecipientResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/recipients/{recipient_id}/transfer-settings')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a paginated list of anticipations from a recipient
     *
     * @param string $recipientId Recipient id
     * @param int|null $page Page number
     * @param int|null $size Page size
     * @param string|null $status Filter for anticipation status
     * @param string|null $timeframe Filter for anticipation timeframe
     * @param \DateTime|null $paymentDateSince Filter for start range for anticipation payment date
     * @param \DateTime|null $paymentDateUntil Filter for end range for anticipation payment date
     * @param \DateTime|null $createdSince Filter for start range for anticipation creation date
     * @param \DateTime|null $createdUntil Filter for end range for anticipation creation date
     *
     * @return ListAnticipationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getAnticipations(
        string $recipientId,
        ?int $page = null,
        ?int $size = null,
        ?string $status = null,
        ?string $timeframe = null,
        ?\DateTime $paymentDateSince = null,
        ?\DateTime $paymentDateUntil = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null
    ): ListAnticipationResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/{recipient_id}/anticipations')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                QueryParam::init('page', $page),
                QueryParam::init('size', $size),
                QueryParam::init('status', $status),
                QueryParam::init('timeframe', $timeframe),
                QueryParam::init('payment_date_since', $paymentDateSince)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('payment_date_until', $paymentDateUntil)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('created_since', $createdSince)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('created_until', $createdUntil)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(ListAnticipationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves recipient information
     *
     * @param string $recipientId Recipiend id
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getRecipient(string $recipientId): GetRecipientResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/{recipient_id}')
            ->auth('global')
            ->parameters(TemplateParam::init('recipient_id', $recipientId));

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get balance information for a recipient
     *
     * @param string $recipientId Recipient id
     *
     * @return GetBalanceResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getBalance(string $recipientId): GetBalanceResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/{recipient_id}/balance')
            ->auth('global')
            ->parameters(TemplateParam::init('recipient_id', $recipientId));

        $_resHandler = $this->responseHandler()->type(GetBalanceResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets a paginated list of transfers for the recipient
     *
     * @param string $recipientId
     * @param int|null $page
     * @param int|null $size
     * @param string|null $status
     * @param \DateTime|null $createdSince
     * @param \DateTime|null $createdUntil
     *
     * @return ListWithdrawals Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getWithdrawals(
        string $recipientId,
        ?int $page = null,
        ?int $size = null,
        ?string $status = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null
    ): ListWithdrawals {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/{recipient_id}/withdrawals')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                QueryParam::init('page', $page),
                QueryParam::init('size', $size),
                QueryParam::init('status', $status),
                QueryParam::init('created_since', $createdSince)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('created_until', $createdUntil)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(ListWithdrawals::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a transfer for a recipient
     *
     * @param string $recipientId Recipient Id
     * @param CreateTransferRequest $request Transfer data
     * @param string|null $idempotencyKey
     *
     * @return GetTransferResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createTransfer(
        string $recipientId,
        CreateTransferRequest $request,
        ?string $idempotencyKey = null
    ): GetTransferResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/recipients/{recipient_id}/transfers')
            ->auth('global')
            ->parameters(
                TemplateParam::init('recipient_id', $recipientId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetTransferResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new recipient
     *
     * @param CreateRecipientRequest $request Recipient data
     * @param string|null $idempotencyKey
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createRecipient(
        CreateRecipientRequest $request,
        ?string $idempotencyKey = null
    ): GetRecipientResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/recipients')
            ->auth('global')
            ->parameters(BodyParam::init($request), HeaderParam::init('idempotency-key', $idempotencyKey));

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves recipient information
     *
     * @param string $code Recipient code
     *
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getRecipientByCode(string $code): GetRecipientResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/{code}')
            ->auth('global')
            ->parameters(TemplateParam::init('code', $code));

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @return GetRecipientResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getDefaultRecipient(): GetRecipientResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/recipients/default')->auth('global');

        $_resHandler = $this->responseHandler()->type(GetRecipientResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
