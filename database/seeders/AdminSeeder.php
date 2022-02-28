<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        'nama' => 'Administrator',
        'email' => 'admin@gmail.com',
        'role' => 'admin',
        'password' => bcrypt('1234'),
        ]);

        Admin::create([
        'nama' => 'Resepsionis',
        'email' => 'res@gmail.com',
        'role' => 'resepsionis',
        'password' => bcrypt('1234'),
        ]);

        Admin::create([
        'nama' => 'Resepsionis 2',
        'email' => 'res2@gmail.com',
        'role' => 'resepsionis',
        'password' => bcrypt('1234'),
        ]);
    }
}
