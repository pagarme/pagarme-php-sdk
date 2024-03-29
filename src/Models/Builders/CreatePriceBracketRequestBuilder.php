<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreatePriceBracketRequest;

/**
 * Builder for model CreatePriceBracketRequest
 *
 * @see CreatePriceBracketRequest
 */
class CreatePriceBracketRequestBuilder
{
    /**
     * @var CreatePriceBracketRequest
     */
    private $instance;

    private function __construct(CreatePriceBracketRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create price bracket request Builder object.
     */
    public static function init(int $startQuantity, int $price): self
    {
        return new self(new CreatePriceBracketRequest($startQuantity, $price));
    }

    /**
     * Sets end quantity field.
     */
    public function endQuantity(?int $value): self
    {
        $this->instance->setEndQuantity($value);
        return $this;
    }

    /**
     * Sets overage price field.
     */
    public function overagePrice(?int $value): self
    {
        $this->instance->setOveragePrice($value);
        return $this;
    }

    /**
     * Initializes a new create price bracket request object.
     */
    public function build(): CreatePriceBracketRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
