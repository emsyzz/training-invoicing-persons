<?php

namespace Invoicing;

/**
 * Interface AddressInterface
 * @package Invoicing
 */
interface AddressInterface
{

    /**
     * @return string
     */
    function getType();

    /**
     * @return string
     */
    function getCountry();

    /**
     * @return string
     */
    function getRegion();

    /**
     * @return string
     */
    function getCity();

    /**
     * @return string
     */
    function getZipCode();

    /**
     * @return string
     */
    function getAddress();

}