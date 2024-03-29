<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetUsageReportResponse;

/**
 * Builder for model GetUsageReportResponse
 *
 * @see GetUsageReportResponse
 */
class GetUsageReportResponseBuilder
{
    /**
     * @var GetUsageReportResponse
     */
    private $instance;

    private function __construct(GetUsageReportResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get usage report response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetUsageReportResponse());
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Unsets url field.
     */
    public function unsetUrl(): self
    {
        $this->instance->unsetUrl();
        return $this;
    }

    /**
     * Sets usage report url field.
     */
    public function usageReportUrl(?string $value): self
    {
        $this->instance->setUsageReportUrl($value);
        return $this;
    }

    /**
     * Unsets usage report url field.
     */
    public function unsetUsageReportUrl(): self
    {
        $this->instance->unsetUsageReportUrl();
        return $this;
    }

    /**
     * Sets grouped report url field.
     */
    public function groupedReportUrl(?string $value): self
    {
        $this->instance->setGroupedReportUrl($value);
        return $this;
    }

    /**
     * Unsets grouped report url field.
     */
    public function unsetGroupedReportUrl(): self
    {
        $this->instance->unsetGroupedReportUrl();
        return $this;
    }

    /**
     * Initializes a new get usage report response object.
     */
    public function build(): GetUsageReportResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
