<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/200?u=".$this->email;
    }
    public function timeline()
    {
        // view all tweets(user and other users u are following)
        // descending order
        // return Tweet::where('user_id',$this->id)->latest()->get();
        // $ids = $this->follows->pluck('id');
        // $ids->push($this->id);
       
        // return Tweet::whereIn('user_id',$ids)->latest()->get();

        $friends = $this->follows()->pluck('id'); // follows() is better than follows
        
       
        return Tweet::whereIn('user_id',$friends)
        ->orWhere('user_id',$this->id)
        ->latest()->get();

    }

  

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function path()
    {
        return route('profile',$this->name);
    }


}
