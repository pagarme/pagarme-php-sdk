<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateBankTransferPaymentRequest;
use PagarmeApiSDKLib\Models\CreateBoletoPaymentRequest;
use PagarmeApiSDKLib\Models\CreateCashPaymentRequest;
use PagarmeApiSDKLib\Models\CreateCheckoutPaymentRequest;
use PagarmeApiSDKLib\Models\CreateCreditCardPaymentRequest;
use PagarmeApiSDKLib\Models\CreateCustomerRequest;
use PagarmeApiSDKLib\Models\CreateDebitCardPaymentRequest;
use PagarmeApiSDKLib\Models\CreatePaymentRequest;
use PagarmeApiSDKLib\Models\CreatePixPaymentRequest;
use PagarmeApiSDKLib\Models\CreatePrivateLabelPaymentRequest;
use PagarmeApiSDKLib\Models\CreateVoucherPaymentRequest;

/**
 * Builder for model CreatePaymentRequest
 *
 * @see CreatePaymentRequest
 */
class CreatePaymentRequestBuilder
{
    /**
     * @var CreatePaymentRequest
     */
    private $instance;

    private function __construct(CreatePaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create payment request Builder object.
     */
    public static function init(string $paymentMethod): self
    {
        return new self(new CreatePaymentRequest($paymentMethod));
    }

    /**
     * Sets credit card field.
     */
    public function creditCard(?CreateCreditCardPaymentRequest $value): self
    {
        $this->instance->setCreditCard($value);
        return $this;
    }

    /**
     * Sets debit card field.
     */
    public function debitCard(?CreateDebitCardPaymentRequest $value): self
    {
        $this->instance->setDebitCard($value);
        return $this;
    }

    /**
     * Sets boleto field.
     */
    public function boleto(?CreateBoletoPaymentRequest $value): self
    {
        $this->instance->setBoleto($value);
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
     * Sets voucher field.
     */
    public function voucher(?CreateVoucherPaymentRequest $value): self
    {
        $this->instance->setVoucher($value);
        return $this;
    }

    /**
     * Sets split field.
     */
    public function split(?array $value): self
    {
        $this->instance->setSplit($value);
        return $this;
    }

    /**
     * Sets bank transfer field.
     */
    public function bankTransfer(?CreateBankTransferPaymentRequest $value): self
    {
        $this->instance->setBankTransfer($value);
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
     * Sets amount field.
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets checkout field.
     */
    public function checkout(?CreateCheckoutPaymentRequest $value): self
    {
        $this->instance->setCheckout($value);
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
     * Sets customer field.
     */
    public function customer(?CreateCustomerRequest $value): self
    {
        $this->instance->setCustomer($value);
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
     * Sets cash field.
     */
    public function cash(?CreateCashPaymentRequest $value): self
    {
        $this->instance->setCash($value);
        return $this;
    }

    /**
     * Sets private label field.
     */
    public function privateLabel(?CreatePrivateLabelPaymentRequest $value): self
    {
        $this->instance->setPrivateLabel($value);
        return $this;
    }

    /**
     * Sets pix field.
     */
    public function pix(?CreatePixPaymentRequest $value): self
    {
        $this->instance->setPix($value);
        return $this;
    }

    /**
     * Initializes a new create payment request object.
     */
    public function build(): CreatePaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
