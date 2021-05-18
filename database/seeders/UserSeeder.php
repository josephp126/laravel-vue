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
        User::factory()->count(5)->create();
        Bouncer::allow('admin')->everything();

        if (User::where(['email' => 'admin@admin.com'])->count() == 0) {
            $user = User::factory()
                ->hasAddress()
                ->create(['email' => 'admin@admin.com', 'is_contact' => true]);

            $user->assign('admin');
        }
    }
}
