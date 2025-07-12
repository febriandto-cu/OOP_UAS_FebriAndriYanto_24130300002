<?php

namespace App\Abstracts;

abstract class Person
{
    protected string $personId;
    protected string $firstName;
    protected string $lastName;
    protected \DateTime $dateOfBirth;
    protected string $nationality;

    public function __construct(
        string $personId,
        string $firstName,
        string $lastName,
        \DateTime $dateOfBirth,
        string $nationality
    ) {
        $this->personId = $personId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->nationality = $nationality;
    }

    public function getFullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }
}