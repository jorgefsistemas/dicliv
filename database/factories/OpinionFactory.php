<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use App\Models\Opinion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class OpinionFactory extends Factory
{
            /**
             * The name of the factory's corresponding model.
             *
             * @var string
             */
            protected $model = Opinion::class;


            public function definition()
            {
                return  [

                    // 'numberSerie' =>$this->faker->Alphanumeric(number: 18),
                    'numberSerie' => strtoupper($this->faker->bothify('?####??#?##??????')),
                    'originVehicle' => $this->faker->numberBetween(1,3),
                    'curp' => strtoupper($this->faker->bothify('####??????######??')),
                    'folioOpinion' => strtoupper($this->faker->bothify('SEM??????'))
                ];
            }
}
