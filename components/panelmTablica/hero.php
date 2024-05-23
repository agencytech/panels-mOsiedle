<?php

include "../scripts/conn_db.php";
$sql = "select wspolnota_id, place_details from mtablice where user_id = ".$_SESSION['user_id'].";";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $wspolnota_id = $row['wspolnota_id'];
        $place_details = $row['place_details'];
    }

    $_SESSION['wspolnota_id'] = $wspolnota_id;

$sql = "select name, street_name, city from communities where id = $wspolnota_id";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $street_name = $row['street_name'];
        $city = $row['city'];
    }

//rozdzielenie place datail które wygląda: klatka 2 na zmienne osobne: klatka, 2
$place_details = explode(" ", $place_details);
$place = $place_details[0];
$number = $place_details[1];

//ustawienie daty jako zmiennych
$dzien = date("d");
$miesiac = date("m");
//zamienienie miesiąca na polski
switch ($miesiac) {
    case "01":
        $miesiac = "Styczeń";
        break;
    case "02":
        $miesiac = "Luty";
        break;
    case "03":
        $miesiac = "Marzec";
        break;
    case "04":
        $miesiac = "Kwiecień";
        break;
    case "05":
        $miesiac = "Maj";
        break;
    case "06":
        $miesiac = "Czerwiec";
        break;
    case "07":
        $miesiac = "Lipiec";
        break;
    case "08":
        $miesiac = "Sierpień";
        break;
    case "09":
        $miesiac = "Wrzesień";
        break;
    case "10":
        $miesiac = "Październik";
        break;
    case "11":
        $miesiac = "Listopad";
        break;
    case "12":
        $miesiac = "Grudzień";
        break;
}
$rok = date("Y");
$dzienTygodnia = date("w");
//zamienienie dnia tygodnia na polski
switch ($dzienTygodnia) {
    case "0":
        $dzienTygodnia = "Niedziela";
        break;
    case "1":
        $dzienTygodnia = "Poniedziałek";
        break;
    case "2":
        $dzienTygodnia = "Wtorek";
        break;
    case "3":
        $dzienTygodnia = "Środa";
        break;
    case "4":
        $dzienTygodnia = "Czwartek";
        break;
    case "5":
        $dzienTygodnia = "Piątek";
        break;
    case "6":
        $dzienTygodnia = "Sobota";
        break;
}
?>
<div class="w-full md:py-8 md:px-12 h-screen flex flex-col justify-between overflow-y-hidden">
    <section class="h-full">
        <nav class="flex justify-between items-center -mt-4">
            <div class="md:scale-100 scale-50 flex gap-8 h-full items-center font-[poppins]">
                <div>
                    <p class="text-sm text-right">Poniedziałek</p>
                    <div class="flex items-center gap-1">
                        <span class="font-bold text-gray-700 text-6xl">27</span>
                        <div class="flex flex-col items-end">
                            <span class="font-bold text-gray-500">o</span>
                            <span class="font-bold text-gray-500 -mt-2 text-2xl">C</span>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-sm text-right">Wtorek</p>
                    <div class="flex items-center gap-1">
                        <span class="font-bold text-gray-700 text-6xl">24</span>
                        <div class="flex flex-col items-end">
                            <span class="font-bold text-gray-500">o</span>
                            <span class="font-bold text-gray-500 -mt-2 text-2xl">C</span>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-sm text-right">Środa</p>
                    <div class="flex items-center gap-1">
                        <span class="font-bold text-gray-700 text-6xl">21</span>
                        <div class="flex flex-col items-end">
                            <span class="font-bold text-gray-500">o</span>
                            <span class="font-bold text-gray-500 -mt-2 text-2xl">C</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:scale-100 scale-50 mt-8 flex flex-col items-end justify-end font-[poppins]">
                <div>
                    <span class="text-5xl"><?=$dzien?></span>
                    <span class="text-4xl font-light"><?=$miesiac?></span>
                    <span class="text-5xl"><?=$rok?></span>
                </div>
                <span class="text-5xl font-medium"><?=$dzienTygodnia?></span>
            </div>
        </nav>
        <section class="h-full mt-12">
            <div class="w-full h-full grid grid-rows-12 gap-12">
                <div class="w-full h-full grid grid-cols-8 md:gap-12 row-span-2">
                    <div class="md:scale-100 scale-50 neo_shadow h-full p-12 col-span-5 flex flex-col justify-between border border-red-600">
                        <span class="text-2xl font-[poppins]">
                            Uwaga! W dniach 6-7.03.2024 zostanie przebudowana sieć wodociągowa w związku z czym woda zostanie wyłączona w godzinach 9-16.
                        </span>
                        
                        <div class="flex justify-between gap-4 font-[poppins] border-gray-300 pt-8">
                            <div class="flex items-center gap-4">
                                <div class="w-[35px] h-[35px] shadow-xl rounded-full flex items-center justify-center">
                                    <img src="public/img/wodo.png" alt="" class="">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-800">MPWiK</span>
                                    <span class="text-gray-500 text-sm -mt-2">Miejski zarządca</span>
                                </div>
                            </div>
                            <div class="flex flex-col items-end">
                                <span class="text-xs">17 maja 2024</span>
                                <span class="text-sm text-red-600">Wyłączenie</span>
                            </div>
                        </div>
                    </div>
                    <div class="neo_shadow h-full p-12 col-span-3 flex flex-col justify-between ">
                        <div class="text-sm font-[poppins]">
                            <!-- Uwaga! W dniach 6-7.03.2024 zostanie przebudowana sieć wodociągowa w związku z czym woda zostanie wyłączona w godzinach 9-16. -->
                            <span class="font-medium">Numery ratunkowe:</span>
                            <br/><br/>
                            999 Pogotowie
                            <br/>
                            998 Straż pożarna
                            <br/>
                            997 Policja
                            <br/>
                            986 Straż miejska
                            <br/>
                            970 Informacja o wypadkach
                        </div>
                        
                        <div class="flex flex-col justify-between gap-4 font-[poppins] border-gray-300 pt-8">
                            <div class="flex items-center gap-4">
                                <div class="w-[35px] h-[35px] shadow-xl rounded-full flex items-center justify-center">
                                    <img src="public/img/user_profile.svg" alt="" class="w-full">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-800">Wspólnota</span>
                                    <span class="text-gray-500 text-sm -mt-2">Administrator lokalny</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="w-full h-full grid grid-cols-12 gap-12 row-span-3 mt-4">
                    <div class="neo_shadow h-full p-12 col-span-4 flex flex-col justify-between">
                        <span class="text-xs flex gap-2 items-center">przypięte
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-3.5 h-3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>
                        </span>
                        <span class="text-xl font-[poppins] text-center flex items-center flex-col gap-4">
                            <img src="public/img/no_smoke.jpg" alt="" class="rounded-full w-1/2">
                            Zakaz palenia na klatce schodowej
                        </span>
                        
                        <div class="flex flex-col justify-between gap-4 font-[poppins] border-gray-300 pt-8">
                            <div class="flex items-center gap-4">
                                <div class="w-[35px] h-[35px] shadow-xl rounded-full flex items-center justify-center">
                                    <img src="public/img/user_profile.svg" alt="" class="w-full">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-800">Wspólnota</span>
                                    <span class="text-gray-500 text-sm -mt-2">Administrator lokalny</span>
                                </div>
                            </div>
                            <!-- <div class="flex flex-col items-end">
                                <span class="text-sm text-red-600">Wyłączenie</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="neo_shadow h-full p-12 col-span-8 flex flex-col justify-between">
                        <span class="text-2xl font-[poppins]">
                            W dniu 6.03.2024 w godzinach 9-16 prosimy nie parkować wzdłuż budynku 16C od wjazdu do garażu do altany śmietnikowej w związku z pracami budynku 16C.
                            <br/><br/>
                            Dziękujemy za zrozumienie!
                        </span>
                        
                        <div class="flex justify-between gap-4 font-[poppins] pt-8">
                            <div class="flex items-center gap-4">
                                <img src="public/img/user_profile.svg" alt="" class="w-[35px] shadow-xl rounded-full">
                                <div class="flex flex-col">
                                    <span class="text-gray-800">Administrator Wspólnoty Mieszkaniowej</span>
                                    <span class="text-gray-500 text-sm -mt-2">Administrator lokalny</span>
                                </div>
                            </div>
                            <div class="flex flex-col items-end">
                                <span class="text-xs">17 maja 2024</span>
                                <span class="text-sm text-blue-600">Warte uwagi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="refresh_body" class="duration-300 w-full h-full grid grid-cols-12 gap-12 row-span-3">
                    
                </div>
            </div>
        </section>
    </section>
    <footer class="w-full flex flex-row justify-between items-bottom -mt-20">
        <div class="flex items-center gap-8">
            <img src="public/img/logo_long.svg" alt="" class="md:w-[170px]">
            <div class="h-2/3 w-[1px] border-r border-gray-600"></div>
            <div>
                <h1 class="font-bold md:text-2xl font-[poppins] "><?=$name?></h1>
                <div class="-mt-2 text-gray-500 gap-4 flex items-center font-[poppins]">
                    <span><?=$city?></span>
                    <div class="h-[13px] w-[1px] border-r border-gray-500"></div>
                    <span><?=$street_name?></span>
                </div>
            </div>
        </div>
        <div class="flex items-center">
            <div class="flex items-center flex-col">
                <h1 class="font-bold text-6xl font-[poppins]"><?=$number?></h1>
                <a href="scripts/login/logout.php" class="-mt-2 font-[poppins]"><?=$place?></a>
            </div>
            <div class="flex flex-col items-center ml-8">
                <img src="public/img/qr.png" alt="" class="w-[80px] shadow-xl rounded-xl p-2">
                <span class="text-xs text-gray-600 font-[poppins]">Dołącz do nas!</span>
            </div>
        </div>
        
    </footer>
</div>
<!-- <a href="scripts/login/logout.php" class="text-gray-700 border-t border-[0.5] border-gray-100 group cursor-pointer duration-150 hover:bg-gray-100 flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
    </svg>
    Wyloguj się
</a> -->
<script>
    function refresh(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("refresh_body").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "components/panelmTablica/refresh.php", true);
        xhttp.send();
    }
    setInterval(refresh, 10000);
    refresh();
</script>