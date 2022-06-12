<div>

<script src="https://cdn.tailwindcss.com"></script>
    <div class="lg:flex lg:items-start lg:w-full lg:px-12 lg:mt-10">
        <div class="lg:w-2/3 lg:block hidden">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        width="900"
                        height="800"
                        id="gmap_canvas"
                        src="https://maps.google.com/maps?q=ktm&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                    ></iframe
                    ><a href="https://www.whatismyip-address.com/divi-discount/"
                        >divi discount</a
                    ><br /><style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }</style
                    ><a href="https://www.embedgooglemap.net"
                        >embedgooglemap.net</a
                    ><style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 600px;
                            width: 700px;
                        }
                    </style>
                </div>
            </div>
        </div>
        <div class="lg:w-2/4 bg-slate-100">
            <div>
                <h1 class="text-4xl text-center text-green-400 lg:p-3">
                    REFINE SEARCH [46]
                </h1>
                <div class="lg:flex lg:justify-around lg:pt-5 pt-2">
                    <div class="mb-3 xl:w-96">
                        <div
                            class="input-group relative flex flex-wrap items-stretch w-full mb-4"
                        >
                            <input
                                type="search"
                                class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Search"
                                aria-label="Search"
                                aria-describedby="button-addon3"
                                wire:model="search"
                            />
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-center">
                            <div>
                                @foreach($categories as $category)
                                <input
                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="radio"
                                    name="flexRadioDefault"
                                    wire:model="searchCategory"
                                    value="{{$category->id}}"
                                    id="flexRadioDefault1"
                                />
                                <label
                                    class="form-check-label inline-block text-gray-800"
                                    for="flexRadioDefault1"
                                >
                                    {{$category->category_name}} </label
                                ><br />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex justify-start lg:ml-10 ml-10 pt-5">
                    <div>
                      <input type="range" min="0" max="100" value="25" class="range" step="25" />
<div class="w-full flex justify-between text-xs px-5">
  <span>1km</span>
  <span>2Km</span>
  <span>3km</span>
  <span>4km</span>
  <span>5km</span>
</div>
                    </div>
                </div> --}}
            </div>
            <div class="">
                    <div class="flex flex-wrap">
                        @forelse($sportCenters as $sportCenter)
                        <div class="p-4 sm:w-1/2 lg:w-2/4">
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
                    <div class="mt-10 ">{{$sportCenters->links()}}</div>
                    
            
            </div>
        </div>
    </div>
    @livewire('footer')
    </div>
