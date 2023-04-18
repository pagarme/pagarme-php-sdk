<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetAddressResponse;
use PagarmeApiSDKLib\Models\GetCustomerResponse;

/**
 * Builder for model GetAddressResponse
 *
 * @see GetAddressResponse
 */
class GetAddressResponseBuilder
{
    /**
     * @var GetAddressResponse
     */
    private $instance;

    private function __construct(GetAddressResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get address response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetAddressResponse());
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
     * Sets street field.
     */
    public function street(?string $value): self
    {
        $this->instance->setStreet($value);
        return $this;
    }

    /**
     * Unsets street field.
     */
    public function unsetStreet(): self
    {
        $this->instance->unsetStreet();
        return $this;
    }

    /**
     * Sets number field.
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Unsets number field.
     */
    public function unsetNumber(): self
    {
        $this->instance->unsetNumber();
        return $this;
    }

    /**
     * Sets complement field.
     */
    public function complement(?string $value): self
    {
        $this->instance->setComplement($value);
        return $this;
    }

    /**
     * Unsets complement field.
     */
    public function unsetComplement(): self
    {
        $this->instance->unsetComplement();
        return $this;
    }

    /**
     * Sets zip code field.
     */
    public function zipCode(?string $value): self
    {
        $this->instance->setZipCode($value);
        return $this;
    }

    /**
     * Unsets zip code field.
     */
    public function unsetZipCode(): self
    {
        $this->instance->unsetZipCode();
        return $this;
    }

    /**
     * Sets neighborhood field.
     */
    public function neighborhood(?string $value): self
    {
        $this->instance->setNeighborhood($value);
        return $this;
    }

    /**
     * Unsets neighborhood field.
     */
    public function unsetNeighborhood(): self
    {
        $this->instance->unsetNeighborhood();
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Unsets city field.
     */
    public function unsetCity(): self
    {
        $this->instance->unsetCity();
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Unsets state field.
     */
    public function unsetState(): self
    {
        $this->instance->unsetState();
        return $this;
    }

    /**
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Unsets country field.
     */
    public function unsetCountry(): self
    {
        $this->instance->unsetCountry();
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
     * Sets line 1 field.
     */
    public function line1(?string $value): self
    {
        $this->instance->setLine1($value);
        return $this;
    }

    /**
     * Unsets line 1 field.
     */
    public function unsetLine1(): self
    {
        $this->instance->unsetLine1();
        return $this;
    }

    /**
     * Sets line 2 field.
     */
    public function line2(?string $value): self
    {
        $this->instance->setLine2($value);
        return $this;
    }

    /**
     * Unsets line 2 field.
     */
    public function unsetLine2(): self
    {
        $this->instance->unsetLine2();
        return $this;
    }

    /**
     * Sets deleted at field.
     */
    public function deletedAt(?\DateTime $value): self
    {
        $this->instance->setDeletedAt($value);
        return $this;
    }

    /**
     * Unsets deleted at field.
     */
    public function unsetDeletedAt(): self
    {
        $this->instance->unsetDeletedAt();
        return $this;
    }

    /**
     * Initializes a new get address response object.
     */
    public function build(): GetAddressResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
