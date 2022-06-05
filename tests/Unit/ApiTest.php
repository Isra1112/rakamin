<?php

namespace Tests\Unit;

use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_category()
    {
        $response = $this->get('/category');

        $response->assertStatus(200);
        // $response = $this->postJson('/api/v1/aticle', ['name' => 'article name','user_id'=>'1']);

       
        // $response
        //     ->assertStatus(201)
        //     ->assertJson([
        //         "success" => true,
        //         "message" => "Category created successfully."
        //     ]);
    }
    public function test_article()
    {
        $response = $this->get('/article');

        $response->assertStatus(200);
        // $response = $this->postJson('/api/v1/aticle', ['name' => 'article name','user_id'=>'1']);

       
        // $response
        //     ->assertStatus(201)
        //     ->assertJson([
        //         "success" => true,
        //         "message" => "Category created successfully."
        //     ]);
    }
}
