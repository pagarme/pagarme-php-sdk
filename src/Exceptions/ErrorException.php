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
    private $request;

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
     * Returns Request.
     */
    public function getRequest(): ?array
    {
        return $this->request;
    }

    /**
     * Sets Request.
     *
     * @maps request
     */
    public function setRequest(?array $request): void
    {
        $this->request = $request;
    }
}
