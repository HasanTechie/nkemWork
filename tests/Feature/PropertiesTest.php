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
        $property = factory('App\Property')->create();
        $response = $this->get('/properties');

        $response->assertSee($property->address);
    }

    /** @test */
    public function a_user_can_view_single_property()
    {
        $property = factory('App\Property')->create();
        $response = $this->get('/properties/'.$property->id);

        $response->assertSee($property->address);
    }
}
