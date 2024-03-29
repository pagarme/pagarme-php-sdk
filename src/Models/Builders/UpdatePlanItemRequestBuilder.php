<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdatePlanItemRequest;
use PagarmeApiSDKLib\Models\UpdatePricingSchemeRequest;

/**
 * Builder for model UpdatePlanItemRequest
 *
 * @see UpdatePlanItemRequest
 */
class UpdatePlanItemRequestBuilder
{
    /**
     * @var UpdatePlanItemRequest
     */
    private $instance;

    private function __construct(UpdatePlanItemRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update plan item request Builder object.
     */
    public static function init(
        string $name,
        string $description,
        string $status,
        UpdatePricingSchemeRequest $pricingScheme
    ): self {
        return new self(new UpdatePlanItemRequest($name, $description, $status, $pricingScheme));
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets cycles field.
     */
    public function cycles(?int $value): self
    {
        $this->instance->setCycles($value);
        return $this;
    }

    /**
     * Initializes a new update plan item request object.
     */
    public function build(): UpdatePlanItemRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
