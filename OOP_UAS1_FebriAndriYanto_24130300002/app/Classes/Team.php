<?php

namespace App\Classes;

class Team
{
    private string $teamId;
    private string $clubId;
    private string $name;
    private string $league;
    private string $division;

    /** @var Player[] */
    private array $players = [];

    public function __construct(
        string $teamId,
        string $clubId,
        string $name,
        string $league,
        string $division
    ) {
        $this->teamId = $teamId;
        $this->clubId = $clubId;
        $this->name = $name;
        $this->league = $league;
        $this->division = $division;
    }

    public function addPlayer(Player $player): void
    {
        $this->players[] = $player;
    }

    public function removePlayer(Player $player): void
    {
        foreach ($this->players as $key => $p) {
            if ($p === $player) {
                unset($this->players[$key]);
                break;
            }
        }
        $this->players = array_values($this->players);
    }

    public function scheduleTraining(TrainingSession $session): void
    {
        // Implementasi logika penjadwalan latihan
    }

    // Getters and setters...
}