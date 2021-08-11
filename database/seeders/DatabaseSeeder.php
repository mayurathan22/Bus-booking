<?php

namespace Database\Seeders;
// namespace Database\RoleSeeders;
use Illuminate\Database\Eloquent\Model;
// use Database\Seeders\RoleTableSeeder;
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
        // \App\Models\User::factory(10)->create();
        Model::unguard();
        $this->call(RoleTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        Model::reguard();

    }
}
