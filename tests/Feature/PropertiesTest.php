<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PropertiesTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function a_user_can_view_properties()
    {

        $response = $this->get('/properties');

        $response->assertStatus(200);
    }
}
