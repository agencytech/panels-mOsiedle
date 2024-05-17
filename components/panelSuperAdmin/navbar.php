<?php
$sql = "select count(id) from users where role_id != 5;";
include "../scripts/conn_db.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$users = $row[0];

$sql = "select count(id) from mtablice;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$mtablice = $row[0];
?>
<div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6">
      <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto ml-2" src="public/img/logo_long_superadmin.svg" alt="Your Company">
      </div>
      <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
          <li>
            <ul role="list" class="-mx-2 space-y-1">
              <li>
                <a id="nav_button" onclick="openPanelSite('users')" class="cursor-pointer users text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-full px-4 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                  </svg>

                  
                  Użytkownicy
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true"><?=$users?></span>
                </a>
              </li> 
              <li>
                <a id="nav_button" onclick="openPanelSite('mTablice')" class="cursor-pointer mTablice text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-full px-4 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class=" h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5h3m-6.75 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-15a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 4.5v15a2.25 2.25 0 0 0 2.25 2.25Z" />
                  </svg>
                  mTablice
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true"><?=$mtablice?></span>
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('wspolnoty')" class="cursor-pointer wspolnoty text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-full px-4 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class=" h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                  </svg>
                  Wspólnoty
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true">-</span>
                </a>
              </li>
              <li>
                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                <a id="nav_button" onclick="openPanelSite('ogloszenia')" class="cursor-pointer ogloszenia text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-full px-4 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 group-hover: duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                  </svg>
                  Ogłoszenia
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true">-</span>
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('docs')" class="cursor-pointer docs text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-full px-4 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                  </svg>
                  Dokumenty
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true">-</span>
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('history')" class="cursor-pointer history text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-full px-4 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  Historia operacji
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('changeLog')" class="cursor-pointer changeLog text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-full px-4 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                  </svg>

                  Change log
                </a>
              </li>
            </ul>
          </li>
          <li class="-mx-6 mt-auto flex items-center">

            <a id="nav_button" onclick="openPanelSite('my_account')" class="my_account w-[75%] flex items-center gap-x-4 px-6 py-3 text-sm font-medium leading-6 text-gray-900  hover:bg-gray-200 duration-150 cursor-pointer">
              <img class="w-9 rounded-full object-cover aspect-square" src="public/img/user_profile.svg" alt="">
              <span class="sr-only">Your profile</span>
              <span aria-hidden="true" class="text-xs leading-3 capitalize min-w-fit">
                <?php echo $_SESSION['user']?><br/>
                <span class="text-xs text-gray-500 font-normal capitalize"></span>
              </span>
            </a>
            <a href="scripts/login/logout.php" class="w-[25%] h-full flex items-center justify-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900  hover:bg-gray-200 duration-150 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>