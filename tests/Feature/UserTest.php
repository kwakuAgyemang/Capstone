<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_user_can_access_dashboard()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('user.home'));

        $response->assertStatus(200);
    }

    public function test_unauth_user_cannot_access_dashboard(){
        $response = $this->get(route('user.home'));
        $response->assertStatus(302);
        $response->assertRedirect(route('user.login'));
    }
}
