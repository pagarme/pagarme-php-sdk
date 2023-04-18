<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetThreeDSecureResponse;

/**
 * Builder for model GetThreeDSecureResponse
 *
 * @see GetThreeDSecureResponse
 */
class GetThreeDSecureResponseBuilder
{
    /**
     * @var GetThreeDSecureResponse
     */
    private $instance;

    private function __construct(GetThreeDSecureResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get three dsecure response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetThreeDSecureResponse());
    }

    /**
     * Sets mpi field.
     */
    public function mpi(?string $value): self
    {
        $this->instance->setMpi($value);
        return $this;
    }

    /**
     * Unsets mpi field.
     */
    public function unsetMpi(): self
    {
        $this->instance->unsetMpi();
        return $this;
    }

    /**
     * Sets eci field.
     */
    public function eci(?string $value): self
    {
        $this->instance->setEci($value);
        return $this;
    }

    /**
     * Unsets eci field.
     */
    public function unsetEci(): self
    {
        $this->instance->unsetEci();
        return $this;
    }

    /**
     * Sets cavv field.
     */
    public function cavv(?string $value): self
    {
        $this->instance->setCavv($value);
        return $this;
    }

    /**
     * Unsets cavv field.
     */
    public function unsetCavv(): self
    {
        $this->instance->unsetCavv();
        return $this;
    }

    /**
     * Sets transaction id field.
     */
    public function transactionId(?string $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Unsets transaction id field.
     */
    public function unsetTransactionId(): self
    {
        $this->instance->unsetTransactionId();
        return $this;
    }

    /**
     * Sets success url field.
     */
    public function successUrl(?string $value): self
    {
        $this->instance->setSuccessUrl($value);
        return $this;
    }

    /**
     * Unsets success url field.
     */
    public function unsetSuccessUrl(): self
    {
        $this->instance->unsetSuccessUrl();
        return $this;
    }

    /**
     * Initializes a new get three dsecure response object.
     */
    public function build(): GetThreeDSecureResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
