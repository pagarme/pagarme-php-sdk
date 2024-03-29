<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateEmvDataDecryptRequest;
use PagarmeApiSDKLib\Models\CreateEmvDataDukptDecryptRequest;

/**
 * Builder for model CreateEmvDataDecryptRequest
 *
 * @see CreateEmvDataDecryptRequest
 */
class CreateEmvDataDecryptRequestBuilder
{
    /**
     * @var CreateEmvDataDecryptRequest
     */
    private $instance;

    private function __construct(CreateEmvDataDecryptRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create emv data decrypt request Builder object.
     */
    public static function init(string $cipher, array $tags): self
    {
        return new self(new CreateEmvDataDecryptRequest($cipher, $tags));
    }

    /**
     * Sets dukpt field.
     */
    public function dukpt(?CreateEmvDataDukptDecryptRequest $value): self
    {
        $this->instance->setDukpt($value);
        return $this;
    }

    /**
     * Initializes a new create emv data decrypt request object.
     */
    public function build(): CreateEmvDataDecryptRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
