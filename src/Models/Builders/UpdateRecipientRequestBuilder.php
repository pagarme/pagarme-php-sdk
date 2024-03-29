<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateRecipientRequest;

/**
 * Builder for model UpdateRecipientRequest
 *
 * @see UpdateRecipientRequest
 */
class UpdateRecipientRequestBuilder
{
    /**
     * @var UpdateRecipientRequest
     */
    private $instance;

    private function __construct(UpdateRecipientRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update recipient request Builder object.
     */
    public static function init(
        string $name,
        string $email,
        string $description,
        string $type,
        string $status,
        array $metadata
    ): self {
        return new self(new UpdateRecipientRequest($name, $email, $description, $type, $status, $metadata));
    }

    /**
     * Initializes a new update recipient request object.
     */
    public function build(): UpdateRecipientRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
