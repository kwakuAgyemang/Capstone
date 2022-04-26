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
    public function test_allonetime_appointments_route()
    {
        $user = Collector::factory()->create();
        $response = $this->actingAs($user)->get(route('collector.allOne'));

        $response->assertStatus(302);
    }

    public function test_allweekly_appointments_route(){
        $user = Collector::factory()->create();
        $response = $this->actingAs($user)->get(route('collector.allWeekly'));

        $response->assertStatus(302);
    }

    public function test_collector_profile_route(){
        $user = Collector::factory()->create();
        $response = $this->actingAs($user)->get('/collector/profile');

        $response->assertStatus(302);
    }

    public function test_collector_profile(){
        $user = Collector::factory()->create();
        $response = $this->actingAs($user)->post(route('collector.profile'));

        $response->assertStatus(302);
    }


}
