<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCardRequest;
use PagarmeApiSDKLib\Models\CreatePaymentOriginRequest;
use PagarmeApiSDKLib\Models\UpdateChargeCardRequest;

/**
 * Builder for model UpdateChargeCardRequest
 *
 * @see UpdateChargeCardRequest
 */
class UpdateChargeCardRequestBuilder
{
    /**
     * @var UpdateChargeCardRequest
     */
    private $instance;

    private function __construct(UpdateChargeCardRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update charge card request Builder object.
     */
    public static function init(
        bool $updateSubscription,
        string $cardId,
        CreateCardRequest $card,
        bool $recurrence
    ): self {
        return new self(new UpdateChargeCardRequest($updateSubscription, $cardId, $card, $recurrence));
    }

    /**
     * Sets initiated type field.
     */
    public function initiatedType(?string $value): self
    {
        $this->instance->setInitiatedType($value);
        return $this;
    }

    /**
     * Sets recurrence model field.
     */
    public function recurrenceModel(?string $value): self
    {
        $this->instance->setRecurrenceModel($value);
        return $this;
    }

    /**
     * Sets payment origin field.
     */
    public function paymentOrigin(?CreatePaymentOriginRequest $value): self
    {
        $this->instance->setPaymentOrigin($value);
        return $this;
    }

    /**
     * Sets indirect acceptor field.
     */
    public function indirectAcceptor(?string $value): self
    {
        $this->instance->setIndirectAcceptor($value);
        return $this;
    }

    /**
     * Initializes a new update charge card request object.
     */
    public function build(): UpdateChargeCardRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
