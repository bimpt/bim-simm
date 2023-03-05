<?php

namespace Database\Seeders\Pengaturan;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'superadmin@bim-pt.co.id',
                'password' => bcrypt('password'),
                'photo' => '',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@bim-pt.co.id',
                'password' => bcrypt('password'),
                'photo' => '',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ])->each(function ($user) {
            DB::table('users')->insert($user);
        });
    }
}
