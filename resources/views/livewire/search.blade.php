<div>
    <div>
        <input wire:model="search" type="text" class="border border-gray-100 p-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="search musics...">
    </div>
    <div>
      @if(strlen($search)>3)
        @forelse ($searchSongs as $song)
        <div wire:loading.remove class="flex bg-gray-200 p-3 items-center">
          <div><img src="{{$song['artworkUrl60']}}" alt=""></div>
          <div class="">
            {{$song["trackName"]??$song['collectionName']}}-
            {{empty($song["trackName"])? null : $song["artistName"]}}
          </div>
        </div>
        @empty
        <p>No results found for "{{$search}}"</p>
        @endforelse
        <div wire:loading>loading...</div>
      @endif
    </div>
</div>
