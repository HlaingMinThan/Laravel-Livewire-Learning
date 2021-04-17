<div>
    <h1 class="text-2xl my-10">Replies</h1>
    <div>
        @foreach ($post->comments as $comment)
            <div class="border b-1 mb-10 shadow-sm p-10">
                <h1 class=" mb-4">replied by
                    <span class="mb-5 text-lg text-blue-500 ml-2">{{$comment->owner->name}}</span> 
                    <span>{{$comment->created_at->diffForHumans()}}</span></h1>
                <p class="text-gray-600 flex">
                    {{$comment->body}}
                </p>
            </div>
        @endforeach
    </div>
    <form wire:submit.prevent="submit">
        <textarea wire:model.defer="body" name="body" id="" cols="20" rows="7" class="border border-gray-100 p-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"></textarea>
        @error('body')
            <p class="text-red-500">{{$message}}</p>
        @enderror
        <button type="submit" class="bg-indigo-500 text-white p-3 rounded mt-4 flex">
            <svg wire:loading class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
            Comment
        </button>

    </form>
</div>
