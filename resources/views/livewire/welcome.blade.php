<div>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css" />
           <section class="sm:min-h-screen md:min-h-fit lg:mt-1
             lg:min-h-screen lg:flex lg:items-center" style="background-image: url('https://hireapitch.com/content/images/home_hero.jpg');">
              <div class="flex-col flex lg:flex-row lg:px-24">
                      <div class="bg-black lg:p-5  py-20 opacity-70">
                           <h1 class="lg:text-7xl md:text-6xl text-4xl text-white lg:p-2">HIRE A PITCH.</h1>
                            <h1 class="lg:text-6xl  md:text-6xl text-4xl text-green-600 lg:pt-5">OR FIND A GAME.</h1>
                       </div>
                       <div>
                         <div class="col-span-2">
                            <div>
                                <div class="py-10 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                     <div class="grid grid-cols-6 gap-6">
                                          <div class="col-span-6">
                                             <label class="block lg:text-4xl lg:p-0 text-green-700">
                                                    FIND YOUR ARENA
                                                </label>
                                            </div>
            
                                        <div class="col-span-6 lg:p-0 sm:col-span-4">
                                              <label class="block font-medium text-sm text-green-700" for="name">
                                                    LOCATION
                                              </label>
                                             <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" autofocus="autofocus" wire:model="location">
                                          </div>
                                              <div class="col-span-6 lg:p-0 p-5 sm:col-span-4">
                                                                   <select
                                                                           class="form-select appearance-none
                                                                                block
                                                                                w-full
                                                                                px-0
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
                                                                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"aria-label="Default select example" wire:model="searchArena">
                                                                           <option selected>Category</option>
                                                                           @foreach($categories as $category)
                                                                              <option value="{{$category->id}}">{{$category->category_name}}</option>  
                                                                              @endforeach        
                                                                    </select>  
                                               </div>
                                           </div>
                                         </div>
            
                                        <div class="flex items-center justify-start px-4 py-3 bg-green-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                               <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:click="search()">
                                                   SEARCH
                                                   </button>
                                           </div>
                                          </div>
                                </div>
                         </div>
                      <div class="flex md:justify-between lg:py-0 lg:justify-between lg:flex-col lg:gap-5">
                            <div class="bg-black opacity-70 md:p-5 lg:py-4">
                                <h1 class="lg:text-4xl md:text-3xl text-center text-slate-100"><a href=""> FUSTSAL ARENA</a></h1>
                           </div>
                           <div class="bg-blue-400 lg:py-4 md:p-5 ">
                              <h1 class="lg:text-4xl md:text-3xl  text-center text-slate-100 "> <a href="">FOOTBALL GROUND</a></h1>
                             </div>
                           <div class="bg-slate-200 lg:py-4 md:p-5 ">
                            <h1 class="lg:text-4xl md:text-3xl  text-center text-slate-900"> <a href="">SWIMMING POOL</a></h1>
                           </div>
                       </div>
                    </div>
              </section>

      
              <section>
                <div class="flex lg:justify-around justify-between bg-slate-800  lg:p-5">
                  <div>
                    <a href="">
                   <img src="https://hireapitch.com/content/images/bb_1_football.png" class="w-auto h-16 lg:h-24" alt="">
                   <h2 class="lg:text-xl text-sm lg:text-center text-white lg:p-2">football</h2>
                    </a>
                  </div>
                  <div>
                    <a href="">
                    <img src="https://hireapitch.com/content/images/bb_2_5_a_side_football.png"  class="w-auto h-16  lg:h-24"  alt="">
                    <h2 class="lg:text-xl text-sm lg:text-center text-white lg:p-2">5 a side football</h2>
                  </a>
                  </div>
                  <div>
                    <a href="">
                    <img src="https://hireapitch.com/content/images/bb_3_7_a_side_football.png"  class="w-auto h-16  lg:h-24"  alt="">
                    <h2 class="lg:text-xl text-sm lg:text-center text-white lg:p-2">7 a side football</h2>
                  </a>
                  </div>
                  <div>
                    <a href="">
                    <img src="https://hireapitch.com/content/images/bb_7_netball.png"  class="w-auto h-16  lg:h-24"  alt="">
                    <h2 class="lg:text-xl text-sm lg:text-center text-white lg:p-2">circket</h2>
                  </a>
                  </div>
                </div>
              </section>



              {{-- slider --}}
              <section class="my-10 lg:px-28 px:28">
                <h1 class="lg:text-4xl text-2xl text-center  text-green-400">FEATURED PITCHES</h1>
                <div class="owl-carousel owl-theme lg:mt-10 lg:py-5">
                  @foreach($sportCenters as $sportCenter)
                  <div class="item lg:mb-2">
                    <div class="p-4" style="width: 300px">
                      <div class=" border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                          <img class="lg:h-52 md:h-48 w-full object-cover object-center"
                              src="{{asset('storage/' . $sportCenter->image()->first()->src) }}" alt="blog">
                          <div class="p-6  hover:text-green-600 transition duration-300 ease-in">
                              <h2 class="text-base font-medium text-indigo-300 mb-1">{{$sportCenter->location}}</h2>
                              <h1 class="text-2xl font-semibold mb-3">{{$sportCenter->name}}</h1>
                              <p class="leading-relaxed mb-3">{{$sportCenter->short_description}}</p>
                              <div class="flex items-center flex-wrap ">
                                  <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Book</button>
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
                  </div>
                  @endforeach
                
                 
              </div>
            </section>

            {{--  --}}
            <section class="mt-5">
             <div class="sm:min-h-screen md:min-h-fit lg:min-h-fit lg:flex lg:items-center"  style="background-image: url('https://hireapitch.com/content/images/home_partner_bg.jpg');">
             <div class="flex flex-col justify-center items-center lg:w-5/6 lg:m-auto">
               <div class="text-center text-xl p-5 lg:py-10 text-white font-semibold">
               <h1 class="lg:text-5xl lg:p-3">WOULD YOU LIKE TO MAKE MORE</h1>
               <h3 class="lg:text-4xl lg:2"> INCOME FROM YOUR FACILITY?</h3>
               </div>
               <div class="text-center text-xl p-5 text-slate-500 lg:text-3xl lg:p-2">
               <h1>BECOME ONE OF HUNDREDS OF VENUES JOINING HIREAPITCH!</h1>
               </div>
               <div class="text-center  text-xl p-5 lg:text-xl lg:py-8">
                 <p> Listing is completely FREE of charge. Gain access to our online bookings, app facility</p>
                 <p>as well as your own private log to display performance.</p>
               </div>
               <div class="text-center  text-xl py-5  lg:py-5 lg:text-2xl text-white">
                 <h2><a href="">SIGNUP</a> HERE TO LIST YOUR VENUE</h2>
               </div>
             </div>

            </section>
                  {{-- gallery --}}
                  
                    <section class="overflow-hidden text-gray-700 bg-slate-200">
                        <h2 class="text-3xl leading-tight font-bold text-center text-green-500 lg:mt-5 lg:pt-5">Our Gallery</h2>
                        <div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32">
                          <div class="flex flex-wrap -m-1 md:-m-2">
                            <div class="flex flex-wrap w-1/2">
                              <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
                              </div>
                              <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
                              </div>
                              <div class="w-full p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
                              </div>
                            </div>
                            <div class="flex flex-wrap w-1/2">
                              <div class="w-full p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
                              </div>
                              <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
                              </div>
                              <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp">
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>

                      {{--  --}}
                      
                    
                    @livewire('footer')
            
           
 <!-- owl carousel -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

 <script>
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      nav:false,
      loop: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      autoWidth:true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          autoplay: true,
          autoWidth:false,
          center:true
        },
        600: {
          items: 2,
          autoplay:true
        },
        1000: {
          items: 4,
          autoplay: true,
       
        },
      },
    });
  });
</script>
</div>