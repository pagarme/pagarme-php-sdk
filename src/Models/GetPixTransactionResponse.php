<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Response object when getting a pix transaction
 *
 * @discriminator transaction_type
 * @discriminatorType pix
 */
class GetPixTransactionResponse extends GetTransactionResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $qrCode;

    /**
     * @var string
     */
    private $qrCodeUrl;

    /**
     * @var \DateTime
     */
    private $expiresAt;

    /**
     * @var PixAdditionalInformation[]
     */
    private $additionalInformation;

    /**
     * @var string|null
     */
    private $endToEndId;

    /**
     * @var GetPixPayerResponse
     */
    private $payer;

    /**
     * @param string $gatewayId
     * @param int $amount
     * @param string $status
     * @param bool $success
     * @param \DateTime $createdAt
     * @param \DateTime $updatedAt
     * @param int $attemptCount
     * @param int $maxAttempts
     * @param GetSplitResponse[] $splits
     * @param string $id
     * @param GetGatewayResponseResponse $gatewayResponse
     * @param GetAntifraudResponse $antifraudResponse
     * @param GetSplitResponse[] $split
     * @param string $qrCode
     * @param string $qrCodeUrl
     * @param \DateTime $expiresAt
     * @param PixAdditionalInformation[] $additionalInformation
     * @param GetPixPayerResponse $payer
     */
    public function __construct(
        string $gatewayId,
        int $amount,
        string $status,
        bool $success,
        \DateTime $createdAt,
        \DateTime $updatedAt,
        int $attemptCount,
        int $maxAttempts,
        array $splits,
        string $id,
        GetGatewayResponseResponse $gatewayResponse,
        GetAntifraudResponse $antifraudResponse,
        array $split,
        string $qrCode,
        string $qrCodeUrl,
        \DateTime $expiresAt,
        array $additionalInformation,
        GetPixPayerResponse $payer
    ) {
        parent::__construct(
            $gatewayId,
            $amount,
            $status,
            $success,
            $createdAt,
            $updatedAt,
            $attemptCount,
            $maxAttempts,
            $splits,
            $id,
            $gatewayResponse,
            $antifraudResponse,
            $split
        );
        $this->qrCode = $qrCode;
        $this->qrCodeUrl = $qrCodeUrl;
        $this->expiresAt = $expiresAt;
        $this->additionalInformation = $additionalInformation;
        $this->payer = $payer;
    }

    /**
     * Returns Qr Code.
     */
    public function getQrCode(): string
    {
        return $this->qrCode;
    }

    /**
     * Sets Qr Code.
     *
     * @required
     * @maps qr_code
     */
    public function setQrCode(string $qrCode): void
    {
        $this->qrCode = $qrCode;
    }

    /**
     * Returns Qr Code Url.
     */
    public function getQrCodeUrl(): string
    {
        return $this->qrCodeUrl;
    }

    /**
     * Sets Qr Code Url.
     *
     * @required
     * @maps qr_code_url
     */
    public function setQrCodeUrl(string $qrCodeUrl): void
    {
        $this->qrCodeUrl = $qrCodeUrl;
    }

    /**
     * Returns Expires At.
     */
    public function getExpiresAt(): \DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     *
     * @required
     * @maps expires_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(\DateTime $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Additional Information.
     *
     * @return PixAdditionalInformation[]
     */
    public function getAdditionalInformation(): array
    {
        return $this->additionalInformation;
    }

    /**
     * Sets Additional Information.
     *
     * @required
     * @maps additional_information
     *
     * @param PixAdditionalInformation[] $additionalInformation
     */
    public function setAdditionalInformation(array $additionalInformation): void
    {
        $this->additionalInformation = $additionalInformation;
    }

    /**
     * Returns End to End Id.
     */
    public function getEndToEndId(): ?string
    {
        return $this->endToEndId;
    }

    /**
     * Sets End to End Id.
     *
     * @maps end_to_end_id
     */
    public function setEndToEndId(?string $endToEndId): void
    {
        $this->endToEndId = $endToEndId;
    }

    /**
     * Returns Payer.
     */
    public function getPayer(): GetPixPayerResponse
    {
        return $this->payer;
    }

    /**
     * Sets Payer.
     *
     * @required
     * @maps payer
     */
    public function setPayer(GetPixPayerResponse $payer): void
    {
        $this->payer = $payer;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['qr_code']                = $this->qrCode;
        $json['qr_code_url']            = $this->qrCodeUrl;
        $json['expires_at']             = DateTimeHelper::toRfc3339DateTime($this->expiresAt);
        $json['additional_information'] = $this->additionalInformation;
        $json['end_to_end_id']          = $this->endToEndId;
        $json['payer']                  = $this->payer;
        $json = array_merge($json, parent::jsonSerialize(true));

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
