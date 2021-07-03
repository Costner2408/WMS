<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['admin', 'client'];

        foreach ($types as $type) {
            Role::create([
                'type' => $type,
            ]);
        }
    }
}
