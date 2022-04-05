<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class OpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\opinion::factory(15)->create();

        //    $superAdmin = User::factory()->create([
        //         'name' => 'jfloreso',
        //         'email' => 'jorge.flores@semovi.gob.mx',
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'),
        //         'remember_token' => Str::random(10),
        //    ]);

        //     $user = new User();
        //     $user->name = 'jfloreso';
        //     $user->email = 'jorge.flores@semovi.gob.mx';
        //     $user->email_verified_at = now();
        //     $user->password =  bcrypt('password');
        //     $user->save();


        // $team =$user->teams()->create([
        //     'name' => 'New Team',
        //]);
        // \App\Models\Team::factory(1)->create();
        // \App\Models\User::factory(1)->withPersonalTeam()->create();
        /// \App\Models\User::factory(1)->create();
        Team::create([
            "name" =>"Admin",
            "user_id"=>
            User::create([
                "name"=> "admin",
                "email"=>"admin@semovi.gob.mx",
                "password"=>bcrypt("password"),
                "email_verified_at" => now(),
                "current_team_id"=>1 ,
                "remember_token" => Str::random(10)])->id,
            'personal_team' => true

        ]);


    }
}
