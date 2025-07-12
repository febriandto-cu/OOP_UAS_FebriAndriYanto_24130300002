<?php

namespace App\Classes;

use App\Abstracts\Person;

class Staff extends Person
{
    private string $staffId;
    private string $clubId;
    private string $role;
    private string $department;

    public function __construct(
        string $personId,
        string $firstName,
        string $lastName,
        \DateTime $dateOfBirth,
        string $nationality,
        string $staffId,
        string $clubId,
        string $role,
        string $department
    ) {
        parent::__construct($personId, $firstName, $lastName, $dateOfBirth, $nationality);
        $this->staffId = $staffId;
        $this->clubId = $clubId;
        $this->role = $role;
        $this->department = $department;
    }

    public function performDuties(): void
    {
        // Implementasi logika tugas staff
    }
}