<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RoleItems = [
            [
                'name'        => 'Admin',
            ],
            [
                'name'        => 'Customer',
            ],
           
        ];

        /*
         * Add Role Items
         *
         */
        foreach ($RoleItems as $RoleItem) {
            // $newRoleItem = config('roles.models.role')::where('slug', '=', $RoleItem['slug'])->first();
            // if ($newRoleItem === null) {
            //     $newRoleItem = config('roles.models.role')::create([
            //         'name'          => $RoleItem['name'],
                    
            //     ]);
            // }
            $role_user=Role::create([
                'name' => $RoleItem['name'],
            ]);

        }
    }
}
