<?php

namespace Invoicing;

$address = new Address(Address::ADDRESS_TYPE_ACTUAL);
$address
    ->setCountry('Latvija')
    ->setRegion('Rīgas pilsēta')
    ->setCity('Rīga')
    ->setAddress('Brībības iela 65-12')
    ->setZipCode('LV-1010');

$declaredAddress = new Address(Address::ADDRESS_TYPE_DECLARED);
$declaredAddress
    ->setCountry('Latvija')
    ->setRegion('Mārupes novads')
    ->setCity('Mārupe')
    ->setAddress('Biezā iela 34')
    ->setZipCode('LV-3102');


$requisites = new BankRequisites();
$requisites
    ->setBankName('Swedbank')
    ->setBankSwift('LV34HABA')
    ->setAccountNumber('HA43BA058943958403459');

$person = new NaturalPerson();
$person
    ->setBankRequisites($requisites)
    ->setActualAddress($address)
    ->setDeclaredAddress($declaredAddress)
    ->setName('Janis')
    ->setSurname('Zariņš')
    ->setPersonCode('121292-11684')
    ->setPhoneNumber('+371 28441512')
    ->setEmail('janis.zarins@email.com');

$legalAddress = new Address(Address::ADDRESS_TYPE_LEGAL);
$legalAddress
    ->setCountry('Latvija')
    ->setRegion('Rīgas pilsēta')
    ->setCity('Rīga')
    ->setAddress('Kr.Valdemāra iela 169')
    ->setZipCode('LV-1010');

$legalPerson = new LegalPerson();
$legalPerson
    ->setName('SIA "Zari"')
    ->setRegistrationNumber('854923493749524')
    ->setVatRegistrationNumber('LV854923493749524')
    ->setContactPerson($person)
    ->setEmail('info@zari.lv')
    ->setPhoneNumber('+371 65845224')
    ->setLegalAddress($legalAddress);

var_dump($legalPerson);