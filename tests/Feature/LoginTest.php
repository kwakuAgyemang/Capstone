<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

    /**
     * Testing for loggin in
     *
     * @return void
     */
    public function test_login(){
        $response = $this->post('/user/login', [
            'email'    => 'kwaku.agyeman@ashesi.edu.gh',
            'password' => 'immortals123'
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/user/home');
    }

}
