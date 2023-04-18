<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetWithdrawTargetResponse;

/**
 * Builder for model GetWithdrawTargetResponse
 *
 * @see GetWithdrawTargetResponse
 */
class GetWithdrawTargetResponseBuilder
{
    /**
     * @var GetWithdrawTargetResponse
     */
    private $instance;

    private function __construct(GetWithdrawTargetResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get withdraw target response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetWithdrawTargetResponse());
    }

    /**
     * Sets target id field.
     */
    public function targetId(?string $value): self
    {
        $this->instance->setTargetId($value);
        return $this;
    }

    /**
     * Unsets target id field.
     */
    public function unsetTargetId(): self
    {
        $this->instance->unsetTargetId();
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
     * Initializes a new get withdraw target response object.
     */
    public function build(): GetWithdrawTargetResponse
    {
        return CoreHelper::clone($this->instance);
    }
}