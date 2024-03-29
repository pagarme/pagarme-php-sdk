<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\ListWithdrawals;
use PagarmeApiSDKLib\Models\PagingResponse;

/**
 * Builder for model ListWithdrawals
 *
 * @see ListWithdrawals
 */
class ListWithdrawalsBuilder
{
    /**
     * @var ListWithdrawals
     */
    private $instance;

    private function __construct(ListWithdrawals $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list withdrawals Builder object.
     */
    public static function init(array $data, PagingResponse $paging): self
    {
        return new self(new ListWithdrawals($data, $paging));
    }

    /**
     * Initializes a new list withdrawals object.
     */
    public function build(): ListWithdrawals
    {
        return CoreHelper::clone($this->instance);
    }
}
