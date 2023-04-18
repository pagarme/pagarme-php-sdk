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
use PagarmeApiSDKLib\Models\CreateCustomerRequest;
use PagarmeApiSDKLib\Models\CreatePeriodRequest;
use PagarmeApiSDKLib\Models\CreatePricingSchemeRequest;
use PagarmeApiSDKLib\Models\CreateSetupRequest;
use PagarmeApiSDKLib\Models\CreateShippingRequest;
use PagarmeApiSDKLib\Models\CreateSubMerchantRequest;
use PagarmeApiSDKLib\Models\CreateSubscriptionBoletoRequest;
use PagarmeApiSDKLib\Models\CreateSubscriptionRequest;
use PagarmeApiSDKLib\Models\CreateSubscriptionSplitRequest;

/**
 * Builder for model CreateSubscriptionRequest
 *
 * @see CreateSubscriptionRequest
 */
class CreateSubscriptionRequestBuilder
{
    /**
     * @var CreateSubscriptionRequest
     */
    private $instance;

    private function __construct(CreateSubscriptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create subscription request Builder object.
     */
    public static function init(
        CreateCustomerRequest $customer,
        CreateCardRequest $card,
        string $code,
        string $paymentMethod,
        string $billingType,
        string $statementDescriptor,
        string $description,
        string $currency,
        string $interval,
        int $intervalCount,
        CreatePricingSchemeRequest $pricingScheme,
        array $items,
        CreateShippingRequest $shipping,
        array $discounts,
        array $metadata,
        array $increments
    ): self {
        return new self(new CreateSubscriptionRequest(
            $customer,
            $card,
            $code,
            $paymentMethod,
            $billingType,
            $statementDescriptor,
            $description,
            $currency,
            $interval,
            $intervalCount,
            $pricingScheme,
            $items,
            $shipping,
            $discounts,
            $metadata,
            $increments
        ));
    }

    /**
     * Sets setup field.
     */
    public function setup(?CreateSetupRequest $value): self
    {
        $this->instance->setSetup($value);
        return $this;
    }

    /**
     * Sets plan id field.
     */
    public function planId(?string $value): self
    {
        $this->instance->setPlanId($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets card id field.
     */
    public function cardId(?string $value): self
    {
        $this->instance->setCardId($value);
        return $this;
    }

    /**
     * Sets billing day field.
     */
    public function billingDay(?int $value): self
    {
        $this->instance->setBillingDay($value);
        return $this;
    }

    /**
     * Sets installments field.
     */
    public function installments(?int $value): self
    {
        $this->instance->setInstallments($value);
        return $this;
    }

    /**
     * Sets start at field.
     */
    public function startAt(?\DateTime $value): self
    {
        $this->instance->setStartAt($value);
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
     * Sets cycles field.
     */
    public function cycles(?int $value): self
    {
        $this->instance->setCycles($value);
        return $this;
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
     * Sets gateway affiliation id field.
     */
    public function gatewayAffiliationId(?string $value): self
    {
        $this->instance->setGatewayAffiliationId($value);
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
     * Sets boleto due days field.
     */
    public function boletoDueDays(?int $value): self
    {
        $this->instance->setBoletoDueDays($value);
        return $this;
    }

    /**
     * Sets period field.
     */
    public function period(?CreatePeriodRequest $value): self
    {
        $this->instance->setPeriod($value);
        return $this;
    }

    /**
     * Sets submerchant field.
     */
    public function submerchant(?CreateSubMerchantRequest $value): self
    {
        $this->instance->setSubmerchant($value);
        return $this;
    }

    /**
     * Sets split field.
     */
    public function split(?CreateSubscriptionSplitRequest $value): self
    {
        $this->instance->setSplit($value);
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
     * Initializes a new create subscription request object.
     */
    public function build(): CreateSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
