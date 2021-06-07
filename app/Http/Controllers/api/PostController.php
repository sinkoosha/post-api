<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\post;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class PostController extends Controller
{

    public function show()
    {
//        $post = post::all();
        return Auth::user()->post()->get();
    }

    public function create(PostRequest $request)
    {

         Auth::user()->post()->create($request->all());
       return  response('Post Create SuccessFully' , 201 );

    }

    public function update(PostRequest $request, $id)
    {

         Auth()->user()->post()->find($id)->update($request->all());
        return  response(null , 204 );
    }


    public function remove($id)
    {

        return Auth()->user()->post()->find($id)->delete();
    }
}
