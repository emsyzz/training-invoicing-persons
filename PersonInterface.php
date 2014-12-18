<?php

namespace Invoicing;

/**
 * Interface PersonInterface
 * @package Invoicing
 */
interface PersonInterface
{
    /**
     * @return null|string
     */
    function getName();

    /**
     * @return null|Address
     */
    function getActualAddress();

    /**
     * @return null|string
     */
    function getPhoneNumber();

    /**
     * @return null|string
     */
    function getEmail();

}