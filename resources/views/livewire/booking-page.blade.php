<div>
    <link
        href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css"
        rel="stylesheet"
        type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
<div class="bg-green-100">
      <section class="lg:w-5/6 lg:m-auto ">
        <header class="lg:py-5">
            <div class="flex items-center justify-center mt-15">
                <h3 class="text-6xl text-green-400 p-5">
                    {{$bookingDetails->name}}
                </h3>
            </div>
            <ul class="flex justify-center">
                <li class="px-2">
                    <img
                        src="https://hireapitch.com/content/images/ico_5asideS.png"
                        alt=""
                    />
                </li>
                <li class="px-2">
                    <img
                        src="https://hireapitch.com/content/images/ico_7asideS.png"
                        alt=""
                    />
                </li>
                <li class="px-2">
                    <img
                        src="https://hireapitch.com/content/images/ico_netballS.png"
                        alt=""
                    />
                </li>
                <li class="px-2">
                    <img
                        src="https://hireapitch.com/content/images/ico_tennisS.png"
                        alt=""
                    />
                </li>
                <li class="px-2">
                    <img
                        src="https://hireapitch.com/content/images/ico_basketballS.png"
                        alt=""
                    />
                </li>
            </ul>
        </header>
        <div class="hero lg:pt-5">
            <div class="hero-content flex-col justify-between items-center lg:flex-row">
              <img src="{{ asset('storage/' . $bookingDetails->image()->first()->src) }}" class="max-w-sm rounded-lg shadow-2xl" />
              
              <div>
                <h4 class="text-3xl text-green-800 lg:p-4 text-center">Book Arena Now</h4>
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
                                                                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="category_id">          
                                                                    <option selected>Select District</option>
                                                                         @foreach ($categories as $c)
                                                                         <option value="{{ $c->id }}">{{ $c->name}}</option>
                                                                     @endforeach
                                                                </select>  
                                                                
                                                                <button type="button" wire:Click="test()">Click</button>
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
                                                                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model="date_id" aria-label="Default select example">          
                                                                    <option>Select District</option>
                                                                
                                                                         @foreach ($dates as $d)
                                                                         <option value="{{ $d->id }}">{{ $d->date }}</option>
                                                                     @endforeach
                                                                </select>   
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
                                                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model="time_id" aria-label="Default select example">          
                                                        <option>Select District</option>
                                                             @foreach ($times as $t)
                                                             <option value="{{ $t->id }}">{{ $t->time }}</option>
                                                         @endforeach
                                                    </select> 
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
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  aria-label="Default select example">          
                                            <option>Select District</option>
                                        
                                                 @foreach ($prices as $p)
                                                 <option value="{{ $p->id }}">{{ $p->price }}</option>
                                             @endforeach
                                        </select> 
                                                    
              </div>
              <div class="features">
                  <h4 class="text-4xl text-green-800 text-center lg:-mt-6 lg:p-2">Our Features</h4>
                <div class="flex justify-center">
                    <ul class="bg-white rounded-lg w-96 text-gray-900">
                      <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">An item</li>
                      <li class="px-6 py-2 border-b border-gray-200 w-full">A second item</li>
                      <li class="px-6 py-2 border-b border-gray-200 w-full">A third item</li>
                      <li class="px-6 py-2 border-b border-gray-200 w-full">A fourth item</li>
                      <li class="px-6 py-2 w-full rounded-b-lg">And a fifth one</li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </section>
    <section class="bg- bg-slate-300 mt-10">
        <div class="flex lg:flex-row flex-col  justify-between items-center  px-5">
            <section class="overflow-hidden text-gray-700 bg-slate-200">
                <div class="container lg:p-2">
                    <div class="flex flex-wrap -m-1 md:-m-2">
                        <div class="flex flex-wrap w-1/2">
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp"
                                />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp"
                                />
                            </div>
                            <div class="w-full p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                />
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/2">
                            <div class="w-full p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp"
                                />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp"
                                />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img
                                    alt="gallery"
                                    class="block object-cover object-center w-full h-full rounded-lg"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <div>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:500px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:500px;}</style></div></div>
        </div>
        </div>
    </section>
   
</div>
    @livewire('footer')
</div>
