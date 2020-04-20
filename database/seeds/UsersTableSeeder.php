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
        factory(\App\User::class, 10)->create()->each(function($user) {
            $user->questions()->save(factory(\App\Question::class)->make());
            $user->answers()->save(factory(\App\Answer::class)->make());
        });
    }
}
