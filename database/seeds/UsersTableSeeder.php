<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();
            $users = factory(User::class)
                ->times(10)
                ->make();
            User::insert($users->toArray());
            $user = User::find(1);
            $user->name = '顺鑫如意';
            $user->email = '331926815@qq.com';
            $user->role_id = $role->id;
            $user->save();
//            $role = Role::where('name', 'admin')->firstOrFail();
//
//            User::create([
//                'name'           => 'Admin',
//                'email'          => 'admin@admin.com',
//                'password'       => bcrypt('password'),
//                'remember_token' => str_random(60),
//                'role_id'        => $role->id,
//            ]);
        }
    }
}
