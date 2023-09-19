<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeedPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            
            1 => [
                'permissions' => [1, 2],
            ],
            2 => [
                'permissions' => [1],
            ],

        ];

        foreach ($permissions as $id => $permission) {
            $role = Role::find($id);

            foreach ($permission as $key => $ids) {
                $role->{$key}()->sync($ids);
            }
        }
    }
}
