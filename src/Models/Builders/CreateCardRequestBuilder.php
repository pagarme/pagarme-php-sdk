<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateAddressRequest;
use PagarmeApiSDKLib\Models\CreateCardOptionsRequest;
use PagarmeApiSDKLib\Models\CreateCardRequest;

/**
 * Builder for model CreateCardRequest
 *
 * @see CreateCardRequest
 */
class CreateCardRequestBuilder
{
    /**
     * @var CreateCardRequest
     */
    private $instance;

    private function __construct(CreateCardRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create card request Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateCardRequest());
    }

    /**
     * Sets number field.
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Sets holder name field.
     */
    public function holderName(?string $value): self
    {
        $this->instance->setHolderName($value);
        return $this;
    }

    /**
     * Sets exp month field.
     */
    public function expMonth(?int $value): self
    {
        $this->instance->setExpMonth($value);
        return $this;
    }

    /**
     * Sets exp year field.
     */
    public function expYear(?int $value): self
    {
        $this->instance->setExpYear($value);
        return $this;
    }

    /**
     * Sets cvv field.
     */
    public function cvv(?string $value): self
    {
        $this->instance->setCvv($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?CreateAddressRequest $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets brand field.
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets billing address id field.
     */
    public function billingAddressId(?string $value): self
    {
        $this->instance->setBillingAddressId($value);
        return $this;
    }

    /**
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
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
     * Sets options field.
     */
    public function options(?CreateCardOptionsRequest $value): self
    {
        $this->instance->setOptions($value);
        return $this;
    }

    /**
     * Sets holder document field.
     */
    public function holderDocument(?string $value): self
    {
        $this->instance->setHolderDocument($value);
        return $this;
    }

    /**
     * Sets private label field.
     */
    public function privateLabel(?bool $value): self
    {
        $this->instance->setPrivateLabel($value);
        return $this;
    }

    /**
     * Sets label field.
     */
    public function label(?string $value): self
    {
        $this->instance->setLabel($value);
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
     * Sets token field.
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Initializes a new create card request object.
     */
    public function build(): CreateCardRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
