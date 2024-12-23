<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityLoggingTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_activity_is_logged()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $this->assertDatabaseHas('activity_logs', [
            'user_id' => $user->id,
            'action' => 'page_visit',
        ]);
    }
}
