<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
				$this->call(UsersTableSeeder::class);
				$this->call(SkillsTableSeeder::class);
				$this->call(Room_userTableSeeder::class);
				$this->call(Skill_userTableSeeder::class);
				$this->call(MessagesTableSeeder::class);
    }
}
