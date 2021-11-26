<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aden',
            'email' => 'admin@livelihood.com',
            'password' => bcrypt('123456'),
        ]);

        $this->call(ProductSeeder::class);
        $this->call(SertificateSeeder::class);
    }
}
