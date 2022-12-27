<?php

namespace Database\Factories;


use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{

    protected $model = Agent::class;
    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */
    public function definition()
    {
        $genre=$this->faker->randomElements(["Masculin","Feminin"]);
        $role=$this->faker->randomElements(["Administrateur","Agent"]);
        
        return [
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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //"photo" => $this->faker->image(storage_path('',400,300, null, false)), 
            //"photo" => $this->faker->image('public/images/bcs',400,300, null, false),
            "role"=>$role,
        ];
    }
}
