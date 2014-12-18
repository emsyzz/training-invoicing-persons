<?php

namespace Invoicing;

/**
 * Class Person
 * @package Invoicing
 */
abstract class Person implements PersonInterface
{

    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|Address[]
     */
    protected $addresses;

    /**
     * @var null|string
     */
    protected $phoneNumber;

    /**
     * @var null|BankRequisites
     */
    protected $bankRequisites;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $type
     * @return Address|null
     */
    public function getAddress($type)
    {
        if(is_array($this->addresses) && isset($this->addresses[$type]) && $this->addresses[$type] instanceof Address)
        {
            return $this->addresses[$type];
        }

        return null;
    }

    /**
     * @param string $idf
     * @param Address $address
     * @return $this
     */
    public function setAddress($idf, Address $address)
    {
        if(!is_array($this->addresses))
        {
            $this->addresses = array();
        }

        $this->addresses[$idf] = $address;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return BankRequisites|null
     */
    public function getBankRequisites()
    {
        return $this->bankRequisites;
    }

    /**
     * @param BankRequisites $bankRequisites
     * @return $this
     */
    public function setBankRequisites(BankRequisites $bankRequisites)
    {
        $this->bankRequisites = $bankRequisites;

        return $this;
    }

}