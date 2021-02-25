@extends('layouts.app')

@section('content')

<header class="mb-6 relative">
<img src="/images/default-profile-banner.jpg" alt="profile header image" class="mb-2">

<div class="flex justify-between items-center mb-4">
  <div>
  <h2 class="font-bold text-2xl ">{{$user->name}}</h2>
  <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
  </div>
  <div>
            
  <a href="" class=" rounded-full border border-gray-300 py-2 px-4 text-black text-sm mr-2 ">Edit Profile</a>
  <a href="" class=" bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">Follow</a>
  </div>
</div>
<p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit voluptas vitae beatae sapiente numquam dolore optio unde officia. Odio sunt neque aperiam eos expedita nostrum soluta, autem veniam provident quas?</p>
 <img src="{{$user->avatar}}"
        alt="your avatar" class="rounded-full mr-2 absolute"
        style="top:138px;width: 150px; left:calc(40%);">
  
</header>
@include('_timeline',[
'tweets' => $user->tweets
]) 
@endsection
