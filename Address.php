<?php

namespace Invoicing;

/**
 * Class Address
 * @package Invoicing
 */
class Address implements AddressInterface
{

    const ADDRESS_TYPE_ACTUAL = 'actual';

    const ADDRESS_TYPE_LEGAL = 'legal';

    const ADDRESS_TYPE_MAILING = 'mailing';

    const ADDRESS_TYPE_DECLARED = 'declared';


    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $region;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $zipCode;

    /**
     * @var string
     */
    protected $address;


    public function __construct($addressType = self::ADDRESS_TYPE_ACTUAL)
    {
        $this->setType($addressType);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     * @throws AddressException
     */
    public function setType($type)
    {
        if(!in_array($type, array(
            self::ADDRESS_TYPE_ACTUAL,
            self::ADDRESS_TYPE_DECLARED,
            self::ADDRESS_TYPE_LEGAL,
            self::ADDRESS_TYPE_MAILING
        )))
        {
            throw new AddressException;
        }

        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zibCode
     * @return string
     */
    public function setZipCode($zibCode)
    {
        $this->zipCode = $zibCode;

        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

}