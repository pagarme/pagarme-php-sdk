<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Response object for getting a credit card transaction
 *
 * @discriminator transaction_type
 * @discriminatorType credit_card
 */
class GetCreditCardTransactionResponse extends GetTransactionResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $statementDescriptor = [];

    /**
     * @var string|null
     */
    private $acquirerName;

    /**
     * @var array
     */
    private $acquirerAffiliationCode = [];

    /**
     * @var string|null
     */
    private $acquirerTid;

    /**
     * @var string|null
     */
    private $acquirerNsu;

    /**
     * @var array
     */
    private $acquirerAuthCode = [];

    /**
     * @var array
     */
    private $operationType = [];

    /**
     * @var array
     */
    private $card = [];

    /**
     * @var array
     */
    private $acquirerMessage = [];

    /**
     * @var array
     */
    private $acquirerReturnCode = [];

    /**
     * @var array
     */
    private $installments = [];

    /**
     * @var array
     */
    private $threedAuthenticationUrl = [];

    /**
     * @var array
     */
    private $fundingSource = [];

    /**
     * @var array
     */
    private $retryInfo = [];

    /**
     * Returns Statement Descriptor.
     * Text that will appear on the credit card's statement
     */
    public function getStatementDescriptor(): ?string
    {
        if (count($this->statementDescriptor) == 0) {
            return null;
        }
        return $this->statementDescriptor['value'];
    }

    /**
     * Sets Statement Descriptor.
     * Text that will appear on the credit card's statement
     *
     * @maps statement_descriptor
     */
    public function setStatementDescriptor(?string $statementDescriptor): void
    {
        $this->statementDescriptor['value'] = $statementDescriptor;
    }

    /**
     * Unsets Statement Descriptor.
     * Text that will appear on the credit card's statement
     */
    public function unsetStatementDescriptor(): void
    {
        $this->statementDescriptor = [];
    }

    /**
     * Returns Acquirer Name.
     * Acquirer name
     */
    public function getAcquirerName(): ?string
    {
        return $this->acquirerName;
    }

    /**
     * Sets Acquirer Name.
     * Acquirer name
     *
     * @maps acquirer_name
     */
    public function setAcquirerName(?string $acquirerName): void
    {
        $this->acquirerName = $acquirerName;
    }

    /**
     * Returns Acquirer Affiliation Code.
     * Aquirer affiliation code
     */
    public function getAcquirerAffiliationCode(): ?string
    {
        if (count($this->acquirerAffiliationCode) == 0) {
            return null;
        }
        return $this->acquirerAffiliationCode['value'];
    }

    /**
     * Sets Acquirer Affiliation Code.
     * Aquirer affiliation code
     *
     * @maps acquirer_affiliation_code
     */
    public function setAcquirerAffiliationCode(?string $acquirerAffiliationCode): void
    {
        $this->acquirerAffiliationCode['value'] = $acquirerAffiliationCode;
    }

    /**
     * Unsets Acquirer Affiliation Code.
     * Aquirer affiliation code
     */
    public function unsetAcquirerAffiliationCode(): void
    {
        $this->acquirerAffiliationCode = [];
    }

    /**
     * Returns Acquirer Tid.
     * Acquirer TID
     */
    public function getAcquirerTid(): ?string
    {
        return $this->acquirerTid;
    }

    /**
     * Sets Acquirer Tid.
     * Acquirer TID
     *
     * @maps acquirer_tid
     */
    public function setAcquirerTid(?string $acquirerTid): void
    {
        $this->acquirerTid = $acquirerTid;
    }

    /**
     * Returns Acquirer Nsu.
     * Acquirer NSU
     */
    public function getAcquirerNsu(): ?string
    {
        return $this->acquirerNsu;
    }

    /**
     * Sets Acquirer Nsu.
     * Acquirer NSU
     *
     * @maps acquirer_nsu
     */
    public function setAcquirerNsu(?string $acquirerNsu): void
    {
        $this->acquirerNsu = $acquirerNsu;
    }

    /**
     * Returns Acquirer Auth Code.
     * Acquirer authorization code
     */
    public function getAcquirerAuthCode(): ?string
    {
        if (count($this->acquirerAuthCode) == 0) {
            return null;
        }
        return $this->acquirerAuthCode['value'];
    }

    /**
     * Sets Acquirer Auth Code.
     * Acquirer authorization code
     *
     * @maps acquirer_auth_code
     */
    public function setAcquirerAuthCode(?string $acquirerAuthCode): void
    {
        $this->acquirerAuthCode['value'] = $acquirerAuthCode;
    }

    /**
     * Unsets Acquirer Auth Code.
     * Acquirer authorization code
     */
    public function unsetAcquirerAuthCode(): void
    {
        $this->acquirerAuthCode = [];
    }

    /**
     * Returns Operation Type.
     * Operation type
     */
    public function getOperationType(): ?string
    {
        if (count($this->operationType) == 0) {
            return null;
        }
        return $this->operationType['value'];
    }

    /**
     * Sets Operation Type.
     * Operation type
     *
     * @maps operation_type
     */
    public function setOperationType(?string $operationType): void
    {
        $this->operationType['value'] = $operationType;
    }

    /**
     * Unsets Operation Type.
     * Operation type
     */
    public function unsetOperationType(): void
    {
        $this->operationType = [];
    }

    /**
     * Returns Card.
     * Card data
     */
    public function getCard(): ?GetCardResponse
    {
        if (count($this->card) == 0) {
            return null;
        }
        return $this->card['value'];
    }

    /**
     * Sets Card.
     * Card data
     *
     * @maps card
     */
    public function setCard(?GetCardResponse $card): void
    {
        $this->card['value'] = $card;
    }

    /**
     * Unsets Card.
     * Card data
     */
    public function unsetCard(): void
    {
        $this->card = [];
    }

    /**
     * Returns Acquirer Message.
     * Acquirer message
     */
    public function getAcquirerMessage(): ?string
    {
        if (count($this->acquirerMessage) == 0) {
            return null;
        }
        return $this->acquirerMessage['value'];
    }

    /**
     * Sets Acquirer Message.
     * Acquirer message
     *
     * @maps acquirer_message
     */
    public function setAcquirerMessage(?string $acquirerMessage): void
    {
        $this->acquirerMessage['value'] = $acquirerMessage;
    }

    /**
     * Unsets Acquirer Message.
     * Acquirer message
     */
    public function unsetAcquirerMessage(): void
    {
        $this->acquirerMessage = [];
    }

    /**
     * Returns Acquirer Return Code.
     * Acquirer Return Code
     */
    public function getAcquirerReturnCode(): ?string
    {
        if (count($this->acquirerReturnCode) == 0) {
            return null;
        }
        return $this->acquirerReturnCode['value'];
    }

    /**
     * Sets Acquirer Return Code.
     * Acquirer Return Code
     *
     * @maps acquirer_return_code
     */
    public function setAcquirerReturnCode(?string $acquirerReturnCode): void
    {
        $this->acquirerReturnCode['value'] = $acquirerReturnCode;
    }

    /**
     * Unsets Acquirer Return Code.
     * Acquirer Return Code
     */
    public function unsetAcquirerReturnCode(): void
    {
        $this->acquirerReturnCode = [];
    }

    /**
     * Returns Installments.
     * Number of installments
     */
    public function getInstallments(): ?int
    {
        if (count($this->installments) == 0) {
            return null;
        }
        return $this->installments['value'];
    }

    /**
     * Sets Installments.
     * Number of installments
     *
     * @maps installments
     */
    public function setInstallments(?int $installments): void
    {
        $this->installments['value'] = $installments;
    }

    /**
     * Unsets Installments.
     * Number of installments
     */
    public function unsetInstallments(): void
    {
        $this->installments = [];
    }

    /**
     * Returns Threed Authentication Url.
     * 3D-S authentication Url
     */
    public function getThreedAuthenticationUrl(): ?string
    {
        if (count($this->threedAuthenticationUrl) == 0) {
            return null;
        }
        return $this->threedAuthenticationUrl['value'];
    }

    /**
     * Sets Threed Authentication Url.
     * 3D-S authentication Url
     *
     * @maps threed_authentication_url
     */
    public function setThreedAuthenticationUrl(?string $threedAuthenticationUrl): void
    {
        $this->threedAuthenticationUrl['value'] = $threedAuthenticationUrl;
    }

    /**
     * Unsets Threed Authentication Url.
     * 3D-S authentication Url
     */
    public function unsetThreedAuthenticationUrl(): void
    {
        $this->threedAuthenticationUrl = [];
    }

    /**
     * Returns Funding Source.
     * Identify when a card is prepaid, credit or debit.
     */
    public function getFundingSource(): ?string
    {
        if (count($this->fundingSource) == 0) {
            return null;
        }
        return $this->fundingSource['value'];
    }

    /**
     * Sets Funding Source.
     * Identify when a card is prepaid, credit or debit.
     *
     * @maps funding_source
     */
    public function setFundingSource(?string $fundingSource): void
    {
        $this->fundingSource['value'] = $fundingSource;
    }

    /**
     * Unsets Funding Source.
     * Identify when a card is prepaid, credit or debit.
     */
    public function unsetFundingSource(): void
    {
        $this->fundingSource = [];
    }

    /**
     * Returns Retry Info.
     * Retry transaction information
     */
    public function getRetryInfo(): ?GetRetryTransactionInformationResponse
    {
        if (count($this->retryInfo) == 0) {
            return null;
        }
        return $this->retryInfo['value'];
    }

    /**
     * Sets Retry Info.
     * Retry transaction information
     *
     * @maps retry_info
     */
    public function setRetryInfo(?GetRetryTransactionInformationResponse $retryInfo): void
    {
        $this->retryInfo['value'] = $retryInfo;
    }

    /**
     * Unsets Retry Info.
     * Retry transaction information
     */
    public function unsetRetryInfo(): void
    {
        $this->retryInfo = [];
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
        if (!empty($this->statementDescriptor)) {
            $json['statement_descriptor']      = $this->statementDescriptor['value'];
        }
        if (isset($this->acquirerName)) {
            $json['acquirer_name']             = $this->acquirerName;
        }
        if (!empty($this->acquirerAffiliationCode)) {
            $json['acquirer_affiliation_code'] = $this->acquirerAffiliationCode['value'];
        }
        if (isset($this->acquirerTid)) {
            $json['acquirer_tid']              = $this->acquirerTid;
        }
        if (isset($this->acquirerNsu)) {
            $json['acquirer_nsu']              = $this->acquirerNsu;
        }
        if (!empty($this->acquirerAuthCode)) {
            $json['acquirer_auth_code']        = $this->acquirerAuthCode['value'];
        }
        if (!empty($this->operationType)) {
            $json['operation_type']            = $this->operationType['value'];
        }
        if (!empty($this->card)) {
            $json['card']                      = $this->card['value'];
        }
        if (!empty($this->acquirerMessage)) {
            $json['acquirer_message']          = $this->acquirerMessage['value'];
        }
        if (!empty($this->acquirerReturnCode)) {
            $json['acquirer_return_code']      = $this->acquirerReturnCode['value'];
        }
        if (!empty($this->installments)) {
            $json['installments']              = $this->installments['value'];
        }
        if (!empty($this->threedAuthenticationUrl)) {
            $json['threed_authentication_url'] = $this->threedAuthenticationUrl['value'];
        }
        if (!empty($this->fundingSource)) {
            $json['funding_source']            = $this->fundingSource['value'];
        }
        if (!empty($this->retryInfo)) {
            $json['retry_info']                = $this->retryInfo['value'];
        }
        $json = array_merge($json, parent::jsonSerialize(true));
        $json['transaction_type'] = $this->getTransactionType() ?? 'credit_card';

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
