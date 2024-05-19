<section data-aos="fade-in" data-aos-delay="100">
    <div class="flex md:flex-row flex-col justify-between items-center w-full">
        <div>
            <h1 class="text-lg font-bold">Ogłoszenia</h1>
            <p class="mt-2 text-sm text-gray-500">Wszystkie ogłoszenia w Twojej wspólnocie w portalu mOsiedle.</p>
        </div>
        <button onclick="openPopupOgloszeniaAdd()" class="flex md:mt-0 mt-4 justify-center rounded-full bg-gray-900 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm theme-bg-hover duration-150 theme-shadow-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Dodaj ogłoszenie</button>
    </div>
    <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full border-separate border-spacing-0">
          <thead>
            <tr>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Nagłówek</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Treść</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Data utworzenia</th>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Data wygaśnięcia</th>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Ważność</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../../scripts/conn_db.php";
            session_start();
            $wspolnota_id = $_SESSION['wspolnota_id'];
            $sql = "SELECT id, title, text, created_at, expire_at, importance from announcements where communities = '$wspolnota_id' order by created_at desc;";
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
                        $row['importance'] = 'Średnie';
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
                    //jeśli text za długi to skróć i dopisz ...
                    if(strlen($row['text']) > 50){
                        $row['text'] = substr($row['text'], 0, 50).'...';
                    }

                    //jeśłi tytuł za długi to skróć i dopisz ...
                    if(strlen($row['title']) > 20){
                        $row['title'] = substr($row['title'], 0, 20).'...';
                    }

                    if($row['expire_at'] == '0000-00-00 00:00:00'){
                        $row['expire_at'] = 'Nigdy';
                    }
                        
                    echo '
                    <tr class="hover:bg-gray-100 cursor-pointer" onclick="openPopupOgloszenia('.$row['id'].')">
                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">'.$row['title'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">'.$row['text'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">'.$row['created_at'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">'.$row['expire_at'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">'.$row['importance'].'</td>
                    </tr>
                    ';
                }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php 
$name_in_scripts = 'Ogloszenia';
$delete_path = 'scripts/ogloszenia/delete.php';
$path = 'components/panelAdmin/ogloszenia_edit.php';
include "../../components/popup.php";
?>
<?php 
$name_in_scripts = 'OgloszeniaAdd';
$delete_path = '';
$path = 'components/panelAdmin/ogloszenia_add.php';
include "../../components/popup.php";
?>