<div>
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <div class="flex justify-between">
                    <h2 class="text-2xl font-semibold leading-tight">Todos table</h2>
                    <div>
                        <input wire:model="filterByActive"  type="checkbox" class="mr-3 " id=""><span class="text-green-500">filter only active</span>
                    </div>
                </div>
                <input type="search" wire:model="search" placeholder="search here..." class="my-3 border b-1 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"/>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    id
                                </th>
                                <th
                                    class="w-4/12 px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    <button class="flex" wire:click="sortBy('name')">
                                        <div class="mr-3">Username</div>
                                        <img src="https://img.icons8.com/pastel-glyph/64/000000/sorting-arrows--v1.png" width="15px" height="15px"/>
                                    </button>
                                </th>
                                <th
                                    class="w-4/12 px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    <button class="flex" wire:click="sortBy('email')">
                                        <div class="mr-3">User Email</div>
                                        <img src="https://img.icons8.com/pastel-glyph/64/000000/sorting-arrows--v1.png" width="15px" height="15px"/>
                                    </button>
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                     Active
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                               {{$user->id}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap text-center">
                                        {{$user->name}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{$user->email}}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                    <div class="flex justify-center items-center">
                                        <div class="{{$user->active ? 'text-green-500':'text-yellow-600'}} mr-3 font-bold  text-right">
                                                {{$user->active ? 'active':'leave'}}
                                        </div>
                                       
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
