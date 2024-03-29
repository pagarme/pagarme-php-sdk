<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdatePricingSchemeRequest;

/**
 * Builder for model UpdatePricingSchemeRequest
 *
 * @see UpdatePricingSchemeRequest
 */
class UpdatePricingSchemeRequestBuilder
{
    /**
     * @var UpdatePricingSchemeRequest
     */
    private $instance;

    private function __construct(UpdatePricingSchemeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update pricing scheme request Builder object.
     */
    public static function init(string $schemeType, array $priceBrackets): self
    {
        return new self(new UpdatePricingSchemeRequest($schemeType, $priceBrackets));
    }

    /**
     * Sets price field.
     */
    public function price(?int $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Sets minimum price field.
     */
    public function minimumPrice(?int $value): self
    {
        $this->instance->setMinimumPrice($value);
        return $this;
    }

    /**
     * Sets percentage field.
     */
    public function percentage(?float $value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Initializes a new update pricing scheme request object.
     */
    public function build(): UpdatePricingSchemeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
