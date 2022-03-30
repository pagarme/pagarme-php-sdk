<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

class GetTransactionReportFileResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @param string $name
     * @param \DateTime $date
     */
    public function __construct(string $name, \DateTime $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Date.
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * Sets Date.
     *
     * @required
     * @maps date
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
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
        $json['name'] = $this->name;
        $json['date'] = DateTimeHelper::toRfc3339DateTime($this->date);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
