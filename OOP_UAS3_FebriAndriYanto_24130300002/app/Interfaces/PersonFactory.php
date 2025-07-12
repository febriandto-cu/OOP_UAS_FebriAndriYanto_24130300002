<?php

namespace App\Interfaces;

use App\Classes\Player;
use App\Classes\Coach;
use App\Classes\Staff;

interface PersonFactory
{
    public function createPlayer(array $data): Player;
    public function createCoach(array $data): Coach;
    public function createStaff(array $data): Staff;
}