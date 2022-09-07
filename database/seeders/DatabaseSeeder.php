<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
       // $this->call([UsersTableSeeder::class]);
        $user = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'jeisson@admin.com',
            'password' => bcrypt('987654321'),
        ],
    );
        $rol = Role::create(['name' => 'Super Admin']);

        $permission = Permission::pluck('id','id')->all();

        $rol->syncPermissions($permission);

        $user->assignRole([$rol->id]);

    factory(\App\Models\Post::class, 25)->create();
    }
}
