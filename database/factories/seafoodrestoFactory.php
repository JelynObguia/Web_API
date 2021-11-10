<?php

namespace Database\Factories;

use App\Models\seafoodresto;
use Illuminate\Database\Eloquent\Factories\Factory;

class seafoodrestoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = seafoodresto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CostumerName' => $this->faker->word,
        'CostumerAddress' => $this->faker->word,
        'CostumerOrder' => $this->faker->word,
        'TotalAmount' => $this->faker->word,
        'AmountPaid' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
