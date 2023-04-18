<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdatePriceBracketRequest;

/**
 * Builder for model UpdatePriceBracketRequest
 *
 * @see UpdatePriceBracketRequest
 */
class UpdatePriceBracketRequestBuilder
{
    /**
     * @var UpdatePriceBracketRequest
     */
    private $instance;

    private function __construct(UpdatePriceBracketRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update price bracket request Builder object.
     */
    public static function init(int $startQuantity, int $price): self
    {
        return new self(new UpdatePriceBracketRequest($startQuantity, $price));
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
     * Initializes a new update price bracket request object.
     */
    public function build(): UpdatePriceBracketRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
