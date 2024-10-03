<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Exceptions;

/**
 * Api Error Exception
 */
class ErrorException extends ApiException
{
    /**
     * @var string|null
     */
    private $messageProperty;

    /**
     * @var array|null
     */
    private $errors;

    /**
     * @var array|null
     */
    private $requestProperty;

    /**
     * Returns Message Property.
     */
    public function getMessageProperty(): ?string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     *
     * @maps message
     */
    public function setMessageProperty(?string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }

    /**
     * Returns Errors.
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Request Property.
     */
    public function getRequestProperty(): ?array
    {
        return $this->requestProperty;
    }

    /**
     * Sets Request Property.
     *
     * @maps request
     */
    public function setRequestProperty(?array $requestProperty): void
    {
        $this->requestProperty = $requestProperty;
    }
}
