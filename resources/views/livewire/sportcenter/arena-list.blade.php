<div>
<div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
  <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
      <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Flowtrail UI</a>
      <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Blog</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Portfolio</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          <span>Dropdown</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
<!-- component -->
<!-- 
  Date : April 14, 2022
  Author : Saad Hasan
  Github : https://github.com/saadh393
  Title : Responsive Grid Layout
  External Plugin : None

 -->

 <section class="h-screen w-screen bg-gradient-to-br from-pink-50 to-indigo-100 p-8">
    <h1 class="text-center font-bold text-2xl text-indigo-500">Responsive Grid Layout </h1>

    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="https://images.unsplash.com/photo-1523289217630-0dd16184af8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8d29tZW4lMjBlbXBvd2VybWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="https://images.unsplash.com/photo-1607748862156-7c548e7e98f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="https://images.unsplash.com/photo-1637419450536-378d5457abb8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="https://images.unsplash.com/photo-1621352404112-58e2468993a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="https://images.unsplash.com/photo-1607868894064-2b6e7ed1b324?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="https://images.unsplash.com/photo-1633329712176-4751f52ccc1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>
    </div>
    <section class="mt-4 text-center">Build with ❤️ by <a href="https://github.com/saadh393" target="_blank">Saad Hasan </a></section>
</section>
</div>

</div>