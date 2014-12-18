<?php

namespace Invoicing;

/**
 * Interface PersonInterface
 * @package Invoicing
 */
interface PersonInterface
{
    /**
     * @return string
     */
    function getName();

    /**
     * @param string $type
     * @return null|Address
     */
    function getAddress($type);

    /**
     * @return string
     */
    function getPhoneNumber();

}