<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function test_example()
    // public function 一覧を取得()
    {
        $tasks = Task::factory()->count(10)->create();
        $response = $this->get('api/tasks');

        $response->assertOk()
            ->assertJsonCount($tasks->count());
    }
}
