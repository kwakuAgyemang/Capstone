<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeeklyAppointmentTest extends TestCase
{

    /**
     * Test a guest's appointment route
     *
     * @return void
     */
    public function test_guest_weeklyappointment_route()
    {
        $response = $this->get('/user/appointment');

        $response->assertStatus(302);
    }

    public function test_auth_weeklyappointment_route(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('user.weeklyappointments'));
        $response->assertStatus(200);
    }

    public function test_auth_can_create_weekly_appointment(){
        //$appointments = Appointments::factory()->create();
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('user.weeklyappointments'), [
            'day_of_week'  => 'Tuesday',
            'collector_id' => 7,
            'landmark'     => 'Delsi Kids',
            'house_number' => 5,
            'user_id'      => 1,
            'status'       => 'PENDING'
        ]);
        $response->assertRedirect(route('user.home'));
        $this->assertDatabaseHas('weeklyappointments', [
            'day_of_week' => 'Tuesday',
            'landmark' => 'Delsi Kids',
            'collector_id' => 7
        ]);
    }

    public function test_guest_can_create_weekly_appointment(){
        $response = $this->post(route('user.weeklyappointments'), [
            'day_of_week'  => 'Wednesday',
            'collector_id' => 7,
            'landmark'     => 'Delsi Kids',
            'house_number' => 5,
            'user_id'      => 1,
            'status'       => 'PENDING'
        ]);
        $response->assertStatus(302);
    }
}
