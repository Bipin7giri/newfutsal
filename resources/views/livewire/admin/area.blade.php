<div>

<script src="https://cdn.tailwindcss.com"></script>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('List of Area') }}
            </h2>
            <div class="text-sm flex gap-5">

            </div>
        </div>
    </x-slot>
    
        <div class="max-w-none mx-auto sm:px-6 lg:px-8 mt-5">
                             <div>
                                  <main>
                                     
                                      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                              <div class="md:grid md:grid-cols-3 md:gap-6">
                                                    <div class="md:col-span-1 flex justify-between">
                                                         <div class="px-4 sm:px-0">
                                                                <h3 class="text-lg font-medium text-gray-900">Area Details</h3>
                                                                         <p class="mt-1 text-sm text-gray-600">
                                                                                 Add Area of your Sport Center
                                                                        </p>
                                                                 </div>
        
       
        </div>
        
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save">
        
                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="hidden"  wire:model="hiddenId">
                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6">
                            
        
        
                
            </div>
        
            <div class="col-span-6 sm:col-span-4">
        
        @if($this->hiddenId)
        <h3 class=" inline-block mb-2 text-lg font-medium text-gray-900">Editing Area: {{$name}}</h3>
        @else
        <h3 class=" inline-block mb-2 text-lg font-medium text-gray-900">Enter Area</h3>
        @endif
                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="text"  wire:model="name">
                @error('name')
                <span class="text-rose-600">{{ $message }}</span>
              @enderror           
            </div>
            <div class="col-span-6 sm:col-span-4">
        
                <select
                class="form-select appearance-none
block
w-full
px-3
py-1.5
text-base
font-normal
text-gray-700
bg-white bg-clip-padding bg-no-repeat
border border-solid border-gray-300
rounded
transition
ease-in-out
m-0
focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                aria-label="Default select example" wire:model="district_id">
            
                <option selected>Select District</option>

                @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </select>   
                    </div>
                        
                    </div>
                </div>
        
                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        Add
        </button>
                    </div>
                        </form>
        </div>
        </div>
        
        <!-- Livewire Component wire-end:ZTEDxWwbYX1S03SRLWt1 -->        </div>
        </div>
                </main>

                </div>

                <div class="sm:px-6 w-full">
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
                                                   Area
                                                </p>
    
                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    District
                                                </p>
    
                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                   Edit
                                                </p>
    
                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                   Delete
                                                </p>
    
                                            </div>
                                        </th>
                                        
                                    <tr>
                                </thead>
                                @foreach ($areas as $area)
                                <tbody>
                                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">

                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    {{ $area->id }}
                                                </p>

                                            </div>
                                        </td>
                                        <td class="pl-4">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M9.16667 2.5L16.6667 10C17.0911 10.4745 17.0911 11.1922 16.6667 11.6667L11.6667 16.6667C11.1922 17.0911 10.4745 17.0911 10 16.6667L2.5 9.16667V5.83333C2.5 3.99238 3.99238 2.5 5.83333 2.5H9.16667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <circle cx="7.50004" cy="7.49967" r="1.66667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></circle>
                                                </svg>
                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                    {{ $area->name }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="pl-4">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M9.16667 2.5L16.6667 10C17.0911 10.4745 17.0911 11.1922 16.6667 11.6667L11.6667 16.6667C11.1922 17.0911 10.4745 17.0911 10 16.6667L2.5 9.16667V5.83333C2.5 3.99238 3.99238 2.5 5.83333 2.5H9.16667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <circle cx="7.50004" cy="7.49967" r="1.66667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></circle>
                                                </svg>
                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                    {{$area->district()->first()->name}}
                                                </p>
                                            </div>
                                        </td>


                                        <td>
                                            <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" wire:click="editArea({{$area->id}})">Edit</button>
                                        </td>

                                        <td>
                                            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" wire:click="delArea({{$area->id}})">Delete</button>
                                        </td>



                                    </tr>


                                </tbody>
                                @endforeach
                            </table>
                            <div class="mt-10 ">{{$areas->links()}}</div>
                        </div>
                        <div class="p-2">
                            <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"><a href="javascript:void(0)" wire:click="addArea()">Add new Area</a></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>