<?php

namespace Database\Factories;

use App\Models\Appointments;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AppointmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'           => $this->faker->date,
            'collector_id'   => random_int(1, 10),
            'landmark'       => Str::random(10),
            'house_number'   => random_int(1, 20),
            'user_id'        => random_int(1, 10),
            'status'         => 'PENDING'

        ];
    }
}
