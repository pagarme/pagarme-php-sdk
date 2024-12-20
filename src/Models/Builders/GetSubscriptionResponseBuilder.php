<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetCardResponse;
use PagarmeApiSDKLib\Models\GetCustomerResponse;
use PagarmeApiSDKLib\Models\GetPeriodResponse;
use PagarmeApiSDKLib\Models\GetSetupResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionBoletoResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionSplitResponse;

/**
 * Builder for model GetSubscriptionResponse
 *
 * @see GetSubscriptionResponse
 */
class GetSubscriptionResponseBuilder
{
    /**
     * @var GetSubscriptionResponse
     */
    private $instance;

    private function __construct(GetSubscriptionResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get subscription response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetSubscriptionResponse());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Unsets code field.
     */
    public function unsetCode(): self
    {
        $this->instance->unsetCode();
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
     * Unsets start at field.
     */
    public function unsetStartAt(): self
    {
        $this->instance->unsetStartAt();
        return $this;
    }

    /**
     * Sets interval field.
     */
    public function interval(?string $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Unsets interval field.
     */
    public function unsetInterval(): self
    {
        $this->instance->unsetInterval();
        return $this;
    }

    /**
     * Sets interval count field.
     */
    public function intervalCount(?int $value): self
    {
        $this->instance->setIntervalCount($value);
        return $this;
    }

    /**
     * Unsets interval count field.
     */
    public function unsetIntervalCount(): self
    {
        $this->instance->unsetIntervalCount();
        return $this;
    }

    /**
     * Sets billing type field.
     */
    public function billingType(?string $value): self
    {
        $this->instance->setBillingType($value);
        return $this;
    }

    /**
     * Unsets billing type field.
     */
    public function unsetBillingType(): self
    {
        $this->instance->unsetBillingType();
        return $this;
    }

    /**
     * Sets current cycle field.
     */
    public function currentCycle(?GetPeriodResponse $value): self
    {
        $this->instance->setCurrentCycle($value);
        return $this;
    }

    /**
     * Unsets current cycle field.
     */
    public function unsetCurrentCycle(): self
    {
        $this->instance->unsetCurrentCycle();
        return $this;
    }

    /**
     * Sets payment method field.
     */
    public function paymentMethod(?string $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
    }

    /**
     * Unsets payment method field.
     */
    public function unsetPaymentMethod(): self
    {
        $this->instance->unsetPaymentMethod();
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Unsets currency field.
     */
    public function unsetCurrency(): self
    {
        $this->instance->unsetCurrency();
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
     * Unsets installments field.
     */
    public function unsetInstallments(): self
    {
        $this->instance->unsetInstallments();
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Unsets updated at field.
     */
    public function unsetUpdatedAt(): self
    {
        $this->instance->unsetUpdatedAt();
        return $this;
    }

    /**
     * Sets customer field.
     */
    public function customer(?GetCustomerResponse $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Unsets customer field.
     */
    public function unsetCustomer(): self
    {
        $this->instance->unsetCustomer();
        return $this;
    }

    /**
     * Sets card field.
     */
    public function card(?GetCardResponse $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Unsets card field.
     */
    public function unsetCard(): self
    {
        $this->instance->unsetCard();
        return $this;
    }

    /**
     * Sets items field.
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
        return $this;
    }

    /**
     * Unsets items field.
     */
    public function unsetItems(): self
    {
        $this->instance->unsetItems();
        return $this;
    }

    /**
     * Sets statement descriptor field.
     */
    public function statementDescriptor(?string $value): self
    {
        $this->instance->setStatementDescriptor($value);
        return $this;
    }

    /**
     * Unsets statement descriptor field.
     */
    public function unsetStatementDescriptor(): self
    {
        $this->instance->unsetStatementDescriptor();
        return $this;
    }

    /**
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Unsets metadata field.
     */
    public function unsetMetadata(): self
    {
        $this->instance->unsetMetadata();
        return $this;
    }

    /**
     * Sets setup field.
     */
    public function setup(?GetSetupResponse $value): self
    {
        $this->instance->setSetup($value);
        return $this;
    }

    /**
     * Unsets setup field.
     */
    public function unsetSetup(): self
    {
        $this->instance->unsetSetup();
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
     * Unsets gateway affiliation id field.
     */
    public function unsetGatewayAffiliationId(): self
    {
        $this->instance->unsetGatewayAffiliationId();
        return $this;
    }

    /**
     * Sets next billing at field.
     */
    public function nextBillingAt(?\DateTime $value): self
    {
        $this->instance->setNextBillingAt($value);
        return $this;
    }

    /**
     * Unsets next billing at field.
     */
    public function unsetNextBillingAt(): self
    {
        $this->instance->unsetNextBillingAt();
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
     * Unsets billing day field.
     */
    public function unsetBillingDay(): self
    {
        $this->instance->unsetBillingDay();
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
     * Unsets minimum price field.
     */
    public function unsetMinimumPrice(): self
    {
        $this->instance->unsetMinimumPrice();
        return $this;
    }

    /**
     * Sets canceled at field.
     */
    public function canceledAt(?\DateTime $value): self
    {
        $this->instance->setCanceledAt($value);
        return $this;
    }

    /**
     * Unsets canceled at field.
     */
    public function unsetCanceledAt(): self
    {
        $this->instance->unsetCanceledAt();
        return $this;
    }

    /**
     * Sets discounts field.
     */
    public function discounts(?array $value): self
    {
        $this->instance->setDiscounts($value);
        return $this;
    }

    /**
     * Unsets discounts field.
     */
    public function unsetDiscounts(): self
    {
        $this->instance->unsetDiscounts();
        return $this;
    }

    /**
     * Sets increments field.
     */
    public function increments(?array $value): self
    {
        $this->instance->setIncrements($value);
        return $this;
    }

    /**
     * Unsets increments field.
     */
    public function unsetIncrements(): self
    {
        $this->instance->unsetIncrements();
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
     * Unsets boleto due days field.
     */
    public function unsetBoletoDueDays(): self
    {
        $this->instance->unsetBoletoDueDays();
        return $this;
    }

    /**
     * Sets split field.
     */
    public function split(?GetSubscriptionSplitResponse $value): self
    {
        $this->instance->setSplit($value);
        return $this;
    }

    /**
     * Unsets split field.
     */
    public function unsetSplit(): self
    {
        $this->instance->unsetSplit();
        return $this;
    }

    /**
     * Sets boleto field.
     */
    public function boleto(?GetSubscriptionBoletoResponse $value): self
    {
        $this->instance->setBoleto($value);
        return $this;
    }

    /**
     * Unsets boleto field.
     */
    public function unsetBoleto(): self
    {
        $this->instance->unsetBoleto();
        return $this;
    }

    /**
     * Sets manual billing field.
     */
    public function manualBilling(?bool $value): self
    {
        $this->instance->setManualBilling($value);
        return $this;
    }

    /**
     * Unsets manual billing field.
     */
    public function unsetManualBilling(): self
    {
        $this->instance->unsetManualBilling();
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
     * Initializes a new get subscription response object.
     */
    public function build(): GetSubscriptionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
