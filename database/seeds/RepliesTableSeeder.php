<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Crio 50 tópicos
         */
        $threads = factory(\App\Thread::class, 50)->create();

        /**
         * Para cada tópico eu insiro entre 5 e 10 respostas
         */
        $threads->each(function ($thread){
            factory(\App\Reply::class, rand(5, 10))->create(['thread_id' => $thread->id]);
        });
    }
}
