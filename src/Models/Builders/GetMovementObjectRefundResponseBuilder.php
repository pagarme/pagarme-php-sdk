<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetMovementObjectRefundResponse;

/**
 * Builder for model GetMovementObjectRefundResponse
 *
 * @see GetMovementObjectRefundResponse
 */
class GetMovementObjectRefundResponseBuilder
{
    /**
     * @var GetMovementObjectRefundResponse
     */
    private $instance;

    private function __construct(GetMovementObjectRefundResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get movement object refund response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetMovementObjectRefundResponse());
    }

    /**
     * Sets object field.
     */
    public function object(?string $value): self
    {
        $this->instance->setObject($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
        return $this;
    }

    /**
     * Sets charge id field.
     */
    public function chargeId(?string $value): self
    {
        $this->instance->setChargeId($value);
        return $this;
    }

    /**
     * Unsets charge id field.
     */
    public function unsetChargeId(): self
    {
        $this->instance->unsetChargeId();
        return $this;
    }

    /**
     * Sets gateway id field.
     */
    public function gatewayId(?string $value): self
    {
        $this->instance->setGatewayId($value);
        return $this;
    }

    /**
     * Unsets gateway id field.
     */
    public function unsetGatewayId(): self
    {
        $this->instance->unsetGatewayId();
        return $this;
    }

    /**
     * Sets fraud coverage fee field.
     */
    public function fraudCoverageFee(?string $value): self
    {
        $this->instance->setFraudCoverageFee($value);
        return $this;
    }

    /**
     * Unsets fraud coverage fee field.
     */
    public function unsetFraudCoverageFee(): self
    {
        $this->instance->unsetFraudCoverageFee();
        return $this;
    }

    /**
     * Sets charge fee recipient id field.
     */
    public function chargeFeeRecipientId(?string $value): self
    {
        $this->instance->setChargeFeeRecipientId($value);
        return $this;
    }

    /**
     * Unsets charge fee recipient id field.
     */
    public function unsetChargeFeeRecipientId(): self
    {
        $this->instance->unsetChargeFeeRecipientId();
        return $this;
    }

    /**
     * Sets bank account id field.
     */
    public function bankAccountId(?string $value): self
    {
        $this->instance->setBankAccountId($value);
        return $this;
    }

    /**
     * Unsets bank account id field.
     */
    public function unsetBankAccountId(): self
    {
        $this->instance->unsetBankAccountId();
        return $this;
    }

    /**
     * Sets local transaction id field.
     */
    public function localTransactionId(?string $value): self
    {
        $this->instance->setLocalTransactionId($value);
        return $this;
    }

    /**
     * Unsets local transaction id field.
     */
    public function unsetLocalTransactionId(): self
    {
        $this->instance->unsetLocalTransactionId();
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Unsets updated at field.
     */
    public function unsetUpdatedAt(): self
    {
        $this->instance->unsetUpdatedAt();
        return $this;
    }

    /**
     * Initializes a new get movement object refund response object.
     */
    public function build(): GetMovementObjectRefundResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
