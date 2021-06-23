<?php

namespace Database\Seeders;

use App\Models\User;
use Bouncer;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('admin')->everything();

        if (User::count() < 5) {
            User::factory()
                ->hasAddress()
                ->count(5)
                ->create();
        }

        if (User::where(['email' => 'admin@admin.com'])->count() == 0) {
            User::factory()
                ->hasAddress()
                ->create(['email' => 'admin@admin.com', 'is_contact' => true])
                ->assign('admin');
        }
    }
}
