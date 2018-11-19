<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connor = new \App\User;
        $connor->name = 'Connor';
        $connor->email = 'connor.mccarty.cm@gmail.com';
        $connor->password = 'secret';
        $connor->save();

        $bob = new \App\User;
        $bob->name = 'Bob';
        $bob->email = 'bob@bob.bob';
        $bob->password = bcrypt('secret');
        $bob->save();

        $chuck = new \App\User;
        $chuck->name = 'Chuck';
        $chuck->email = 'chuck@chuck.chuck';
        $chuck->password = bcrypt('secret');
        $chuck->save();
    }
}
