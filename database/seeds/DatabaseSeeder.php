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
        $this->call([
           Roles::class,
           Permissions::class,
           Users::class,
           Currencies::class,
           usersettings::class,
           Pipelines::class
        ]);
    }
}
