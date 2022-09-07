<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        $user = User::create([
            'name' => 'Admin',
            'email' => 'jeisson@admin.com',
            'password' => bcrypt('987654321'),
        ],
        );
        $rol = Role::where('name', 'Super Admin')->first();        
        $user->assignRole([$rol->id]);
    }
}
