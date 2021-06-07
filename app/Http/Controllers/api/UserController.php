<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        return $users;

    }

   public function getid($id){

try {
    return User::findOrFail($id);

}catch (\Exception  $e){
    return response( ['massage' => $e->getMessage()] , 404);
       }
   }



}
