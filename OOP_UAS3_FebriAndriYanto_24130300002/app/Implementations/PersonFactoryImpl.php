<?php

namespace App\Implementations;

use App\Interfaces\PersonFactory;
use App\Classes\Player;
use App\Classes\Coach;
use App\Classes\Staff;

class PersonFactoryImpl implements PersonFactory
{
    public function createPlayer(array $data): Player
    {
        return new Player(
            $data['personId'],
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['nationality'],
            $data['teamId'],
            $data['position'],
            $data['jerseyNumber'],
            $data['marketValue'],
            $data['status']
        );
    }

    public function createCoach(array $data): Coach
    {
        return new Coach(
            $data['personId'],
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['nationality'],
            $data['teamId'],
            $data['role'],
            $data['licenseLevel']
        );
    }

    public function createStaff(array $data): Staff
    {
        return new Staff(
            $data['personId'],
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['nationality'],
            $data['clubId'],
            $data['role'],
            $data['department']
        );
    }
}