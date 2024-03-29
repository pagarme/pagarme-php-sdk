<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetPayableResponse;

/**
 * Builder for model GetPayableResponse
 *
 * @see GetPayableResponse
 */
class GetPayableResponseBuilder
{
    /**
     * @var GetPayableResponse
     */
    private $instance;

    private function __construct(GetPayableResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get payable response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetPayableResponse());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
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
     * Sets amount field.
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets fee field.
     */
    public function fee(?int $value): self
    {
        $this->instance->setFee($value);
        return $this;
    }

    /**
     * Unsets fee field.
     */
    public function unsetFee(): self
    {
        $this->instance->unsetFee();
        return $this;
    }

    /**
     * Sets anticipation fee field.
     */
    public function anticipationFee(?int $value): self
    {
        $this->instance->setAnticipationFee($value);
        return $this;
    }

    /**
     * Unsets anticipation fee field.
     */
    public function unsetAnticipationFee(): self
    {
        $this->instance->unsetAnticipationFee();
        return $this;
    }

    /**
     * Sets fraud coverage fee field.
     */
    public function fraudCoverageFee(?int $value): self
    {
        $this->instance->setFraudCoverageFee($value);
        return $this;
    }

    /**
     * Unsets fraud coverage fee field.
     */
    public function unsetFraudCoverageFee(): self
    {
        $this->instance->unsetFraudCoverageFee();
        return $this;
    }

    /**
     * Sets installment field.
     */
    public function installment(?int $value): self
    {
        $this->instance->setInstallment($value);
        return $this;
    }

    /**
     * Unsets installment field.
     */
    public function unsetInstallment(): self
    {
        $this->instance->unsetInstallment();
        return $this;
    }

    /**
     * Sets gateway id field.
     */
    public function gatewayId(?int $value): self
    {
        $this->instance->setGatewayId($value);
        return $this;
    }

    /**
     * Unsets gateway id field.
     */
    public function unsetGatewayId(): self
    {
        $this->instance->unsetGatewayId();
        return $this;
    }

    /**
     * Sets charge id field.
     */
    public function chargeId(?string $value): self
    {
        $this->instance->setChargeId($value);
        return $this;
    }

    /**
     * Unsets charge id field.
     */
    public function unsetChargeId(): self
    {
        $this->instance->unsetChargeId();
        return $this;
    }

    /**
     * Sets split id field.
     */
    public function splitId(?string $value): self
    {
        $this->instance->setSplitId($value);
        return $this;
    }

    /**
     * Unsets split id field.
     */
    public function unsetSplitId(): self
    {
        $this->instance->unsetSplitId();
        return $this;
    }

    /**
     * Sets bulk anticipation id field.
     */
    public function bulkAnticipationId(?string $value): self
    {
        $this->instance->setBulkAnticipationId($value);
        return $this;
    }

    /**
     * Unsets bulk anticipation id field.
     */
    public function unsetBulkAnticipationId(): self
    {
        $this->instance->unsetBulkAnticipationId();
        return $this;
    }

    /**
     * Sets anticipation id field.
     */
    public function anticipationId(?string $value): self
    {
        $this->instance->setAnticipationId($value);
        return $this;
    }

    /**
     * Unsets anticipation id field.
     */
    public function unsetAnticipationId(): self
    {
        $this->instance->unsetAnticipationId();
        return $this;
    }

    /**
     * Sets recipient id field.
     */
    public function recipientId(?string $value): self
    {
        $this->instance->setRecipientId($value);
        return $this;
    }

    /**
     * Unsets recipient id field.
     */
    public function unsetRecipientId(): self
    {
        $this->instance->unsetRecipientId();
        return $this;
    }

    /**
     * Sets originator model field.
     */
    public function originatorModel(?string $value): self
    {
        $this->instance->setOriginatorModel($value);
        return $this;
    }

    /**
     * Unsets originator model field.
     */
    public function unsetOriginatorModel(): self
    {
        $this->instance->unsetOriginatorModel();
        return $this;
    }

    /**
     * Sets originator model id field.
     */
    public function originatorModelId(?string $value): self
    {
        $this->instance->setOriginatorModelId($value);
        return $this;
    }

    /**
     * Unsets originator model id field.
     */
    public function unsetOriginatorModelId(): self
    {
        $this->instance->unsetOriginatorModelId();
        return $this;
    }

    /**
     * Sets payment date field.
     */
    public function paymentDate(?\DateTime $value): self
    {
        $this->instance->setPaymentDate($value);
        return $this;
    }

    /**
     * Unsets payment date field.
     */
    public function unsetPaymentDate(): self
    {
        $this->instance->unsetPaymentDate();
        return $this;
    }

    /**
     * Sets original payment date field.
     */
    public function originalPaymentDate(?\DateTime $value): self
    {
        $this->instance->setOriginalPaymentDate($value);
        return $this;
    }

    /**
     * Unsets original payment date field.
     */
    public function unsetOriginalPaymentDate(): self
    {
        $this->instance->unsetOriginalPaymentDate();
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
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
     * Sets accrual at field.
     */
    public function accrualAt(?\DateTime $value): self
    {
        $this->instance->setAccrualAt($value);
        return $this;
    }

    /**
     * Unsets accrual at field.
     */
    public function unsetAccrualAt(): self
    {
        $this->instance->unsetAccrualAt();
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
     * Sets liquidation arrangement id field.
     */
    public function liquidationArrangementId(?string $value): self
    {
        $this->instance->setLiquidationArrangementId($value);
        return $this;
    }

    /**
     * Unsets liquidation arrangement id field.
     */
    public function unsetLiquidationArrangementId(): self
    {
        $this->instance->unsetLiquidationArrangementId();
        return $this;
    }

    /**
     * Initializes a new get payable response object.
     */
    public function build(): GetPayableResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
