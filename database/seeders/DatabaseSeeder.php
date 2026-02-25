<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'ADMINISTRADOR', 'email' => 'admin@email.com','password' => bcrypt('21246813')]);
        User::create(['name' => 'Juan Perez', 'email' => 'caracas@email.com','password' => bcrypt('caracas')]);
    }
}
