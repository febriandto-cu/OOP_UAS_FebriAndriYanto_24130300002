<?php

namespace App\Classes;

class Contract
{
    private string $contractId;
    private string $clubId;
    private string $personId;
    private \DateTime $startDate;
    private \DateTime $endDate;
    private float $salary;
    private string $clauses;

    public function __construct(
        string $contractId,
        string $clubId,
        string $personId,
        \DateTime $startDate,
        \DateTime $endDate,
        float $salary,
        string $clauses
    ) {
        $this->contractId = $contractId;
        $this->clubId = $clubId;
        $this->personId = $personId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->salary = $salary;
        $this->clauses = $clauses;
    }

    public function renew(\DateTime $newEndDate): void
    {
        $this->endDate = $newEndDate;
    }

    public function terminate(): void
    {
        $this->endDate = new \DateTime(); // Terminated today
    }

    // Getters and setters...
}