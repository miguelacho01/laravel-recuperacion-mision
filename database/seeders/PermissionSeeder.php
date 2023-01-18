<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Permission::create(['name' => 'create sports']);
        Permission::create(['name' => 'read sports']);
        Permission::create(['name' => 'update sports']);
        Permission::create(['name' => 'delete sports']);

        Permission::create(['name' => 'create positions']);
        Permission::create(['name' => 'read positions']);
        Permission::create(['name' => 'update positions']);
        Permission::create(['name' => 'delete positions']);

        Permission::create(['name' => 'create trainers']);
        Permission::create(['name' => 'read trainers']);
        Permission::create(['name' => 'update trainers']);
        Permission::create(['name' => 'delete trainers']);

        Permission::create(['name' => 'create teams']);
        Permission::create(['name' => 'read teams']);
        Permission::create(['name' => 'update teams']);
        Permission::create(['name' => 'delete teams']);

        Permission::create(['name' => 'create playes']);
        Permission::create(['name' => 'read playes']);
        Permission::create(['name' => 'update playes']);
        Permission::create(['name' => 'delete playes']);

        $roleAdmin = Role::create(['name' => 'admin']);
        $roleTrainer = Role::create(['name' => 'Trainer']);

        $roleAdmin->givePermissionTo([
            'create sports',
            'read sports',
            'update sports',
            'delete sports',
            'create positions',
            'read positions',
            'update positions',
            'delete positions',
            'create trainers',
            'read trainers',
            'update trainers',
            'delete trainers',
            'create teams',
            'read teams',
            'update teams',
            'delete teams',
            'create playes',
            'read playes',
            'update playes',
            'delete playes',
            
        ]);

        $roleTrainer->givePermissionTo([
            'read playes',
            'read teams',

        ]);
    }
}
