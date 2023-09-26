<?php

namespace Tests\Unit;

use App\Enums\Role;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class UserTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_has_excepted_columns(): void
    {
        $this->assertTrue(Schema::hasColumns('users', [
            'id', 'first_name', 'email', 'email_verified_at',
            'password', 'role', 'created_at', 'updated_at',
        ]));
    }

    public function test_has_fillable_attributes(): void
    {
        $fillable = ['first_name', 'email', 'password', 'role'];

        $user = User::factory()->create();

        $this->assertEquals($fillable, $user->getFillable());
    }

    public function test_has_hidden_attributes(): void
    {
        $hidden = ['password', 'remember_token'];

        $user = User::factory()->create();

        $this->assertEquals($hidden, $user->getHidden());
    }

    public function test_it_cast_role_to_enum(): void
    {
        $user = User::factory()->create([
            'role' => Role::ADMIN,
        ]);

        $this->assertInstanceOf(Role::class, $user->role);
        $this->assertEquals(Role::ADMIN, $user->role);
    }

    public function test_user_has_many_posts(): void
    {
        $user = User::factory()->hasPosts(3)->create();

        $this->assertCount(3, $user->posts);
        $this->assertInstanceOf(Collection::class, $user->posts);
        $this->assertContainsOnly(Post::class, $user->posts);
    }
}
