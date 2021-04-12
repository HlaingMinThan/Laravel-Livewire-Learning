<div>
    <form wire:submit.prevent="submit">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
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
              <button type="submit" class="bg-blue-500 text-white p-3 px-10 ml-5  rounded">Submit</button>
            </div>
        </div>
    </form>
</div>
