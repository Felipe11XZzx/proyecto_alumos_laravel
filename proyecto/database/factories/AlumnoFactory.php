<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Facades\Hash;

class AlumnoFactory extends Factory
{
    public function dni():string {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $num=$this->faker->unique()->randomNumber(8);
        $cif = $num."-".$letras[$num % 23];
        return $cif;
    }
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'dni' => $this->dni(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password123'),
        ];
    }
}
