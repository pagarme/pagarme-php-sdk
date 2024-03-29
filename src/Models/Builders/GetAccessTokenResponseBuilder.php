<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetAccessTokenResponse;
use PagarmeApiSDKLib\Models\GetCustomerResponse;

/**
 * Builder for model GetAccessTokenResponse
 *
 * @see GetAccessTokenResponse
 */
class GetAccessTokenResponseBuilder
{
    /**
     * @var GetAccessTokenResponse
     */
    private $instance;

    private function __construct(GetAccessTokenResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get access token response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetAccessTokenResponse());
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
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Unsets code field.
     */
    public function unsetCode(): self
    {
        $this->instance->unsetCode();
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
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
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
     * Sets customer field.
     */
    public function customer(?GetCustomerResponse $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Unsets customer field.
     */
    public function unsetCustomer(): self
    {
        $this->instance->unsetCustomer();
        return $this;
    }

    /**
     * Initializes a new get access token response object.
     */
    public function build(): GetAccessTokenResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
