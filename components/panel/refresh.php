<?php
session_start();
$wspolnota_id = $_SESSION['wspolnota_id'];
include "../../scripts/conn_db.php";
                    $sql = "SELECT id, title, text, created_at, expire_at, importance from announcements where communities = '$wspolnota_id' and (expire_at > now() or expire_at = '0000-00-00 00:00:00') order by importance asc, created_at desc;";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {   
                            //skala importance 0-5
                            if($row['importance'] == 0){
                                $row['importance'] = 'Zagrożenie';
                            }else if($row['importance'] == 1){
                                $row['importance'] = 'Awaria';
                            }else if($row['importance'] == 2){
                                $row['importance'] = 'Ważne';
                            }else if($row['importance'] == 3){
                                $row['importance'] = 'Aktualność';
                            }else if($row['importance'] == 4){
                                $row['importance'] = 'Mniej ważne';
                            }else if($row['importance'] == 5){
                                $row['importance'] = 'Informacja';
                            }
                            if ($row['expire_at'] == NULL) {
                                $row['expire_at'] = 'Nigdy';
                            }
                            if($row['title'] == NULL){
                                $row['title'] = 'Brak tytułu';
                            }
                            if($row['text'] == NULL){
                                $row['text'] = 'Brak treści';
                            }

                            echo '
                            <div class="neo_shadow rounded-[30px!important] h-full p-8 col-span-6 flex flex-col justify-between ';
                            if($row['importance'] == 'Zagrożenie'){
                                echo 'border-red-600 border-2';
                            }else if($row['importance'] == 'Awaria'){
                                echo 'border-red-600 border';
                            }else if($row['importance'] == 'Ważne'){
                                echo 'border-orange-600 border';
                            }
                            echo '">
                                <div>
                                <span class="text-xl font-[poppins]">
                                    <b>'.$row['title'].'</b><br/></span>
                                    <span class="text-sm">'.$row['text'].'</span>
                                </div>
                                
                                <div class="flex justify-between gap-4 font-[poppins] pt-8">
                                    <div class="flex items-center gap-2">
                                        <img src="public/img/user_profile.svg" alt="" class="w-[30px] shadow-xl rounded-full">
                                        <div class="flex flex-col">
                                            <span class="text-gray-800 text-sm">Gustaw Sołdecki</span>
                                            <span class="text-gray-500 text-xs -mt-1">Administrator lokalny</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <span class="text-xs text-gray-500">17 maja 2024</span>
                                        <span class="text-xs ';
                                        if($row['importance'] == 'Zagrożenie'){
                                            echo 'text-red-600 font-bold';
                                        }else if($row['importance'] == 'Awaria'){
                                            echo 'text-red-600';
                                        }else if($row['importance'] == 'Ważne'){
                                            echo 'text-orange-600';
                                        }else if($row['importance'] == 'Aktualność'){
                                            echo 'text-blue-600';
                                        }else if($row['importance'] == 'Mniej ważne'){
                                            echo 'text-purple-600';
                                        }else if($row['importance'] == 'Informacja'){
                                            echo 'text-gray-600';
                                        }
                                        echo '">'.$row['importance'].'</span>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    }else{
                        echo '
                        <div class="neo_shadow h-full p-8 col-span-6 flex flex-col justify-between border border-gray-200">
                            <div>
                            <span class="text-xl font-[poppins]">
                                <b>Brak ogłoszeń</b><br/></span>
                                <span class="text-sm">Aktualnie nie ma żadnych ogłoszeń w Twojej wspólnocie.</span>
                            </div>
                            
                            <div class="flex justify-between gap-4 font-[poppins] pt-8">
                                <div class="flex items-center gap-2">
                                    <img src="public/img/user_profile.svg" alt="" class="w-[30px] shadow-xl rounded-full">
                                    <div class="flex flex-col">
                                        <span class="text-gray-800 text-sm">Gustaw Sołdecki</span>
                                        <span class="text-gray-500 text-xs -mt-2">Administrator lokalny</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span class="text-xs">17 maja 2024</span>
                                    <span class="text-sm text-gray-600">Informacja</span>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    ?>