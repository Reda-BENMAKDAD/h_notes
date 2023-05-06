<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'voir-exams']);
        Permission::create(['name' => 'voir-notes']);
        Permission::create(['name' => 'voir-seances']);
        Permission::create(['name' => 'gerer-exams']);
        Permission::create(['name' => 'gerer-notes']);
        Permission::create(['name' => 'gerer-seances']);
        Permission::create(['name' => 'gerer-groupes']);
        Permission::create(['name' => 'gerer-absence']);
        Permission::create(['name' => 'gerer-fillieres']);
        Permission::create(['name' => 'gerer-modules']);
        Permission::create(['name' => 'gerer-comptes']);

        $adminRole = Role::create(['name' => 'Admin']);
        $profRole = Role::create(['name' => 'Prof']);
        $stagiaireRole = Role::create(['name' => 'Stagiaire']);

        $adminRole->givePermissionTo([
            'voir-exams',
            'voir-notes',
            'voir-seances',
            'gerer-exams',
            'gerer-notes',
            'gerer-groupes',
            'gerer-seances',
            'gerer-absence',
            'gerer-fillieres',
            'gerer-modules',
            'gerer-comptes',
        ]);

        $profRole->givePermissionTo([
            'voir-exams',
            'voir-notes',
            'voir-seances',
            'gerer-exams',
            'gerer-notes',
            'gerer-seances',
            'gerer-absence',
        ]);

        $stagiaireRole->givePermissionTo([
            'voir-exams',
            'voir-notes',
            'voir-seances',
            'voir-absence'
        ]);
    }
}
