<?php
$wspolnota_id = $_SESSION['wspolnota_id'];
$sql = "select count(id) from users where role_id != 5 and communities = '$wspolnota_id';";
include "../scripts/conn_db.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$users = $row[0];

$sql = "select count(id) from mtablice where wspolnota_id = '$wspolnota_id';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$mtablice = $row[0];

$sql = "select count(id) from announcements where communities = '$wspolnota_id';";  
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$announcements = $row[0];
?>
<div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6">
      <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto" src="public/img/logo_long_admin.svg" alt="Your Company">
      </div>
      <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
          <li>
            <ul role="list" class="-mx-2 space-y-1">
              <li>
                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                <a id="nav_button" onclick="openPanelSite('ogloszenia')" class="active:scale-95 cursor-pointer ogloszenia text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 group-hover: duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                  </svg>
                  Ogłoszenia
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true"><?=$announcements?></span>

                </a>
              </li> 
              <li>
                <a id="nav_button" onclick="openPanelSite('docs')" class="cursor-pointer docs text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                  </svg>
                  Dokumenty
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('uchwaly')" class="cursor-pointer uchwaly text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class=" h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                  </svg>
                  Uchwały
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('finanse')" class="cursor-pointer finanse text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class=" h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" /></svg>
                  Finanse
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('users')" class="cursor-pointer users text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                  </svg>

                  Mieszkańcy
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true"><?=$users?></span>

                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('wnioski')" class="cursor-pointer wnioski text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                  </svg>

                  Wnioski o weryfikacje
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('mTablice')" class="cursor-pointer mTablice text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class=" h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5h3m-6.75 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-15a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 4.5v15a2.25 2.25 0 0 0 2.25 2.25Z" />
                  </svg>
                  mTablice
                  <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 " aria-hidden="true"><?=$mtablice?></span>
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('wspolnota')" class="cursor-pointer wspolnota text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg class=" h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                  </svg>
                  Wspólnota
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('logs')" class="cursor-pointer logs text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  Historia operacji
                </a>
              </li>
              <li>
                <a id="nav_button" onclick="openPanelSite('help')" class="cursor-pointer help text-gray-700 hover:bg-gray-100 group hover:text-gray-600 flex gap-x-3 rounded-xl active:scale-95 p-2 text-sm leading-6 font-semibold duration-150">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 shrink-0 text-gray-400 group-hover:text-gray-600 duration-150">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                  </svg>


                  Wsparcie techniczne
                </a>
              </li>
            </ul>
          </li>
          <li class="-mx-6 mt-auto flex items-center">

            <a id="nav_button" onclick="openPanelSite('my_account')" class="my_account w-[75%] flex items-center gap-x-4 px-6 py-3 text-sm font-medium leading-6 text-gray-900 active:scale-95 hover:bg-gray-200 duration-150 cursor-pointer">
              <img class="w-9 rounded-full object-cover aspect-square" src="public/img/user_profile.svg" alt="">
              <span class="sr-only">Your profile</span>
              <span aria-hidden="true" class="text-xs leading-3 capitalize min-w-fit">
                <?php echo $_SESSION['user']?><br/>
                <span class="text-xs text-gray-500 font-normal capitalize"></span>
              </span>
            </a>
            <a href="scripts/login/logout.php" class="w-[25%] h-full flex items-center justify-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 active:scale-95 hover:bg-gray-200 duration-150 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>