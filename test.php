<?php

namespace Invoicing;

$address = new Address(Address::ADDRESS_TYPE_ACTUAL);
$address
    ->setCountry('Latvia')
    ->setRegion('Rigas pilseta')
    ->setCity('Riga')
    ->setAddress('Kuršu iela 25-30')
    ->setZipCode('LV-1006');

$requisites = new BankRequisites();

$person = new NaturalPerson();
$person
    ->setBankRequisites($requisites)
    ->setAddress('actual', $address)
    ->setName('Emils')
    ->setSurname('Jansons')
    ->setPersonCode('311294-11567')
    ->setPhoneNumber('+371 26648480');

var_dump($person);