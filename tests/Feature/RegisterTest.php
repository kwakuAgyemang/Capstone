<?php

namespace Tests\Feature;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_page()
    {
        $response = $this->get('/user/register');

        $response->assertStatus(200);
    }

    // public function test_registration(){
    //     $user = User::factory()->create();
    //     $response = $this->post(route('user.register'), $user);

    //     $response->assertRedirect(route('user.home'));


    // }


}
