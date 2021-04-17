<form method="POST" wire:submit.prevent="submit" enctype="multipart/form-data" method="POST">
    @csrf
    @method('patch')
    <div class="mb-4">
        <label class="text-xl text-gray-600">Edit Title <span class="text-red-500">*</span></label></br>
        <input wire:model="title" type="text" class="border b-1 border-gray-300 p-2 w-full" name="title" id="title" value="{{$post->title}}" ></input>
        @error('title')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-8">
        <label class="text-xl text-gray-600">Edit Body <span class="text-red-500">*</span></label></br>
        <textarea wire:model="body" class="border b-1 border-gray-300 p-2 w-full" name="body" class="border b-1 border-gray-500">{{$post->body}}</textarea>
        @error('body')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-8">
        <label class="text-xl text-gray-600">Upload Photo<span class="text-red-500 text-xs ml-3">optional</span></label></br>
        <input wire:model="photo" class="mt-3" type="file" name="photo" id="">
        <div>
            {{-- check user select new photo --}}
            @if ($photo)
            <img src="{{$photo->temporaryUrl()}}" class="object-contain h-48 mt-5" alt="post photo">
            {{-- check post has photo --}}
            @elseif($post->photo)
            <img src="{{asset($post->photo)}}" class="object-contain h-48 mt-5" alt="post photo">
            @endif
        </div>
        @error('photo')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
    <div class="">
        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400 flex" >
            <svg wire:loading wire:target="submit" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Update
        </button>
    </div>
</form>