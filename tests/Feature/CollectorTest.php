<?php

namespace Tests\Feature;


use App\Models\Collector;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CollectorTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_allonetime_appointments_route()
    {
        $collector = Collector::factory()->create();
        $response = $this->actingAs($collector, 'collector')->get(route('collector.allOne'));

        $response->assertStatus(200);
    }

    public function test_guest_allonetime_appointments_route()
    {

        $response = $this->get(route('collector.allOne'));

        $response->assertStatus(302);
    }

    public function test_auth_allweekly_appointments_route(){
        $collector = Collector::factory()->create();
        $response = $this->actingAs($collector, 'collector')->get(route('collector.allWeekly'));

        $response->assertStatus(200);
    }

    public function test_guest_allweekly_appointments_route(){

        $response = $this->get(route('collector.allWeekly'));

        $response->assertStatus(302);
    }

    public function test_auth_collector_profile_route(){
        $collector = Collector::factory()->create();
        $response = $this->actingAs($collector, 'collector')->get('/collector/profile');

        $response->assertStatus(200);
    }

    public function test_guest_profile_route(){

        $response = $this->get(route('collector.profile'));

        $response->assertStatus(302);
    }


    public function test_auth_update_collector_profile(){
        $collector = Collector::factory()->create();
        $response = $this->actingAs($collector, 'collector')->post(route('collector.profile'), [
            'vehicle_num' => 'GE-34032-32',
            'phone_num'   => $this->generateUniqueCode(),
        ]);

        $response->assertRedirect(route('collector.home'));
    }

    public function test_guest_update_collector_profile(){
        $response = $this->post(route('collector.profile'), [
            'vehicle_num' => 'GE-34032-32',
            'phone_num'   => '0272032323'
        ]);

        $response->assertStatus(302);
    }


    public function generateUniqueCode()
    {
        do {
            $code = random_int(1000000000, 9999999999);
        } while (Collector::where("phone_num", "=", $code)->first());

        return $code;
    }

}
