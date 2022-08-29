<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
       // $this->call([UsersTableSeeder::class]);
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'jeisson@admin.com',
            'password' => bcrypt('987654321'),],
        );
    }
}
