<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
            ['name' => 'Super Admin', 'permissions' => 'all'],
            ['name' => 'Seller', 'permissions' => "ver-post,crear-post,editar-post,eliminar-post"],
            ['name' => 'Buyer', 'permissions' => "ver-post"]
        ];
        foreach ($roles as $role) {
            $rol = Role::create(['name' => $role['name']]);
            if ($role['permissions'] == 'all') {
                $permissions = Permission::pluck('id','id')->all();
                $rol->syncPermissions($permissions);
            } else {
                echo $role['permissions'];
                $permissions = Permission::whereIn('name',explode(',',$role['permissions']))->get()->pluck('id','id');
                var_dump($permissions);
                $rol->syncPermissions($permissions);
            }
        }
    }
}
