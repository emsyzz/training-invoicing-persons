<?php

namespace Invoicing;

class LegalPerson extends Person
{

    /**
     * @var null|Address
     */
    protected $legalAddress;

    /**
     * @var null|Address
     */
    protected $mailingAddress;

    /**
     * @var null|string
     */
    protected $registrationNumber;

    /**
     * @var null|string
     */
    protected $vatRegistrationNumber;

    /**
     * @var null|NaturalPerson
     */
    protected $contactPerson;


    /**
     * @return null|string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * @param string $regNum
     * @return $this
     */
    public function setRegistrationNumber($regNum)
    {
        $this->registrationNumber = $regNum;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getVatRegistrationNumber()
    {
        return $this->vatRegistrationNumber;
    }

    /**
     * @param string $vatRegNum
     * @return $this
     */
    public function setVatRegistrationNumber($vatRegNum)
    {
        $this->vatRegistrationNumber = $vatRegNum;

        return $this;
    }

    /**
     * @return NaturalPerson|null
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param NaturalPerson $person
     * @return $this
     */
    public function setContactPerson(NaturalPerson $person)
    {
        $this->contactPerson = $person;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getLegalAddress()
    {
        return $this->legalAddress;
    }

    /**
     * @param Address $address
     * @return $this
     * @throws AddressException
     */
    public function setLegalAddress(Address $address)
    {
        if(Address::ADDRESS_TYPE_LEGAL !== $address->getType())
        {
            throw new AddressException('Invalid address type "'. $address->getType() .'". Expected "'. Address::ADDRESS_TYPE_LEGAL .'".');
        }

        $this->legalAddress = $address;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getMailingAddress()
    {
        return $this->mailingAddress;
    }

    /**
     * @param Address $address
     * @return $this
     * @throws AddressException
     */
    public function setMailingAddress(Address $address)
    {
        if(Address::ADDRESS_TYPE_MAILING !== $address->getType())
        {
            throw new AddressException('Invalid address type "'. $address->getType() .'". Expected "'. Address::ADDRESS_TYPE_MAILING .'".');
        }

        $this->mailingAddress = $address;

        return $this;
    }

}