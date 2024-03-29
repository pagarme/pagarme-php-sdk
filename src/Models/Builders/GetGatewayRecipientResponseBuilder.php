<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetGatewayRecipientResponse;

/**
 * Builder for model GetGatewayRecipientResponse
 *
 * @see GetGatewayRecipientResponse
 */
class GetGatewayRecipientResponseBuilder
{
    /**
     * @var GetGatewayRecipientResponse
     */
    private $instance;

    private function __construct(GetGatewayRecipientResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get gateway recipient response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetGatewayRecipientResponse());
    }

    /**
     * Sets gateway field.
     */
    public function gateway(?string $value): self
    {
        $this->instance->setGateway($value);
        return $this;
    }

    /**
     * Unsets gateway field.
     */
    public function unsetGateway(): self
    {
        $this->instance->unsetGateway();
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
     * Sets pgid field.
     */
    public function pgid(?string $value): self
    {
        $this->instance->setPgid($value);
        return $this;
    }

    /**
     * Unsets pgid field.
     */
    public function unsetPgid(): self
    {
        $this->instance->unsetPgid();
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
     * Initializes a new get gateway recipient response object.
     */
    public function build(): GetGatewayRecipientResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
