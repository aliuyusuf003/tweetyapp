<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
            <form method="POST" action="/tweets">
                @csrf 
          <textarea name="body" class="w-full p-4 " placeholder='What is up doc?' required></textarea>
            <hr class="my-4">
            <footer class="flex justify-between items-center">
            <img
                src="/images/logo.svg"
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
            <!-- <img
                src="{{auth()->user()->avatar}}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            > -->
            <!-- <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10"
            >
                Publish
            </button> -->
            <button 
            class="bg-blue-300 rounded-lg p-2 text-white"
             type="submit">
             Tweet a text
             </button>
        </footer>
           
            </form>
            @error('body')
            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
            @enderror
        </div>