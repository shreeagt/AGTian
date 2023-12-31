<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SRM;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',            
            'password' => bcrypt('bidinls')
        ]);
    
        $role = Role::create(['name' => 'admin']);
     
        $permissions = Permission::pluck('id','id')->all();
        $permissions[] = Permission::create(['name' => 'srm'])->id; // Add 'access-srm' permission

   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
    
}