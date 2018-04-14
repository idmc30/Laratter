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
        // $this->call(UsersTableSeeder::class);
         
        factory(App\User::class, 50)->create()->each(function (App\User $user){
            factory(App\Message::class)
            ->times(100)//quiero crear 100 mensajes
            ->create([
               'user_id' => $user->id,
            ]);
        }); 
        
    }
}
