<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateAddressRequest;
use PagarmeApiSDKLib\Models\UpdateCardRequest;

/**
 * Builder for model UpdateCardRequest
 *
 * @see UpdateCardRequest
 */
class UpdateCardRequestBuilder
{
    /**
     * @var UpdateCardRequest
     */
    private $instance;

    private function __construct(UpdateCardRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update card request Builder object.
     */
    public static function init(
        string $holderName,
        int $expMonth,
        int $expYear,
        CreateAddressRequest $billingAddress,
        array $metadata,
        string $label
    ): self {
        return new self(
            new UpdateCardRequest($holderName, $expMonth, $expYear, $billingAddress, $metadata, $label)
        );
    }

    /**
     * Sets billing address id field.
     */
    public function billingAddressId(?string $value): self
    {
        $this->instance->setBillingAddressId($value);
        return $this;
    }

    /**
     * Unsets billing address id field.
     */
    public function unsetBillingAddressId(): self
    {
        $this->instance->unsetBillingAddressId();
        return $this;
    }

    /**
     * Initializes a new update card request object.
     */
    public function build(): UpdateCardRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
