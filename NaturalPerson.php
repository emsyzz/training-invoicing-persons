<?php

namespace Invoicing;

/**
 * Class NaturalPerson
 * @package Invoicing
 */
class NaturalPerson extends Person
{

    /**
     * @var null|string
     */
    protected $surname;

    /**
     * @var null|string
     */
    protected $personCode;

    /**
     * @var null|Address
     */
    protected $declaredAddress;

    /**
     * @return null|string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPersonCode()
    {
        return $this->personCode;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setPersonCode($code)
    {
        $this->personCode = $code;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getDeclaredAddress()
    {
        return $this->declaredAddress;
    }

    /**
     * @param Address $address
     * @return $this
     * @throws AddressException
     */
    public function setDeclaredAddress(Address $address)
    {
        if(Address::ADDRESS_TYPE_DECLARED !== $address->getType())
        {
            throw new AddressException('Invalid address type "'. $address->getType() .'". Expected "'. Address::ADDRESS_TYPE_DECLARED .'".');
        }

        $this->declaredAddress = $address;

        return $this;
    }

}