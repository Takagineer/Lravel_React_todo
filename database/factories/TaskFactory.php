<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Task::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(round(15, 40)),
            'is_done' => $this->faker->boolean(10),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
