<?php

namespace App\Classes;

class Sponsor
{
    private string $sponsorId;
    private string $name;
    private string $contactPerson;
    private string $phone;
    private string $email;
    private float $contractValue;
    private \DateTime $contractStartDate;
    private \DateTime $contractEndDate;

    public function __construct(
        string $sponsorId,
        string $name,
        string $contactPerson,
        string $phone,
        string $email,
        float $contractValue,
        \DateTime $contractStartDate,
        \DateTime $contractEndDate
    ) {
        $this->sponsorId = $sponsorId;
        $this->name = $name;
        $this->contactPerson = $contactPerson;
        $this->phone = $phone;
        $this->email = $email;
        $this->contractValue = $contractValue;
        $this->contractStartDate = $contractStartDate;
        $this->contractEndDate = $contractEndDate;
    }

    public function renewContract(\DateTime $newEndDate, float $newValue): void
    {
        $this->contractEndDate = $newEndDate;
        $this->contractValue = $newValue;
    }
    public function getName(): string
    {
        return $this->name;
    }
}