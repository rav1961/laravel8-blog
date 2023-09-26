<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_excepted_columns(): void
    {
        $this->assertTrue(Schema::hasColumns('users', [
            'id', 'first_name', 'email', 'email_verified_at',
            'password', 'role', 'created_at', 'updated_at',
        ]));
    }
}
