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
 * The GooglePay Token Payment Request
 */
class CreateGooglePayRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $version = [];

    /**
     * @var array
     */
    private $data = [];

    /**
     * @var array
     */
    private $intermediateSigningKey = [];

    /**
     * @var array
     */
    private $signature = [];

    /**
     * @var array
     */
    private $signedMessage = [];

    /**
     * Returns Version.
     * Informação sobre a versão do token. Único valor aceito é EC_v2
     */
    public function getVersion(): ?string
    {
        if (count($this->version) == 0) {
            return null;
        }
        return $this->version['value'];
    }

    /**
     * Sets Version.
     * Informação sobre a versão do token. Único valor aceito é EC_v2
     *
     * @maps version
     */
    public function setVersion(?string $version): void
    {
        $this->version['value'] = $version;
    }

    /**
     * Unsets Version.
     * Informação sobre a versão do token. Único valor aceito é EC_v2
     */
    public function unsetVersion(): void
    {
        $this->version = [];
    }

    /**
     * Returns Data.
     * Dados de pagamento criptografados. Corresponde ao encryptedMessage do token Google.
     */
    public function getData(): ?string
    {
        if (count($this->data) == 0) {
            return null;
        }
        return $this->data['value'];
    }

    /**
     * Sets Data.
     * Dados de pagamento criptografados. Corresponde ao encryptedMessage do token Google.
     *
     * @maps data
     */
    public function setData(?string $data): void
    {
        $this->data['value'] = $data;
    }

    /**
     * Unsets Data.
     * Dados de pagamento criptografados. Corresponde ao encryptedMessage do token Google.
     */
    public function unsetData(): void
    {
        $this->data = [];
    }

    /**
     * Returns Intermediate Signing Key.
     * The GooglePay intermediate signing key request
     */
    public function getIntermediateSigningKey(): ?CreateGooglePayIntermediateSigningKeyRequest
    {
        if (count($this->intermediateSigningKey) == 0) {
            return null;
        }
        return $this->intermediateSigningKey['value'];
    }

    /**
     * Sets Intermediate Signing Key.
     * The GooglePay intermediate signing key request
     *
     * @maps intermediate_signing_key
     */
    public function setIntermediateSigningKey(
        ?CreateGooglePayIntermediateSigningKeyRequest $intermediateSigningKey
    ): void {
        $this->intermediateSigningKey['value'] = $intermediateSigningKey;
    }

    /**
     * Unsets Intermediate Signing Key.
     * The GooglePay intermediate signing key request
     */
    public function unsetIntermediateSigningKey(): void
    {
        $this->intermediateSigningKey = [];
    }

    /**
     * Returns Signature.
     * Assinatura dos dados de pagamento. Verifica se a origem da mensagem é o Google. Corresponde ao
     * signature do token Google.
     */
    public function getSignature(): ?string
    {
        if (count($this->signature) == 0) {
            return null;
        }
        return $this->signature['value'];
    }

    /**
     * Sets Signature.
     * Assinatura dos dados de pagamento. Verifica se a origem da mensagem é o Google. Corresponde ao
     * signature do token Google.
     *
     * @maps signature
     */
    public function setSignature(?string $signature): void
    {
        $this->signature['value'] = $signature;
    }

    /**
     * Unsets Signature.
     * Assinatura dos dados de pagamento. Verifica se a origem da mensagem é o Google. Corresponde ao
     * signature do token Google.
     */
    public function unsetSignature(): void
    {
        $this->signature = [];
    }

    /**
     * Returns Signed Message.
     */
    public function getSignedMessage(): ?string
    {
        if (count($this->signedMessage) == 0) {
            return null;
        }
        return $this->signedMessage['value'];
    }

    /**
     * Sets Signed Message.
     *
     * @maps signed_message
     */
    public function setSignedMessage(?string $signedMessage): void
    {
        $this->signedMessage['value'] = $signedMessage;
    }

    /**
     * Unsets Signed Message.
     */
    public function unsetSignedMessage(): void
    {
        $this->signedMessage = [];
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
        if (!empty($this->version)) {
            $json['version']                  = $this->version['value'];
        }
        if (!empty($this->data)) {
            $json['data']                     = $this->data['value'];
        }
        if (!empty($this->intermediateSigningKey)) {
            $json['intermediate_signing_key'] = $this->intermediateSigningKey['value'];
        }
        if (!empty($this->signature)) {
            $json['signature']                = $this->signature['value'];
        }
        if (!empty($this->signedMessage)) {
            $json['signed_message']           = $this->signedMessage['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
