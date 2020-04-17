<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = Permission::all();
        $roles       = Role::all();

        $roles->firstWhere('title', 'Admin')->permissions()->attach($permissions);

        $role = Role::where('title', 'Free Plan')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'website_monitoring_access'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Basic Site Maintenance')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'hourly_programming_access'), ['max_amount' => 2]);
        $role->attach($permissions->firstWhere('title', 'seo_site_check_access'), ['max_amount' => 1]);
        $role->attach($permissions->firstWhere('title', 'website_monitoring_access'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Upgraded Maintenance')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'hourly_programming_access'), ['max_amount' => 5]);
        $role->attach($permissions->firstWhere('title', 'seo_site_check_access'), ['max_amount' => 2]);
        $role->attach($permissions->firstWhere('title', 'website_monitoring_access'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Basic Monthly Retainer')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'hourly_programming_access'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'seo_site_check_access'), ['max_amount' => 3]);
        $role->attach($permissions->firstWhere('title', 'website_monitoring_access'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Pro Monthly Retainer')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'hourly_programming_access'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'seo_site_check_access'), ['max_amount' => 4]);
        $role->attach($permissions->firstWhere('title', 'website_monitoring_access'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

    }
}
