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
     * @var null|Address
     */
    protected $actualAddress;

    /**
     * @var null|string
     */
    protected $phoneNumber;

    /**
     * @var null|string
     */
    protected $email;

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
     * @return Address|null
     */
    public function getActualAddress()
    {
        return $this->actualAddress;
    }

    /**
     * @param Address $address
     * @return $this
     * @throws AddressException
     */
    public function setActualAddress(Address $address)
    {
        if(Address::ADDRESS_TYPE_ACTUAL !== $address->getType())
        {
            throw new AddressException('Invalid address type "'. $address->getType() .'". Expected "'. Address::ADDRESS_TYPE_ACTUAL .'".');
        }

        $this->actualAddress = $address;

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
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

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