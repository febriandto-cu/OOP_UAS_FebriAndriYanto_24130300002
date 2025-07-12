<?php

namespace App\Classes;

class Stadium
{
    private string $stadiumId;
    private string $name;
    private int $capacity;
    private string $address;

    public function __construct(
        string $stadiumId,
        string $name,
        int $capacity,
        string $address
    ) {
        $this->stadiumId = $stadiumId;
        $this->name = $name;
        $this->capacity = $capacity;
        $this->address = $address;
    }

    public function hostMatch(Match $match): void
    {
        // Menyelenggarakan pertandingan
    }

    public function getName(): string
    {
        return $this->name;
    }
}