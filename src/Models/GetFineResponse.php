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
 * Fine Response
 */
class GetFineResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $days = [];

    /**
     * @var array
     */
    private $type = [];

    /**
     * @var array
     */
    private $amount = [];

    /**
     * Returns Days.
     * Days
     */
    public function getDays(): ?int
    {
        if (count($this->days) == 0) {
            return null;
        }
        return $this->days['value'];
    }

    /**
     * Sets Days.
     * Days
     *
     * @maps days
     */
    public function setDays(?int $days): void
    {
        $this->days['value'] = $days;
    }

    /**
     * Unsets Days.
     * Days
     */
    public function unsetDays(): void
    {
        $this->days = [];
    }

    /**
     * Returns Type.
     * Type
     */
    public function getType(): ?string
    {
        if (count($this->type) == 0) {
            return null;
        }
        return $this->type['value'];
    }

    /**
     * Sets Type.
     * Type
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type['value'] = $type;
    }

    /**
     * Unsets Type.
     * Type
     */
    public function unsetType(): void
    {
        $this->type = [];
    }

    /**
     * Returns Amount.
     * Amount
     */
    public function getAmount(): ?int
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     * Amount
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     * Amount
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
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
        if (!empty($this->days)) {
            $json['days']   = $this->days['value'];
        }
        if (!empty($this->type)) {
            $json['type']   = $this->type['value'];
        }
        if (!empty($this->amount)) {
            $json['amount'] = $this->amount['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
