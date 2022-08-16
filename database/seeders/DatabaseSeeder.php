<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create(
            [
                'role_id'       => 1,
                'name'          => 'Admin',
                'username'      => 'admin',
                'email'         => 'admin@admin.com',
                'image'         => 'default.png',
                'about'         => 'Bio of admin',
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ]
        );

        User::create(
            [
                'role_id'       => 2,
                'name'          => 'Agent',
                'username'      => 'agent',
                'email'         => 'agent@agent.com',
                'image'         => 'default.png',
                'about'         => '',
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ]
        );
        
        User::create(
            [
                'role_id'       => 3,
                'name'          => 'User',
                'username'      => 'user',
                'email'         => 'user@user.com',
                'image'         => 'default.png',
                'about'         => null,
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ]
        );        
 
        Role::create(
            [
                'name'          => 'Admin',
                'slug'          => 'admin',
                'created_at'    => date("Y-m-d H:i:s")
            ]
        );

        Role::create(
            [
                'name'          => 'Agent',
                'slug'          => 'agent',
                'created_at'    => date("Y-m-d H:i:s")
            ]
        );
        
        Role::create(
            [
                'name'          => 'User',
                'slug'          => 'user',
                'created_at'    => date("Y-m-d H:i:s")
            ]
        );        
        
    }
}
