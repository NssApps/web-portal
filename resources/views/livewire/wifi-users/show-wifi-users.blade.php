<div>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
            <div class="relative bg-white shadow-md sm:rounded-lg mb-4">
                <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <x-input wire:model.live.debounce.250ms="search" type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500" placeholder="Search" required="" />
                        </div>
                    </form>
                    </div>
                    <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
        
                        <div class="flex items-center w-full space-x-3 md:w-auto">
                            <a href="{{ route('export.users.csv', ['search' => $search]) }}" 
                                class="inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600"
                            >
                                Exportar CSV
                            </a>

                        </div>
                    </div>
                </div>
            </div>


            <section class="container mx-auto">
                <div class="flex flex-col">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                                
                                <table class="w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                Name
                                            </th>
                                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                Email
                                            </th>
                                            
                                            {{-- <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                Actions
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($users as $user)
                                            <tr>
                                                <td class="px-4 py-2 text-sm text-gray-500 whitespace-nowrap">
                                                    {{$user->name}}
                                                </td>
                                                <td class="px-4 py-2 text-sm text-gray-500 whitespace-nowrap flex items-center">
                                                    {{$user->email }}
                                                </td>
                                                
                                                {{-- <td class="px-4 py-2 text-sm text-gray-500 whitespace-nowrap">
                                                    @if($user->id != 1)
                                                        <a href="{{ route('users.show', $user->id) }}" class="text-red-500 hover:text-primary-700" title="Edit user"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                            </svg>
                                                        </a>
                                                    @endif    
                                                 </td> --}}
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="1" class="text-gray-500 py-4 text-center">
                                                    No found results
                                                </td>
                                            </tr>
                                        @endforelse   
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            
            </section>

            <div class="mt-4">
                {{-- {{$users->links()}} --}}
            </div>

        </div>
    </div>

</div>
