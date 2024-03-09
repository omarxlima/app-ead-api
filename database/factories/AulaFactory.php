<?php

namespace Database\Factories;

use App\Models\Aula;
use App\Models\Modulo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class AulaFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aula::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nome = $this->faker->unique()->name;
        return [
            'modulo_id' => Modulo::factory(),
            'nome' => $nome,
            'url' => Str::slug($nome),
            'video' => Str::random(),
            'descricao' => $this->faker->sentence(20),
            
        ];
    }
}
