<h3 class="font-bold text-xl mb-4">friends</h3>
<ul>
  @foreach(auth()->user()->follows as $user)
  <li class="mb-3">
    <div >
      <a href="{{route('profile',$user->name)}}" class="flex items-center text-sm">
      <img src="/images/logo.svg" alt="" class="rounded-full mr-4 ">
            <!-- <img src="https://i.pravatar.cc/40?u={{$user->email}}" alt="" class="rounded-full mr-4 "> -->
            <!-- <img src="{{$user->avatar}}" alt="" class="rounded-full mr-4 "> -->

      </a>
      {{$user->name}}
    </div>
  </li>
  @endforeach
</ul>