<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCheckoutBankTransferRequest;

/**
 * Builder for model CreateCheckoutBankTransferRequest
 *
 * @see CreateCheckoutBankTransferRequest
 */
class CreateCheckoutBankTransferRequestBuilder
{
    /**
     * @var CreateCheckoutBankTransferRequest
     */
    private $instance;

    private function __construct(CreateCheckoutBankTransferRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create checkout bank transfer request Builder object.
     */
    public static function init(array $bank, int $retries): self
    {
        return new self(new CreateCheckoutBankTransferRequest($bank, $retries));
    }

    /**
     * Initializes a new create checkout bank transfer request object.
     */
    public function build(): CreateCheckoutBankTransferRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
