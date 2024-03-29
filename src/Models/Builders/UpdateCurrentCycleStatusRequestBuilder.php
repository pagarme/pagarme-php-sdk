<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateCurrentCycleStatusRequest;

/**
 * Builder for model UpdateCurrentCycleStatusRequest
 *
 * @see UpdateCurrentCycleStatusRequest
 */
class UpdateCurrentCycleStatusRequestBuilder
{
    /**
     * @var UpdateCurrentCycleStatusRequest
     */
    private $instance;

    private function __construct(UpdateCurrentCycleStatusRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update current cycle status request Builder object.
     */
    public static function init(string $status): self
    {
        return new self(new UpdateCurrentCycleStatusRequest($status));
    }

    /**
     * Initializes a new update current cycle status request object.
     */
    public function build(): UpdateCurrentCycleStatusRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
