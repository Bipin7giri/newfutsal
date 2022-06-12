<div>
    
    <div>

        <script src="https://cdn.tailwindcss.com"></script>
    
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('List of Users') }}
                </h2>
                <div class="text-sm flex gap-5">
    
                </div>
            </div>
        </x-slot>
        <div class="max-w-none mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="max-w-none mx-auto sm:px-6 lg:px-8 mt-5">
                <div>
                    <div class="mt-10 ">
                        <input type="hidden" wire:model="hiddenId">
                        <div class="flex items-center justify-around gap-32 pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                           
                            <div class=" p-2 mb-5 rounded-md bg-slate-50 shadow-lg shadow-cyan-500/50 ">
                                <div class="flex justify-center">
                                    <div class="mb-3 xl:w-96">
                                        {{-- @if ($this->hiddenId)
                                            <label for="exampleFormControlInput1"
                                                class="form-label inline-block mb-2 text-gray-700  font-semibold text-xl">Editing
                                                Area: {{ $name }}</label>
                                        @else
                                            <label for="exampleFormControlInput1"
                                                class="form-label inline-block mb-2 text-gray-700 font-semibold text-xl text-left">Enter User Details</label>
                                        @endif --}}
                                        <input type="text"
                                            class="
            form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
          "
                                            placeholder="Name" wire:model="name" />
                                        @error('name')
                                            <span class="text-rose-600	">{{ $message }}</span>
                                        @enderror
                                        
                                           <input type="mail"
                                            class=" mt-2
                                                form-control
                                                block
                                                w-full
                                                px-3    
                                                py-1.5
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding
                                                border border-solid border-gray-300
                                                rounded
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            placeholder="Email-Address" wire:model="mail" />
                                        @error('mail')
                                            <span class="text-rose-600	">{{ $message }}</span>
                                        @enderror
                                         
                                        <input type="password"
                                        class=" mt-2
                                            form-control
                                            block
                                            w-full
                                            px-3    
                                            py-1.5
                                            text-base
                                            font-normal
                                            text-gray-700
                                            bg-white bg-clip-padding
                                            border border-solid border-gray-300
                                            rounded
                                            transition
                                            ease-in-out
                                            m-0
                                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="password" wire:model="password" />
                                    @error('mail')
                                        <span class="text-rose-600	">{{ $message }}</span>
                                    @enderror
                                     
                                    <input type="password"
                                    class=" mt-2
                                        form-control
                                        block
                                        w-full
                                        px-3    
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Confirm-Password" wire:model="password_confirmation" />
                                @error('mail')
                                    <span class="text-rose-600	">{{ $message }}</span>
                                @enderror
                                       
    
                                        <button type="button"
                                            class=" mt-8 inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                            wire:click="save()">Save</button>
    
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                    </div>
    
                    {{-- <div class="sm:px-6 w-full">
                        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                            <div class="mt-7 overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <thead>
                                        <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                        SN
                                                    </p>
    
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                        SportCenter
                                                    </p>
    
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                        Area
                                                    </p>
    
                                                </div>
                                            </th>
                                                   <th>
                                                <div class="flex items-center pl-5">
                                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                        Location
                                                    </p>
    
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                        short_description
                                                    </p>
    
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                        Category
                                                    </p>
    
                                                </div>
                                            </th>
                                        <tr>
                                    </thead>
                                    @foreach ($sportCenters as $sportCenter)
                                        <tbody>
                                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
    
                                                <td class="">
                                                    <div class="flex items-center pl-5">
                                                        <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                            {{ $sportCenter->id }}
                                                        </p>
    
                                                    </div>
                                                </td>
                                                <td class="pl-4">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                          </svg>
                                                        <p class="text-sm leading-none text-gray-600 ml-2">
                                                            {{ $sportCenter->name }}
                                                        </p>
                                                    </div>
                                                </td>
                                                
                                                <td class="pl-4">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                          </svg>
                                                        <p class="text-sm leading-none text-gray-600 ml-2">
                                                            {{ $sportCenter->area()->first()->name }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="pl-4">
                                                    <div class="flex items-center">  
                                                        <img src="{{ asset('storage/' . $sportCenter->image()->first()->src) }}" alt="" class="">
                                                    </div>
                                                </td>
                                                 <td class="pl-4">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                          </svg>
                                                        <p class="text-sm leading-none text-gray-600 ml-2">
                                                            {{ $sportCenter->location }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="pl-4">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                          </svg>
                                                        <p class="text-sm leading-none text-gray-600 ml-2">
                                                            {{ $sportCenter->short_description }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="pl-4">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                          </svg>
                                                        <p class="text-sm leading-none text-gray-600 ml-2">
                                                         
                                                            {{ $sportCenter->arena_category()->first()->category_name }}
                                                        </p>
                                                    </div>
                                                </td>
    
    
                                                <td>
                                                    <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" wire:click="editsportCenter({{$sportCenter->id}})">Edit</button></td>
                                            </tr>
    
    
                                        </tbody>
                                    @endforeach
                                </table>
                                <div class="mt-10 ">{{$sportCenters->links()}}</div>
    
                            </div>
                            <div class="p-2">
                                <button type="button"
                                    class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"><a
                                        href="javascript:void(0)" wire:click="addsportCenter()">Add new Sport Center</a></button>
                            </div>
                        </div>
    
                    </div> --}}
                </div>
            </div>
    
</div>
