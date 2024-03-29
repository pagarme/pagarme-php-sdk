<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCardOptionsRequest;

/**
 * Builder for model CreateCardOptionsRequest
 *
 * @see CreateCardOptionsRequest
 */
class CreateCardOptionsRequestBuilder
{
    /**
     * @var CreateCardOptionsRequest
     */
    private $instance;

    private function __construct(CreateCardOptionsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create card options request Builder object.
     */
    public static function init(bool $verifyCard): self
    {
        return new self(new CreateCardOptionsRequest($verifyCard));
    }

    /**
     * Initializes a new create card options request object.
     */
    public function build(): CreateCardOptionsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
