<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-white dark:border-gray-300">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="/" class="flex ml-2 md:mr-24">
            <img src="assets/img/amirhamzahlogo.png"  class="h-8 mr-3" alt="" />
            <span class="self-center text-xl font-medium sm:text-2xl whitespace-nowrap dark:text-gray-700">Perpus</span>
          </a>
  
          <a href="/dashboard" class="pl-6 flex ml-2 md:mr-24">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-500 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
          </svg>
           
          </a>
        </div>
        
         <!-- Settings Dropdown -->
         <div class="hidden sm:flex sm:items-center sm:ml-6">
                  <x-dropdown align="right" width="48">
                      <x-slot name="trigger">
                          <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                              <div>{{ Auth::user()->name }}</div>
  
                              <div class="ml-1">
                                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                              </div>
                          </button>
                      </x-slot>
  
                      <x-slot name="content">
                          <x-dropdown-link :href="route('profile.edit')">
                              {{ __('Profil') }}
                          </x-dropdown-link>
  
                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
  
                              <x-dropdown-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('Keluar') }}
                              </x-dropdown-link>
                          </form>
                      </x-slot>
                  </x-dropdown>
              </div>
    </div>
  </nav>