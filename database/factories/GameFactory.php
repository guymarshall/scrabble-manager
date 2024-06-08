<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Random\RandomException;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * @throws RandomException
     */
    public function generateRandomArray(): array
    {
        $length = random_int(1, 100);

        return array_map(static function() {
            random_int(1, 1000);
        }, range(1, $length));
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws RandomException
     */
    public function definition(): array
    {
        return [
//            'player_ids' => $this->generateRandomArray(),
            'player_ids' => random_int(1, 100), // TODO: fix to use array instead of single int
        ];
    }
}
