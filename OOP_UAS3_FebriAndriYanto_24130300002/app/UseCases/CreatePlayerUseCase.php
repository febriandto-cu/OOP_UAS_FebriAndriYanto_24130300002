<?php

namespace App\UseCases;

use App\Interfaces\PersonFactory;
use App\Classes\Player;

class CreatePlayerUseCase
{
    private PersonFactory $personFactory;

    public function __construct(PersonFactory $personFactory)
    {
        $this->personFactory = $personFactory;
    }

    public function execute(array $data): Player
    {
        return $this->personFactory->createPlayer($data);
    }
}