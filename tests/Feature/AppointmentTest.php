<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Appointments;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class AppointmentTest extends TestCase
{

    /**
     * Testing an authenticated user's route
     *
     * @return void
     */
    public function test_auth_appointment_route(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('user.appointments'));
        $response->assertStatus(200);
    }

    /**
     * Testing a guest's appointment route
     *
     * @return void
     */
    public function test_guest_appointment_route(){
        $response = $this->get(route('user.appointments'));
        $response->assertStatus(302);
    }

    public function test_auth_create_appointment(){
        //$appointments = Appointments::factory()->create();
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('user.appointments'), [
            'date'         => '2022-04-20',
            'collector_id' => 7,
            'landmark'     => 'Delsi Kids',
            'house_number' => 5,
            'user_id'      => 1,
            'status'       => 'PENDING'
        ]);
        $response->assertRedirect(route('user.home'));
        $this->assertDatabaseHas('appointments', [
            'date'     => '2022-04-20',
            'landmark' => 'Delsi Kids',
            'collector_id' => 7
        ]);
    }

    public function test_guest_create_appointment(){
        $response = $this->post(route('user.appointments'), [
            'date'         => '2022-04-20',
            'collector_id' => 7,
            'landmark'     => 'Delsi Kids',
            'house_number' => 5,
            'user_id'      => 1,
            'status'       => 'PENDING'
        ]);
        $response->assertStatus(302);
    }
}
