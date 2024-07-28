<?php

namespace Database\Factories;

use App\Models\Passkey;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PasskeyFactory extends Factory
{
    protected $model = Passkey::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->word,
            'credential_id' => Str::random(),
            'data' => [],
        ];
    }
}
