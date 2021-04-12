<div>
    <form wire:submit.prevent="submit">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            @if ($session)
              <div class="bg-green-200 text-dark font-bold p-3 mb-6 flex justify-between">
                <div>
                  {{$session }}
                </div>
                <div wire:click="$set('session',null)" class="cursor-pointer">&times;</div>
              </div>
            @endif
            <div class="-mx-3 md:flex mb-6">
              <div class="md:w-full px-3 mb-6 md:mb-0">
                <label class="block  tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                Name
                </label>
                <input wire:model="name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">
                @error('name')
                    <p class="text-red-500 font-bold">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
              <div class="md:w-full px-3 mb-6 md:mb-0">
                <label class="block  tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                Email
                </label>
                <input wire:model="email"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="email" placeholder="Jane@gmail.com">
                @error('email')
                    <p class="text-red-500 font-bold">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="-mx-3 md:flex mb-6 flex justify-center">
                <button disabled type="submit" class="flex bg-blue-500 text-white p-3 px-10 ml-5  rounded">
                  <svg wire:loading wire:target="submit" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  <span>submit</span>
                </button>
            </div>
        </div>
    </form>
</div>
