<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Collector;

class LoginTest extends TestCase
{

    /**
     * Testing for loggin in
     *
     * @return void
     */
    public function test_guest_login_to_user(){
        $response = $this->post('/user/login', [
            'email'    => 'kwaku.agyeman@ashesi.edu.gh',
            'password' => 'immortals123'
        ]);
        $response->assertRedirect('/user/home');
    }

    public function test_guest_login_to_collector(){

        $response = $this->post('/collector/login', [
            'email'    => 'komari@yahoo.com',
            'password' => 'awesome123'
        ]);
        $response->assertRedirect('/collector/profile');

    }

}
