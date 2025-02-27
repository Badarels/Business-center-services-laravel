<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genre = $this->faker->randomElement(['masculin', 'feminin']);
        //$role = $this->faker->randomElement([1, 0]);
        return [
            //
            "Nom"=>$this->faker->LastName,
            "Prenom"=>$this->faker->Name,
            "dateNaissance"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "sexe"=>$genre,
            "ville" => $this->faker->text(100),
            "adresse" => $this->faker->address,
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "numeroPieceIdentite" => $this->faker->swiftBicNumber,
            "email" => $this->faker->unique()->safeEmail,
            //"passeword" => $this->faker->password(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

             //"photo" => $this->faker->image(storage_path('bcs',400,300, null, false)), 
            //"photo" => $this->faker->image('public/images/bcs',400,300, null, false),
            //"roles"=>$role,

            //image('template/images/bcs.png',400,300),
        
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
