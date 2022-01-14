<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetSubscriptionSplitResponse implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var GetSplitResponse[]
     */
    private $rules;

    /**
     * @param bool $enabled
     * @param GetSplitResponse[] $rules
     */
    public function __construct(bool $enabled, array $rules)
    {
        $this->enabled = $enabled;
        $this->rules = $rules;
    }

    /**
     * Returns Enabled.
     *
     * Defines if the split is enabled
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     *
     * Defines if the split is enabled
     *
     * @required
     * @maps enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Rules.
     *
     * Split
     *
     * @return GetSplitResponse[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * Sets Rules.
     *
     * Split
     *
     * @required
     * @maps rules
     *
     * @param GetSplitResponse[] $rules
     */
    public function setRules(array $rules): void
    {
        $this->rules = $rules;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return mixed
     */
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['enabled'] = $this->enabled;
        $json['rules']   = $this->rules;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
