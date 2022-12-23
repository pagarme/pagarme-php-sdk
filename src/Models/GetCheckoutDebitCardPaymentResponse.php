<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetCheckoutDebitCardPaymentResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $statementDescriptor;

    /**
     * @var GetPaymentAuthenticationResponse|null
     */
    private $authentication;

    /**
     * Returns Statement Descriptor.
     * Descrição na fatura
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * Sets Statement Descriptor.
     * Descrição na fatura
     *
     * @maps statement_descriptor
     */
    public function setStatementDescriptor(?string $statementDescriptor): void
    {
        $this->statementDescriptor = $statementDescriptor;
    }

    /**
     * Returns Authentication.
     * Payment Authentication response object data
     */
    public function getAuthentication(): ?GetPaymentAuthenticationResponse
    {
        return $this->authentication;
    }

    /**
     * Sets Authentication.
     * Payment Authentication response object data
     *
     * @maps authentication
     */
    public function setAuthentication(?GetPaymentAuthenticationResponse $authentication): void
    {
        $this->authentication = $authentication;
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
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['authentication']       = $this->authentication;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
