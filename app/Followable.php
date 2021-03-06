<?php

namespace App;

trait Followable
{
  public function follow(User $user)
  {
      return $this->follows()->save($user);
  }

  public function unfollow(User $user){
    return $this->follows()->detach($user);
  }
  public function follows()
  {
      return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
  }
  
  public function following(User $user)
  {
    //  return $this->follows->contains($user);// don't use this method
     return $this->follows()->where('following_user_id',$user->id)->exists();// don't use this method

  }
  public function toggleFollow(User $user){
     // if(auth()->user()->following($user)){
        //     auth()->user()->unfollow($user);
        // }else{
        //     auth()->user()->follow($user);
        // }

        if($this->following($user)){
          return $this->unfollow($user);
        }
        return $this->follow($user);
  }
}
