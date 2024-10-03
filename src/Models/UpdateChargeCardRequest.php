<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Request for updating card data
 */
class UpdateChargeCardRequest implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $updateSubscription;

    /**
     * @var string
     */
    private $cardId;

    /**
     * @var CreateCardRequest
     */
    private $card;

    /**
     * @var bool
     */
    private $recurrence;

    /**
     * @var string|null
     */
    private $initiatedType;

    /**
     * @var string|null
     */
    private $recurrenceModel;

    /**
     * @var CreatePaymentOriginRequest|null
     */
    private $paymentOrigin;

    /**
     * @param bool $updateSubscription
     * @param string $cardId
     * @param CreateCardRequest $card
     * @param bool $recurrence
     */
    public function __construct(bool $updateSubscription, string $cardId, CreateCardRequest $card, bool $recurrence)
    {
        $this->updateSubscription = $updateSubscription;
        $this->cardId = $cardId;
        $this->card = $card;
        $this->recurrence = $recurrence;
    }

    /**
     * Returns Update Subscription.
     * Indicates if the subscriptions using this card must also be updated
     */
    public function getUpdateSubscription(): bool
    {
        return $this->updateSubscription;
    }

    /**
     * Sets Update Subscription.
     * Indicates if the subscriptions using this card must also be updated
     *
     * @required
     * @maps update_subscription
     */
    public function setUpdateSubscription(bool $updateSubscription): void
    {
        $this->updateSubscription = $updateSubscription;
    }

    /**
     * Returns Card Id.
     * Card id
     */
    public function getCardId(): string
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * Card id
     *
     * @required
     * @maps card_id
     */
    public function setCardId(string $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns Card.
     * Card data
     */
    public function getCard(): CreateCardRequest
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * Card data
     *
     * @required
     * @maps card
     */
    public function setCard(CreateCardRequest $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Recurrence.
     * Indicates a recurrence
     */
    public function getRecurrence(): bool
    {
        return $this->recurrence;
    }

    /**
     * Sets Recurrence.
     * Indicates a recurrence
     *
     * @required
     * @maps recurrence
     */
    public function setRecurrence(bool $recurrence): void
    {
        $this->recurrence = $recurrence;
    }

    /**
     * Returns Initiated Type.
     */
    public function getInitiatedType(): ?string
    {
        return $this->initiatedType;
    }

    /**
     * Sets Initiated Type.
     *
     * @maps initiated_type
     */
    public function setInitiatedType(?string $initiatedType): void
    {
        $this->initiatedType = $initiatedType;
    }

    /**
     * Returns Recurrence Model.
     */
    public function getRecurrenceModel(): ?string
    {
        return $this->recurrenceModel;
    }

    /**
     * Sets Recurrence Model.
     *
     * @maps recurrence_model
     */
    public function setRecurrenceModel(?string $recurrenceModel): void
    {
        $this->recurrenceModel = $recurrenceModel;
    }

    /**
     * Returns Payment Origin.
     */
    public function getPaymentOrigin(): ?CreatePaymentOriginRequest
    {
        return $this->paymentOrigin;
    }

    /**
     * Sets Payment Origin.
     *
     * @maps payment_origin
     */
    public function setPaymentOrigin(?CreatePaymentOriginRequest $paymentOrigin): void
    {
        $this->paymentOrigin = $paymentOrigin;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['update_subscription']  = $this->updateSubscription;
        $json['card_id']              = $this->cardId;
        $json['card']                 = $this->card;
        $json['recurrence']           = $this->recurrence;
        if (isset($this->initiatedType)) {
            $json['initiated_type']   = $this->initiatedType;
        }
        if (isset($this->recurrenceModel)) {
            $json['recurrence_model'] = $this->recurrenceModel;
        }
        if (isset($this->paymentOrigin)) {
            $json['payment_origin']   = $this->paymentOrigin;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
