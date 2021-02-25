<div class="flex p- border-b border-b-gray-200">
  <div class="mr-2 flex-shrink-0">
    <!-- <img
    
        src="{{$tweet->user->avatar}}"
        alt="your avatar"
        class="rounded-full mr-2"
        width="50"
        height="50"
    > -->
    <a href="{{route('profile',$tweet->user)}}">
        <img
            
            src="/images/logo.svg"
            alt="your avatar"
            class="rounded-full mr-2"
            width="40"
            height="40"
        >
    </a>
    
    </div>
    <div>
    <h5 class="font-bold mb-4">
    <a href="{{route('profile',$tweet->user)}}">
    {{$tweet->user->name}}
    </a>
    </h5>
    <p class="text-sm">{{$tweet->body}}</p>
    </div>
</div>