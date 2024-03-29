<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreatePlanItemRequest;
use PagarmeApiSDKLib\Models\CreatePricingSchemeRequest;

/**
 * Builder for model CreatePlanItemRequest
 *
 * @see CreatePlanItemRequest
 */
class CreatePlanItemRequestBuilder
{
    /**
     * @var CreatePlanItemRequest
     */
    private $instance;

    private function __construct(CreatePlanItemRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create plan item request Builder object.
     */
    public static function init(
        string $name,
        CreatePricingSchemeRequest $pricingScheme,
        string $id,
        string $description
    ): self {
        return new self(new CreatePlanItemRequest($name, $pricingScheme, $id, $description));
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
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Initializes a new create plan item request object.
     */
    public function build(): CreatePlanItemRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
