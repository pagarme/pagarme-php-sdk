<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateOrderItemRequest;

/**
 * Builder for model CreateOrderItemRequest
 *
 * @see CreateOrderItemRequest
 */
class CreateOrderItemRequestBuilder
{
    /**
     * @var CreateOrderItemRequest
     */
    private $instance;

    private function __construct(CreateOrderItemRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create order item request Builder object.
     */
    public static function init(int $amount, string $description, int $quantity, string $category): self
    {
        return new self(new CreateOrderItemRequest($amount, $description, $quantity, $category));
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
     * Initializes a new create order item request object.
     */
    public function build(): CreateOrderItemRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
