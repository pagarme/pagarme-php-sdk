<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Response object for getting a charge
 */
class GetChargeResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $gatewayId;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $paymentMethod;

    /**
     * @var \DateTime|null
     */
    private $dueAt;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var GetTransactionResponse
     */
    private $lastTransaction;

    /**
     * @var array
     */
    private $invoice = [];

    /**
     * @var array
     */
    private $order = [];

    /**
     * @var array
     */
    private $customer = [];

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @var array
     */
    private $paidAt = [];

    /**
     * @var array
     */
    private $canceledAt = [];

    /**
     * @var int|null
     */
    private $canceledAmount;

    /**
     * @var int|null
     */
    private $paidAmount;

    /**
     * @var array
     */
    private $interestAndFinePaid = [];

    /**
     * @var array
     */
    private $recurrencyCycle = [];

    /**
     * @param GetTransactionResponse $lastTransaction
     */
    public function __construct(GetTransactionResponse $lastTransaction)
    {
        $this->lastTransaction = $lastTransaction;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Gateway Id.
     */
    public function getGatewayId(): ?string
    {
        return $this->gatewayId;
    }

    /**
     * Sets Gateway Id.
     *
     * @maps gateway_id
     */
    public function setGatewayId(?string $gatewayId): void
    {
        $this->gatewayId = $gatewayId;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Payment Method.
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     *
     * @maps payment_method
     */
    public function setPaymentMethod(?string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Due At.
     */
    public function getDueAt(): ?\DateTime
    {
        return $this->dueAt;
    }

    /**
     * Sets Due At.
     *
     * @maps due_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDueAt(?\DateTime $dueAt): void
    {
        $this->dueAt = $dueAt;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Last Transaction.
     */
    public function getLastTransaction(): GetTransactionResponse
    {
        return $this->lastTransaction;
    }

    /**
     * Sets Last Transaction.
     *
     * @required
     * @maps last_transaction
     */
    public function setLastTransaction(GetTransactionResponse $lastTransaction): void
    {
        $this->lastTransaction = $lastTransaction;
    }

    /**
     * Returns Invoice.
     */
    public function getInvoice(): ?GetInvoiceResponse
    {
        if (count($this->invoice) == 0) {
            return null;
        }
        return $this->invoice['value'];
    }

    /**
     * Sets Invoice.
     *
     * @maps invoice
     */
    public function setInvoice(?GetInvoiceResponse $invoice): void
    {
        $this->invoice['value'] = $invoice;
    }

    /**
     * Unsets Invoice.
     */
    public function unsetInvoice(): void
    {
        $this->invoice = [];
    }

    /**
     * Returns Order.
     */
    public function getOrder(): ?GetOrderResponse
    {
        if (count($this->order) == 0) {
            return null;
        }
        return $this->order['value'];
    }

    /**
     * Sets Order.
     *
     * @maps order
     */
    public function setOrder(?GetOrderResponse $order): void
    {
        $this->order['value'] = $order;
    }

    /**
     * Unsets Order.
     */
    public function unsetOrder(): void
    {
        $this->order = [];
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?GetCustomerResponse
    {
        if (count($this->customer) == 0) {
            return null;
        }
        return $this->customer['value'];
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?GetCustomerResponse $customer): void
    {
        $this->customer['value'] = $customer;
    }

    /**
     * Unsets Customer.
     */
    public function unsetCustomer(): void
    {
        $this->customer = [];
    }

    /**
     * Returns Metadata.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Paid At.
     */
    public function getPaidAt(): ?\DateTime
    {
        if (count($this->paidAt) == 0) {
            return null;
        }
        return $this->paidAt['value'];
    }

    /**
     * Sets Paid At.
     *
     * @maps paid_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setPaidAt(?\DateTime $paidAt): void
    {
        $this->paidAt['value'] = $paidAt;
    }

    /**
     * Unsets Paid At.
     */
    public function unsetPaidAt(): void
    {
        $this->paidAt = [];
    }

    /**
     * Returns Canceled At.
     */
    public function getCanceledAt(): ?\DateTime
    {
        if (count($this->canceledAt) == 0) {
            return null;
        }
        return $this->canceledAt['value'];
    }

    /**
     * Sets Canceled At.
     *
     * @maps canceled_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCanceledAt(?\DateTime $canceledAt): void
    {
        $this->canceledAt['value'] = $canceledAt;
    }

    /**
     * Unsets Canceled At.
     */
    public function unsetCanceledAt(): void
    {
        $this->canceledAt = [];
    }

    /**
     * Returns Canceled Amount.
     * Canceled Amount
     */
    public function getCanceledAmount(): ?int
    {
        return $this->canceledAmount;
    }

    /**
     * Sets Canceled Amount.
     * Canceled Amount
     *
     * @maps canceled_amount
     */
    public function setCanceledAmount(?int $canceledAmount): void
    {
        $this->canceledAmount = $canceledAmount;
    }

    /**
     * Returns Paid Amount.
     * Paid amount
     */
    public function getPaidAmount(): ?int
    {
        return $this->paidAmount;
    }

    /**
     * Sets Paid Amount.
     * Paid amount
     *
     * @maps paid_amount
     */
    public function setPaidAmount(?int $paidAmount): void
    {
        $this->paidAmount = $paidAmount;
    }

    /**
     * Returns Interest and Fine Paid.
     * interest and fine paid
     */
    public function getInterestAndFinePaid(): ?int
    {
        if (count($this->interestAndFinePaid) == 0) {
            return null;
        }
        return $this->interestAndFinePaid['value'];
    }

    /**
     * Sets Interest and Fine Paid.
     * interest and fine paid
     *
     * @maps interest_and_fine_paid
     */
    public function setInterestAndFinePaid(?int $interestAndFinePaid): void
    {
        $this->interestAndFinePaid['value'] = $interestAndFinePaid;
    }

    /**
     * Unsets Interest and Fine Paid.
     * interest and fine paid
     */
    public function unsetInterestAndFinePaid(): void
    {
        $this->interestAndFinePaid = [];
    }

    /**
     * Returns Recurrency Cycle.
     * Defines whether the card has been used one or more times.
     */
    public function getRecurrencyCycle(): ?string
    {
        if (count($this->recurrencyCycle) == 0) {
            return null;
        }
        return $this->recurrencyCycle['value'];
    }

    /**
     * Sets Recurrency Cycle.
     * Defines whether the card has been used one or more times.
     *
     * @maps recurrency_cycle
     */
    public function setRecurrencyCycle(?string $recurrencyCycle): void
    {
        $this->recurrencyCycle['value'] = $recurrencyCycle;
    }

    /**
     * Unsets Recurrency Cycle.
     * Defines whether the card has been used one or more times.
     */
    public function unsetRecurrencyCycle(): void
    {
        $this->recurrencyCycle = [];
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
        $json['id']                         = $this->id;
        $json['code']                       = $this->code;
        $json['gateway_id']                 = $this->gatewayId;
        $json['amount']                     = $this->amount;
        $json['status']                     = $this->status;
        $json['currency']                   = $this->currency;
        $json['payment_method']             = $this->paymentMethod;
        $json['due_at']                     = DateTimeHelper::toRfc3339DateTime($this->dueAt);
        $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']                 = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['last_transaction']           = $this->lastTransaction;
        if (!empty($this->invoice)) {
            $json['invoice']                = $this->invoice['value'];
        }
        if (!empty($this->order)) {
            $json['order']                  = $this->order['value'];
        }
        if (!empty($this->customer)) {
            $json['customer']               = $this->customer['value'];
        }
        $json['metadata']                   = $this->metadata;
        if (!empty($this->paidAt)) {
            $json['paid_at']                = DateTimeHelper::toRfc3339DateTime($this->paidAt['value']);
        }
        if (!empty($this->canceledAt)) {
            $json['canceled_at']            = DateTimeHelper::toRfc3339DateTime($this->canceledAt['value']);
        }
        $json['canceled_amount']            = $this->canceledAmount;
        $json['paid_amount']                = $this->paidAmount;
        if (!empty($this->interestAndFinePaid)) {
            $json['interest_and_fine_paid'] = $this->interestAndFinePaid['value'];
        }
        if (!empty($this->recurrencyCycle)) {
            $json['recurrency_cycle']       = $this->recurrencyCycle['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
