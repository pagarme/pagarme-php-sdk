<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCardRequest;
use PagarmeApiSDKLib\Models\CreateSubscriptionBoletoRequest;
use PagarmeApiSDKLib\Models\UpdateSubscriptionPaymentMethodRequest;

/**
 * Builder for model UpdateSubscriptionPaymentMethodRequest
 *
 * @see UpdateSubscriptionPaymentMethodRequest
 */
class UpdateSubscriptionPaymentMethodRequestBuilder
{
    /**
     * @var UpdateSubscriptionPaymentMethodRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionPaymentMethodRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update subscription payment method request Builder object.
     */
    public static function init(string $paymentMethod, string $cardId, CreateCardRequest $card): self
    {
        return new self(new UpdateSubscriptionPaymentMethodRequest($paymentMethod, $cardId, $card));
    }

    /**
     * Sets card token field.
     */
    public function cardToken(?string $value): self
    {
        $this->instance->setCardToken($value);
        return $this;
    }

    /**
     * Sets boleto field.
     */
    public function boleto(?CreateSubscriptionBoletoRequest $value): self
    {
        $this->instance->setBoleto($value);
        return $this;
    }

    /**
     * Sets indirect acceptor field.
     */
    public function indirectAcceptor(?string $value): self
    {
        $this->instance->setIndirectAcceptor($value);
        return $this;
    }

    /**
     * Unsets indirect acceptor field.
     */
    public function unsetIndirectAcceptor(): self
    {
        $this->instance->unsetIndirectAcceptor();
        return $this;
    }

    /**
     * Initializes a new update subscription payment method request object.
     */
    public function build(): UpdateSubscriptionPaymentMethodRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
