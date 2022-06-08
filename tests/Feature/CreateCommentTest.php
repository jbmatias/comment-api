<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CreateCommentTest extends TestCase
{    

    use WithFaker;

    public function test_register_user_with_referral()
    {        
        $name = $this->faker->name();
        $data = [
            "name" => $name,
            "comment" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type andscrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ];
        
        $this->postJson(route('comment.store'), collect($data)->toArray())            
            ->assertStatus(200);             

        $this->assertDatabaseHas('comments', [
            'name' => $name
        ]);
    }
}
