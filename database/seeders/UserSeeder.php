<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Administrador",
            "email" => "admin@admin.com",
            "password" => hash("sha256","123456"),
            "rol_id" => 1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
        User::factory(9)->create();
    }
}
