<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use  App\Models\User;
use App\Models\Player;
use App\Models\Position;
use App\Models\Sport;
use App\Models\Team;
use App\Models\Trainer;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
        ]);
        User::factory(2)->create();
        $admin = User::find(1);
        $admin->assignRole('admin');
        $Trainer = User::find(2);
        $Trainer->assignRole('Trainer');

        Player::factory(2)->create();
        Position::factory(2)->create();
        Sport::factory(2)->create();
        Team::factory(2)->create();
        Trainer::factory(2)->create();


    

        User::factory(2)->create();
    }
}
