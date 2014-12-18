<?php

namespace Invoicing;

/**
 * Class BankRequisites
 * @package Invoicing
 */
class BankRequisites
{

    /**
     * @var null|string
     */
    protected $bankName;

    /**
     * @var null|string
     */
    protected $bankSwift;

    /**
     * @var null|string
     */
    protected $accountNumber;


    /**
     * @return null|string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setBankName($name)
    {
        $this->bankName = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBankSwift()
    {
        return $this->bankSwift;
    }

    /**
     * @param $swift
     * @return $this
     */
    public function setBankSwift($swift)
    {
        $this->bankSwift = $swift;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

}