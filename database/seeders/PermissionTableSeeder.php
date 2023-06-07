<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'R-dashboard',
            'C-dashboard',
            'U-dashboard',
            'D-dashboard',

            'R-user',
            'C-user',
            'U-user',
            'D-user',

            'R-category',
            'C-category',
            'U-category',
            'D-category',

            'R-product',
            'C-product',
            'U-product',
            'D-product',

            'R-history',
            'C-history',
            'U-history',
            'D-history',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}
