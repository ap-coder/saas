<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'             => 1,
                'title'          => 'Admin',
                'stripe_plan_id' => null,
                'price'          => null,
            ],
            [
                'id'             => 2,
                'title'          => 'Free Plan',
                'stripe_plan_id' => null,
                'price'          => null,
            ],
            [
                'id'             => 3,
                'title'          => 'Basic Site Maintenance',
                'stripe_plan_id' => 'plan_xxxxxxxxxxxxxx',
                'price'          => 4999,
            ],
            [
                'id'             => 4,
                'title'          => 'Upgraded Maintenance',
                'stripe_plan_id' => 'plan_xxxxxxxxxxxxxx',
                'price'          => 9999,
            ],
            [
                'id'             => 5,
                'title'          => 'Basic Monthly Retainer',
                'stripe_plan_id' => 'plan_xxxxxxxxxxxxxx',
                'price'          => 19999,
            ],
            [
                'id'             => 6,
                'title'          => 'Pro Monthly Retainer',
                'stripe_plan_id' => 'plan_xxxxxxxxxxxxxx',
                'price'          => 29999,
            ],
        ];

        Role::insert($roles);

    }
}
