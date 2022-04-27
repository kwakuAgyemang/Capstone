<?php

namespace Tests\Feature;



use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;
use App\Models\Collector;

class RegisterTest extends TestCase
{

    //use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guest_can_access_user_register_route()
    {
        $response = $this->get('/user/register');

        $response->assertStatus(200);
    }

    public function test_guest_can_access_collector_register_route()
    {
        $response = $this->get('/collector/register');

        $response->assertStatus(200);
    }

    public function test_auth_user_cannot_access_user_register_route(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/user/register');
        $response->assertRedirect(route('user.home'));
    }

    public function test_auth_collector_cannot_access_collector_register_route(){
        $collector = Collector::factory()->create();
        $response = $this->actingAs($collector, 'collector')->get('/collector/register');
        $response->assertRedirect(route('collector.home'));
    }

    public function test_guest_user_registration(){

        $response = $this->post(route('user.register'), [
            'name' => 'Agyeman',
            'email' => Str::random(20). '@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone_num' => $this->generateUniqueCode(),

        ]);

        $response->assertRedirect(route('home'));


    }

    public function test_auth_user_registration(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('user.register'), [
            'name' => 'Agyeman',
            'email' => Str::random(20). '@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone_num' => $this->generateUniqueCode(),

        ]);

        $response->assertRedirect(route('user.home'));


    }



    public function generateUniqueCode()
    {
        do {
            $code = random_int(1000000000, 9999999999);
        } while (User::where("phone_num", "=", $code)->first());

        return $code;
    }

}
