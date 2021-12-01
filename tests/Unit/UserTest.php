<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_register_User()
    {
        $user = User::factory()->make()->toArray();
        $response = $this->post('/register',$user);
        $response->assertStatus(200);
    }
}
