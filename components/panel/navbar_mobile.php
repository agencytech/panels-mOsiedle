<div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div id="backdrop" class="opacity-0 z-10 pointer-events-none transition-opacity ease-linear duration-300 fixed inset-0 bg-black/80"></div>
      <div id="sidenav_mobile" class="right-[-100%] pointer-events-none  fixed inset-y-0 right-0 z-50 w-full bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 duration-300 ">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="public/img/logo_long.svg" alt="">
          </a>
          <button id="nav_m_close_button" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6 flex flex-col">
                <a onclick="openPanelSite('ogloszenia');mobileClose()" id="nav_button" class="ogloszenia active:scale-95 cursor-pointer px-4 py-2 rounded-2xl text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100 hover:text-gray-800 duration-150">Ogłoszenia</a>
                <a onclick="openPanelSite('docs');mobileClose()" id="nav_button" class="docs active:scale-95 cursor-pointer px-4 py-2 rounded-2xl text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100 hover:text-gray-800 duration-150">Dokumenty</a>
                <a onclick="openPanelSite('uchwaly');mobileClose()" id="nav_button" class="uchwaly active:scale-95 cursor-pointer px-4 py-2 rounded-2xl text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100 hover:text-gray-800 duration-150">Uchwały</a>
                <a onclick="openPanelSite('finanse');mobileClose()" id="nav_button" class="finanse active:scale-95 cursor-pointer px-4 py-2 rounded-2xl text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100 hover:text-gray-800 duration-150">Finanse</a>
            </div>
            <div class="py-6">
              <div class="py-1 space-y-2" role="none">
                        <!-- <a class="text-xs font-medium text-gray-400 px-4">
                            Wybierz wspólnotę
                        </a>
                        <a href="#" class="text-gray-700 bg-green-50 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-5 w-5 text-green-400 group-hover:text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>

                            Płochocińska 16c
                        </a> -->
                        <a id="nav_button" onclick="openPanelSite('my_account');mobileClose()" class="my_account active:scale-95 text-gray-700 border-t border-[0.5] border-gray-100 group cursor-pointer duration-150 rounded-2xl hover:bg-gray-100 flex items-center px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            Ustawienia konta
                        </a>

                        <a id="nav_button" onclick="openPanelSite('about');mobileClose()" class="about cursor-pointer active:scale-95 duration-150 text-gray-700 group flex items-center px-4 py-2 rounded-2xl hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>

                            Informacje o wspólnocie
                        </a>
                        
                        <a id="nav_button" onclick="openPanelSite('support');mobileClose()" class="support active:scale-95 cursor-pointer duration-150 text-gray-700 group flex items-center px-4 py-2 rounded-2xl hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                            </svg>


                            Pomoc techniczna
                        </a>
                        <a href="scripts/login/logout.php" class="text-gray-700 border-t active:scale-95 border-[0.5] border-gray-100 group cursor-pointer duration-150 hover:bg-gray-100 flex items-center px-4 py-2 rounded-2xl" role="menuitem" tabindex="-1" id="menu-item-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>

                            Wyloguj się
                        </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>