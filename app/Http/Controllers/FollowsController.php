<?php

namespace App\Http\Controllers;
use App\User;


use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        // auth user follow a user
// return $user."<br>".auth()->user();
       
        auth()->user()->toggleFollow($user);
        
        return back();
         
    }
}
