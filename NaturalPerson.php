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

    protected $personCode;


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

    public function getPersonCode()
    {
        return $this->personCode;
    }

    public function setPersonCode($code)
    {
        $this->personCode = $code;

        return $this;
    }

}