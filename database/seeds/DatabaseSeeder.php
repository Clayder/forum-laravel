<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Só utilizei o RepliesTableSeeder pois nele já vai ser criado as threads, usuários e respostas.
         */
        $this->call(RepliesTableSeeder::class);
    }
}
