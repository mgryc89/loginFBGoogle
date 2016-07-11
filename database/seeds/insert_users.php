<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class insert_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rola_admin = Role::where('name', 'admin')->first();
        $rola_zwykly = Role::where('name', 'zwykly')->first();

        $user_admin = new User;
        $user_admin->name = 'Juzek';
        $user_admin->email = 'Juzek@wp.pl';
        $user_admin->password = bcrypt('haslo1');
        $user_admin->save();
        $user_admin->roles()->attach($rola_admin);

        $user_zwy = new User;
        $user_zwy->name = 'Adam';
        $user_zwy->email = 'adam@wp.pl';
        $user_zwy->password = bcrypt('haslo1');
        $user_zwy->save();
        $user_zwy->roles()->attach($rola_zwykly);
    }
}
