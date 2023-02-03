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
 * Information about the recipient on the gateway
 */
class GetGatewayRecipientResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $gateway = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $pgid = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var array
     */
    private $updatedAt = [];

    /**
     * Returns Gateway.
     * Gateway name
     */
    public function getGateway(): ?string
    {
        if (count($this->gateway) == 0) {
            return null;
        }
        return $this->gateway['value'];
    }

    /**
     * Sets Gateway.
     * Gateway name
     *
     * @maps gateway
     */
    public function setGateway(?string $gateway): void
    {
        $this->gateway['value'] = $gateway;
    }

    /**
     * Unsets Gateway.
     * Gateway name
     */
    public function unsetGateway(): void
    {
        $this->gateway = [];
    }

    /**
     * Returns Status.
     * Status of the recipient on the gateway
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     * Status of the recipient on the gateway
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     * Status of the recipient on the gateway
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Pgid.
     * Recipient id on the gateway
     */
    public function getPgid(): ?string
    {
        if (count($this->pgid) == 0) {
            return null;
        }
        return $this->pgid['value'];
    }

    /**
     * Sets Pgid.
     * Recipient id on the gateway
     *
     * @maps pgid
     */
    public function setPgid(?string $pgid): void
    {
        $this->pgid['value'] = $pgid;
    }

    /**
     * Unsets Pgid.
     * Recipient id on the gateway
     */
    public function unsetPgid(): void
    {
        $this->pgid = [];
    }

    /**
     * Returns Created At.
     * Creation date
     */
    public function getCreatedAt(): ?string
    {
        if (count($this->createdAt) == 0) {
            return null;
        }
        return $this->createdAt['value'];
    }

    /**
     * Sets Created At.
     * Creation date
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt['value'] = $createdAt;
    }

    /**
     * Unsets Created At.
     * Creation date
     */
    public function unsetCreatedAt(): void
    {
        $this->createdAt = [];
    }

    /**
     * Returns Updated At.
     * Last update date
     */
    public function getUpdatedAt(): ?string
    {
        if (count($this->updatedAt) == 0) {
            return null;
        }
        return $this->updatedAt['value'];
    }

    /**
     * Sets Updated At.
     * Last update date
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt['value'] = $updatedAt;
    }

    /**
     * Unsets Updated At.
     * Last update date
     */
    public function unsetUpdatedAt(): void
    {
        $this->updatedAt = [];
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
        if (!empty($this->gateway)) {
            $json['gateway']    = $this->gateway['value'];
        }
        if (!empty($this->status)) {
            $json['status']     = $this->status['value'];
        }
        if (!empty($this->pgid)) {
            $json['pgid']       = $this->pgid['value'];
        }
        if (!empty($this->createdAt)) {
            $json['created_at'] = $this->createdAt['value'];
        }
        if (!empty($this->updatedAt)) {
            $json['updated_at'] = $this->updatedAt['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
