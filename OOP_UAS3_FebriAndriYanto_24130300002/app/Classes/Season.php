<?php

namespace App\Classes;

class Season
{
    private string $seasonId;
    private int $year;
    private string $league;
    private \DateTime $startDate;
    private \DateTime $endDate;

    public function __construct(
        string $seasonId,
        int $year,
        string $league,
        \DateTime $startDate,
        \DateTime $endDate
    ) {
        $this->seasonId = $seasonId;
        $this->year = $year;
        $this->league = $league;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return Match[]
     */
    public function getMatches(): array
    {
        // Return daftar pertandingan untuk musim ini
        return [];
    }

    /**
     * @return array<string, int>
     */
    public function getStandings(): array
    {
        // Return klasemen musim ini
        return [];
    }
}