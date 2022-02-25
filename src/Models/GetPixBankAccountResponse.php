<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Payer's bank details.
 */
class GetPixBankAccountResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bankName;

    /**
     * @var string|null
     */
    private $ispb;

    /**
     * @var string|null
     */
    private $branchCode;

    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * Returns Bank Name.
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     *
     * @maps bank_name
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Ispb.
     */
    public function getIspb(): ?string
    {
        return $this->ispb;
    }

    /**
     * Sets Ispb.
     *
     * @maps ispb
     */
    public function setIspb(?string $ispb): void
    {
        $this->ispb = $ispb;
    }

    /**
     * Returns Branch Code.
     */
    public function getBranchCode(): ?string
    {
        return $this->branchCode;
    }

    /**
     * Sets Branch Code.
     *
     * @maps branch_code
     */
    public function setBranchCode(?string $branchCode): void
    {
        $this->branchCode = $branchCode;
    }

    /**
     * Returns Account Number.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
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
        $json['bank_name']      = $this->bankName;
        $json['ispb']           = $this->ispb;
        $json['branch_code']    = $this->branchCode;
        $json['account_number'] = $this->accountNumber;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
