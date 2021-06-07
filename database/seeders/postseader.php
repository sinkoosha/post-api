<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Seeder;

class postseader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$this->postreg();
    }

     private  function postreg()
     {
         if (!post::count()) {
             post::create(
                 [
                     'title' => 'title1',
                     'body' => 'body1',
                     'user_id' => 1
                 ]
             );
             post::create(
                 [
                     'title' => 'title2',
                     'body' => 'body2',
                     'user_id' => 2
                 ]
             );
         }

     }
}
