<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Nota;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
{
    protected $model = Nota::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(5),
            'texto' => $this->faker->paragraph(),
            'fecha_creacion' => $this->faker->dateTimeThisYear(),
        ];
    }
}
