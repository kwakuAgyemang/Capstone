<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\WeeklyAppointments;

class WeeklyAppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'day_of_week'    => 'Tuesday',
            'collector_id'   => random_int(1, 10),
            'landmark'       => Str::random(10),
            'house_number'   => random_int(1, 20),
            'user_id'        => random_int(1, 10),
            'status'         => 'PENDING'

        ];
    }
}
