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
 * Information about fines and interest on the "boleto" used from payment
 */
class CreateSubscriptionBoletoRequest implements \JsonSerializable
{
    /**
     * @var CreateInterestRequest|null
     */
    private $interest;

    /**
     * @var CreateFineRequest|null
     */
    private $fine;

    /**
     * @var array
     */
    private $maxDaysToPayPastDue = [];

    /**
     * Returns Interest.
     */
    public function getInterest(): ?CreateInterestRequest
    {
        return $this->interest;
    }

    /**
     * Sets Interest.
     *
     * @maps interest
     */
    public function setInterest(?CreateInterestRequest $interest): void
    {
        $this->interest = $interest;
    }

    /**
     * Returns Fine.
     */
    public function getFine(): ?CreateFineRequest
    {
        return $this->fine;
    }

    /**
     * Sets Fine.
     *
     * @maps fine
     */
    public function setFine(?CreateFineRequest $fine): void
    {
        $this->fine = $fine;
    }

    /**
     * Returns Max Days to Pay Past Due.
     */
    public function getMaxDaysToPayPastDue(): ?int
    {
        if (count($this->maxDaysToPayPastDue) == 0) {
            return null;
        }
        return $this->maxDaysToPayPastDue['value'];
    }

    /**
     * Sets Max Days to Pay Past Due.
     *
     * @maps max_days_to_pay_past_due
     */
    public function setMaxDaysToPayPastDue(?int $maxDaysToPayPastDue): void
    {
        $this->maxDaysToPayPastDue['value'] = $maxDaysToPayPastDue;
    }

    /**
     * Unsets Max Days to Pay Past Due.
     */
    public function unsetMaxDaysToPayPastDue(): void
    {
        $this->maxDaysToPayPastDue = [];
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
        if (isset($this->interest)) {
            $json['interest']                 = $this->interest;
        }
        if (isset($this->fine)) {
            $json['fine']                     = $this->fine;
        }
        if (!empty($this->maxDaysToPayPastDue)) {
            $json['max_days_to_pay_past_due'] = $this->maxDaysToPayPastDue['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
