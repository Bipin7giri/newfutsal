<div>

    <!-- component -->
<section class="bg-white">
    <div class="container px-6 py-8 mx-auto">
        <div class="lg:flex lg:-mx-2">
            <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4 border-r-2">
                
                {{-- <a  wire:model="search" value{{$category->arena_category_id}}  class="block font-medium text-green-500 light:text-green-300 hover:underline">{{$category->category_name}}</a> --}}
                <div class="w-full">
                   
                                <div class="flex flex-col">
                                    
                                    <a  href="{{ route('sportCategory') }}" :active="request()->routeIs('sportCategory')"   class="block font-medium text-green-500   hover:underline">All</a>
                                    @foreach($categories as $category)    
                                    <label class="inline-flex items-center mt-3">
                                        <input type="radio" class=" hidden form-radio h-5 w-5 text-gray-600"  wire:model="search"
                                        value="{{$category->id}}" ><span class="ml-2 text-2xl text-green-700 hover:cursor-pointer hover:underline">{{ $category->category_name }}</span>
                                    </label>
                                    @endforeach                   
                                </div>
                  </div>
           
              
            </div>

            <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
              
 
<div>
    <div class="flex">
    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only light:text-gray-300">Your Email</label>
    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 type="button">All categories <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(377.6px, 540px, 0px);">
    <ul class="py-1 text-sm text-gray-700 light:text-gray-200" aria-labelledby="dropdown-button">
    <li>
    <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 light:hover:bg-gray-600 light:hover:text-white">Mockups</button>
    </li>
    <li>
    <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 light:hover:bg-gray-600 light:hover:text-white">Templates</button>
    </li>
    <li>
    <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 light:hover:bg-gray-600 light:hover:text-white">Design</button>
    </li>
    <li>
    <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 light:hover:bg-gray-600 light:hover:text-white">Logos</button>
    </li>
    </ul>
    </div>
    <div class="relative w-full">
    <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 light:bg-gray-700 light:border-l-gray-700  light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required="">
    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
    </div>
    </div>
</div>
    
                <div class="flex flex-wrap">
            
                    @forelse($sportCenters as $sportCenter)
                    <div class="p-4 lg:w-1/3 sm:w-1/4 ">
                        <div class=" border-2 border-gray-200 border-opacity-60 rounded-lg bg-white overflow-hidden">
                            <img class="lg:h-52 md:h-48 w-full object-cover object-center"
                                src="{{asset('storage/' . $sportCenter->image()->first()->src) }}" alt="blog">
                            <div class="p-6  hover:text-green-600 transition duration-300 ease-in">
                                <h2 class="text-base font-medium text-indigo-300 mb-1">{{$sportCenter->location}}</h2>
                                <h1 class="text-2xl font-semibold mb-3">{{$sportCenter->name}}</h1>
                                <p class="leading-relaxed mb-3">{{$sportCenter->short_description}}</p>
                                <div class="flex items-center flex-wrap ">
                                    <a type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" href="{{route('booking',$sportCenter->id)}}":active="request()->routeIS('sportCategory')" >Book</a>
                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty <h1 class="text-center  flex item-center justify-center text-6xl">{{'NO result'}}</h1> @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
    @livewire('footer')
</div>
