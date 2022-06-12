<div>
    <main>
        <div class="max-w-7xi mx-auto py-6 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6 px-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-16">
                        <h1 class="text-2xl	 font-bold text-gray-900">Add New User</h1>
                        <p class="mt-1 text-md text-justify	  text-gray-600">To create a new category, click
                            theCategorybutton. Let’s enter a name. It’s automatically populated with a relevant slug. We
                            can add anicon. We can select whether it’s a top-level category or subcategory. Once you’ve
                            done that, you can change the order in.</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="w-full">
                        @if (session()->has('message'))
                        <div class="text-emerald-600">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="grid grid-cols-2 gap-4 ">
                                <div>
                                    <label class="block font-bold text-lg text-gray-600" for="name">Name</label>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        id="name" type="text" name="name" wire:model="sportName"
                                        autocomplete="name">@error('sportName') <span class="text-red-600">{{ $message
                                        }}</span> @enderror
                                </div>
                             
                              
                                
                             
                               
                            
                                <div class="mt-3 col-span-2">
                                    <label for="Product Variants"
                                        class="block py-1 font-bold text-lg text-gray-600 transition">Add Sport
                                        Details and schedule</label>
                                    @forelse($newSport as $index=>$sport)
                                    <div>
                                      
                                   
                                                                                <select class="form-select appearance-none
                                             
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
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="newSport.{{ $index }}.arena_category_id">
                
                    <option >Select Category</option>
    
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                  
                    @endforeach
                                       
                                </select>
                                  </div>
                                    <div class="grid grid-cols-3 w-full py-4">
                                        <div>
                                            <input type="date" wire:model="newSport.{{ $index }}.day"
                                                placeholder="Date"
                                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                                        </div>
                                        <div>
                                            <input type="time" wire:model="newSport.{{ $index }}.schedule"
                                                placeholder="Name"
                                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                                        </div>
                                        <div>
                                            <input type="number" wire:model="newSport.{{ $index }}.price"
                                                placeholder="Email"
                                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                                        </div>
                                        <button type="button" wire:click="deletesport({{$index}})"
                                            class="pr-16 rounded text-red-600 text-2xl mt-4 font-bold">X</button>
                                    </div>
                                    @empty
                                    No relation
                                    @endforelse
                                    <button wire:click="addsport()"
                                        class="inline-block px-6 py-2.5 mt-2 bg-yellow-600 text-white font-bold text-xs leading-tight uppercase rounded shadow-md  hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out ">Add
                                        New Relation</button>
                                </div>
                                <div
                                    class=" justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-b1-md sm:rounded-br-md">
                                    <button type="submit"
                                        class=" inline-block font-bold px-6 py-2.5 bg-purple-900 text-white  text-md leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                                        wire:click="save()">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
</div>
