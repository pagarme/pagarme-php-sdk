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
     * @var string|null
     */
    private $statementDescriptor;

    /**
     * @var string
     */
    private $acquirerName;

    /**
     * @var string|null
     */
    private $acquirerAffiliationCode;

    /**
     * @var string
     */
    private $acquirerTid;

    /**
     * @var string
     */
    private $acquirerNsu;

    /**
     * @var string|null
     */
    private $acquirerAuthCode;

    /**
     * @var string|null
     */
    private $operationType;

    /**
     * @var GetCardResponse|null
     */
    private $card;

    /**
     * @var string|null
     */
    private $acquirerMessage;

    /**
     * @var string|null
     */
    private $acquirerReturnCode;

    /**
     * @var array
     */
    private $installments = [];

    /**
     * @var string|null
     */
    private $threedAuthenticationUrl;

    /**
     * @param string $acquirerName
     * @param string $acquirerTid
     * @param string $acquirerNsu
     */
    public function __construct(string $acquirerName, string $acquirerTid, string $acquirerNsu)
    {
        $this->acquirerName = $acquirerName;
        $this->acquirerTid = $acquirerTid;
        $this->acquirerNsu = $acquirerNsu;
    }

    /**
     * Returns Statement Descriptor.
     * Text that will appear on the credit card's statement
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * Sets Statement Descriptor.
     * Text that will appear on the credit card's statement
     *
     * @maps statement_descriptor
     */
    public function setStatementDescriptor(?string $statementDescriptor): void
    {
        $this->statementDescriptor = $statementDescriptor;
    }

    /**
     * Returns Acquirer Name.
     * Acquirer name
     */
    public function getAcquirerName(): string
    {
        return $this->acquirerName;
    }

    /**
     * Sets Acquirer Name.
     * Acquirer name
     *
     * @required
     * @maps acquirer_name
     */
    public function setAcquirerName(string $acquirerName): void
    {
        $this->acquirerName = $acquirerName;
    }

    /**
     * Returns Acquirer Affiliation Code.
     * Aquirer affiliation code
     */
    public function getAcquirerAffiliationCode(): ?string
    {
        return $this->acquirerAffiliationCode;
    }

    /**
     * Sets Acquirer Affiliation Code.
     * Aquirer affiliation code
     *
     * @maps acquirer_affiliation_code
     */
    public function setAcquirerAffiliationCode(?string $acquirerAffiliationCode): void
    {
        $this->acquirerAffiliationCode = $acquirerAffiliationCode;
    }

    /**
     * Returns Acquirer Tid.
     * Acquirer TID
     */
    public function getAcquirerTid(): string
    {
        return $this->acquirerTid;
    }

    /**
     * Sets Acquirer Tid.
     * Acquirer TID
     *
     * @required
     * @maps acquirer_tid
     */
    public function setAcquirerTid(string $acquirerTid): void
    {
        $this->acquirerTid = $acquirerTid;
    }

    /**
     * Returns Acquirer Nsu.
     * Acquirer NSU
     */
    public function getAcquirerNsu(): string
    {
        return $this->acquirerNsu;
    }

    /**
     * Sets Acquirer Nsu.
     * Acquirer NSU
     *
     * @required
     * @maps acquirer_nsu
     */
    public function setAcquirerNsu(string $acquirerNsu): void
    {
        $this->acquirerNsu = $acquirerNsu;
    }

    /**
     * Returns Acquirer Auth Code.
     * Acquirer authorization code
     */
    public function getAcquirerAuthCode(): ?string
    {
        return $this->acquirerAuthCode;
    }

    /**
     * Sets Acquirer Auth Code.
     * Acquirer authorization code
     *
     * @maps acquirer_auth_code
     */
    public function setAcquirerAuthCode(?string $acquirerAuthCode): void
    {
        $this->acquirerAuthCode = $acquirerAuthCode;
    }

    /**
     * Returns Operation Type.
     * Operation type
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * Sets Operation Type.
     * Operation type
     *
     * @maps operation_type
     */
    public function setOperationType(?string $operationType): void
    {
        $this->operationType = $operationType;
    }

    /**
     * Returns Card.
     * Card data
     */
    public function getCard(): ?GetCardResponse
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * Card data
     *
     * @maps card
     */
    public function setCard(?GetCardResponse $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Acquirer Message.
     * Acquirer message
     */
    public function getAcquirerMessage(): ?string
    {
        return $this->acquirerMessage;
    }

    /**
     * Sets Acquirer Message.
     * Acquirer message
     *
     * @maps acquirer_message
     */
    public function setAcquirerMessage(?string $acquirerMessage): void
    {
        $this->acquirerMessage = $acquirerMessage;
    }

    /**
     * Returns Acquirer Return Code.
     * Acquirer Return Code
     */
    public function getAcquirerReturnCode(): ?string
    {
        return $this->acquirerReturnCode;
    }

    /**
     * Sets Acquirer Return Code.
     * Acquirer Return Code
     *
     * @maps acquirer_return_code
     */
    public function setAcquirerReturnCode(?string $acquirerReturnCode): void
    {
        $this->acquirerReturnCode = $acquirerReturnCode;
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
        return $this->threedAuthenticationUrl;
    }

    /**
     * Sets Threed Authentication Url.
     * 3D-S authentication Url
     *
     * @maps threed_authentication_url
     */
    public function setThreedAuthenticationUrl(?string $threedAuthenticationUrl): void
    {
        $this->threedAuthenticationUrl = $threedAuthenticationUrl;
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
        $json['statement_descriptor']      = $this->statementDescriptor;
        $json['acquirer_name']             = $this->acquirerName;
        $json['acquirer_affiliation_code'] = $this->acquirerAffiliationCode;
        $json['acquirer_tid']              = $this->acquirerTid;
        $json['acquirer_nsu']              = $this->acquirerNsu;
        $json['acquirer_auth_code']        = $this->acquirerAuthCode;
        $json['operation_type']            = $this->operationType;
        $json['card']                      = $this->card;
        $json['acquirer_message']          = $this->acquirerMessage;
        $json['acquirer_return_code']      = $this->acquirerReturnCode;
        if (!empty($this->installments)) {
            $json['installments']          = $this->installments['value'];
        }
        $json['threed_authentication_url'] = $this->threedAuthenticationUrl;
        $json = array_merge($json, parent::jsonSerialize(true));
        $json['transaction_type'] = $this->getTransactionType() ?? 'credit_card';

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
