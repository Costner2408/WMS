<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Profile;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = Profile::create([
            'device_id' => 1234,
            'address' => 'Kota Mas',
            'phone' => '087889370607',
            'account_number' => '087889370607'
        ]);

        User::create([
            'role_id' => 1,
            'profile_id' => $profile->id,
            'name' => 'Costner',
            'email' => 'costner@email.com',
            'password' => bcrypt('password')
        ]);
    }
}
