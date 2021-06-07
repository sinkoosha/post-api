<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userseader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::count()) {

            $this->registeruser();
        }
    }

    private function registeruser()
{

    User::create([
        'name' => 'sina123',
        'email' => 'sina123@yahoo.com',
        'password' => bcrypt('sina'),

    ]);
    User::create([
        'name' => 'sina1',
        'email' => 'sina123@yahoo.com',
        'password' => bcrypt('sina'),

    ]);

}
}
