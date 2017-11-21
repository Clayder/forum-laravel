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
        $threads = factory(\App\Thread::class, 50)->create();
        $threads->each(function($thread){
            factory(\App\Replies::class, rand(5,10))->create(['thread_id' => $thread->id]);
        });
    }
}
