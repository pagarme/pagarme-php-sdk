<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetUsageReportResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
     */
    private $usageReportUrl;

    /**
     * @var string|null
     */
    private $groupedReportUrl;

    /**
     * Returns Url.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Usage Report Url.
     */
    public function getUsageReportUrl(): ?string
    {
        return $this->usageReportUrl;
    }

    /**
     * Sets Usage Report Url.
     *
     * @maps usage_report_url
     */
    public function setUsageReportUrl(?string $usageReportUrl): void
    {
        $this->usageReportUrl = $usageReportUrl;
    }

    /**
     * Returns Grouped Report Url.
     */
    public function getGroupedReportUrl(): ?string
    {
        return $this->groupedReportUrl;
    }

    /**
     * Sets Grouped Report Url.
     *
     * @maps grouped_report_url
     */
    public function setGroupedReportUrl(?string $groupedReportUrl): void
    {
        $this->groupedReportUrl = $groupedReportUrl;
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
        $json['url']                = $this->url;
        $json['usage_report_url']   = $this->usageReportUrl;
        $json['grouped_report_url'] = $this->groupedReportUrl;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
