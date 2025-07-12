<?php

namespace App\Classes;

class Match
{
    private string $matchId;
    private string $homeTeamId;
    private string $awayTeamId;
    private \DateTime $matchDate;
    private string $matchTime;
    private string $stadiumId;
    private int $homeScore;
    private int $awayScore;
    private string $competition;
    private string $seasonId;

    public function __construct(
        string $matchId,
        string $homeTeamId,
        string $awayTeamId,
        \DateTime $matchDate,
        string $matchTime,
        string $stadiumId,
        string $competition,
        string $seasonId,
        int $homeScore = 0,
        int $awayScore = 0
    ) {
        $this->matchId = $matchId;
        $this->homeTeamId = $homeTeamId;
        $this->awayTeamId = $awayTeamId;
        $this->matchDate = $matchDate;
        $this->matchTime = $matchTime;
        $this->stadiumId = $stadiumId;
        $this->competition = $competition;
        $this->seasonId = $seasonId;
        $this->homeScore = $homeScore;
        $this->awayScore = $awayScore;
    }

    public function recordScore(int $homeScore, int $awayScore): void
    {
        $this->homeScore = $homeScore;
        $this->awayScore = $awayScore;
    }

    /**
     * @return array<string, mixed>
     */
    public function generateReport(): array
    {
        return [
            'matchId' => $this->matchId,
            'homeTeamId' => $this->homeTeamId,
            'awayTeamId' => $this->awayTeamId,
            'matchDate' => $this->matchDate->format('Y-m-d'),
            'matchTime' => $this->matchTime,
            'stadiumId' => $this->stadiumId,
            'homeScore' => $this->homeScore,
            'awayScore' => $this->awayScore,
            'competition' => $this->competition,
            'seasonId' => $this->seasonId,
        ];
    }

    // Tambahkan getter dan setter sesuai kebutuhan
}