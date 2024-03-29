<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateSubscriptionMinimumPriceRequest;

/**
 * Builder for model UpdateSubscriptionMinimumPriceRequest
 *
 * @see UpdateSubscriptionMinimumPriceRequest
 */
class UpdateSubscriptionMinimumPriceRequestBuilder
{
    /**
     * @var UpdateSubscriptionMinimumPriceRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionMinimumPriceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update subscription minimum price request Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateSubscriptionMinimumPriceRequest());
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
     * Initializes a new update subscription minimum price request object.
     */
    public function build(): UpdateSubscriptionMinimumPriceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
