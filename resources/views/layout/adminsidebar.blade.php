<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-300 sm:translate-x-0 dark:bg-green-50 dark:border-gray-300" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-green-50">
       <ul class="space-y-2 font-medium">
          <li>
          <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-white">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-green-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
             <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
         </svg>
                <span class="block w-full px-4 py-2 text-left text-md leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Beranda</span>
             </a>
          </li>
          <li>
             <a href="/historyadmin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-white">
             <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-green-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
             <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
             </svg>
                <span class="block w-full px-4 py-2 text-left text-md leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">History</span>
             </a>
          </li>
          <li>
          <a href="/notificationadmin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-white">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-green-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
             <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"></path>
          </svg>
                <span class="fblock w-full px-4 py-2 text-left text-md leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Notifikasi</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li>
          <li>
          <a href="/profile" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-white">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-green-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
          </svg>   
                <span class="block w-full px-4 py-2 text-left text-md leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Profil</span>
             </a>
          </li>
         
          <li>
          <form method="POST" action="{{ route('logout') }}">
                             @csrf
             <a href="route('logout')" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-white"
                                     onclick="event.preventDefault();
                                                 this.closest('form').submit();">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-red-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                </svg>                
                
                <span class="block w-full px-4 py-2 text-left text-md leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Keluar</span>
             </a>
          </form>
          </li>
         
       </ul>
    </div>
 </aside>