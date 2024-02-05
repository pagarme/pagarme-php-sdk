<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateManagingPartnerRequest;
use PagarmeApiSDKLib\Models\CreateRegisterInformationAddressRequest;

/**
 * Builder for model CreateManagingPartnerRequest
 *
 * @see CreateManagingPartnerRequest
 */
class CreateManagingPartnerRequestBuilder
{
    /**
     * @var CreateManagingPartnerRequest
     */
    private $instance;

    private function __construct(CreateManagingPartnerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create managing partner request Builder object.
     */
    public static function init(
        string $name,
        string $email,
        string $document,
        string $motherName,
        string $birthdate,
        string $monthlyIncome,
        string $professionalOccupation,
        bool $selfDeclaredLegalRepresentative,
        CreateRegisterInformationAddressRequest $address,
        array $phoneNumbers
    ): self {
        return new self(new CreateManagingPartnerRequest(
            $name,
            $email,
            $document,
            $motherName,
            $birthdate,
            $monthlyIncome,
            $professionalOccupation,
            $selfDeclaredLegalRepresentative,
            $address,
            $phoneNumbers
        ));
    }

    /**
     * Initializes a new create managing partner request object.
     */
    public function build(): CreateManagingPartnerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
