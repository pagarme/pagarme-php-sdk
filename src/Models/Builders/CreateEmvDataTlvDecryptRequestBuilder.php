<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateEmvDataTlvDecryptRequest;

/**
 * Builder for model CreateEmvDataTlvDecryptRequest
 *
 * @see CreateEmvDataTlvDecryptRequest
 */
class CreateEmvDataTlvDecryptRequestBuilder
{
    /**
     * @var CreateEmvDataTlvDecryptRequest
     */
    private $instance;

    private function __construct(CreateEmvDataTlvDecryptRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create emv data tlv decrypt request Builder object.
     */
    public static function init(string $tag, string $lenght, string $value): self
    {
        return new self(new CreateEmvDataTlvDecryptRequest($tag, $lenght, $value));
    }

    /**
     * Initializes a new create emv data tlv decrypt request object.
     */
    public function build(): CreateEmvDataTlvDecryptRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
