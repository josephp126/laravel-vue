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
        // \App\Models\User::factory(10)->create();
        Bouncer::allow('admin')->everything();

        User::where('email', 'admin@admin.com')->forceDelete();

        if (User::where(['email' => 'admin@admin.com'])->count() == 0) {
            $user = User::factory()
                ->hasAddress()
                ->create(['email' => 'admin@admin.com']);

            $user->assign('admin');
        }
    }
}
