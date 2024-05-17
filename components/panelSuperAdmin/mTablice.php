<section data-aos="fade-in" data-aos-delay="100">
    <div class="flex md:flex-row flex-col justify-between items-center w-full">
        <div>
            <h1 class="text-lg font-bold">mTablice</h1>
            <p class="mt-2 text-sm text-gray-500">Lista wszystkich mTablic stworzonych dla serwisu mOsiedle.</p>
        </div>
        <button onclick="openPopupmTablicaAdd()" class="flex md:mt-0 mt-4 justify-center rounded-full bg-gray-900 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm theme-bg-hover duration-150 theme-shadow-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Dodaj mTablicę</button>
    </div>
    <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full border-separate border-spacing-0">
          <thead>
            <tr>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Dane urządzenia</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Status gwarancji</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Właściciel</th>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Data produkcji</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../../scripts/conn_db.php";
            $sql = "SELECT id, serial, wspolnota_id, status_id, create_date, warranty_start, warranty_end, model from mtablice;";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    if ($row['wspolnota_id'] == 0) {
                        $row['wspolnota_id'] = 'Brak';
                    }
                    if ($row['warranty_start'] == NULL) {
                        $gwarancja = 'Brak danych';
                    }else {
                        $liczba_dni = (strtotime($row['warranty_end']) - strtotime(date('Y-m-d'))) / (60 * 60 * 24);
                        if ($liczba_dni < 0) {
                            if ($row['warranty_end'] == '0000-00-00' or $row['warranty_start'] == '0000-00-00') {
                                $gwarancja = 'Brak danych';
                            }else {
                            $gwarancja = 'Gwarancja wygasła';
                            }
                        }else {
                            $gwarancja = 'Na gwarancji ('.$liczba_dni.' dni)';
                        }
                    }
                    echo '
                    <tr class="hover:bg-gray-100 cursor-pointer" onclick="openPopupmTablica('.$row['id'].')">
                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                            <p class="">'.$row['model'].'</p>
                            <p class="text-xs text-gray-500 -mt-1">'.$row['serial'].'</p>
                        </td>
                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">'.$gwarancja.'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">'.$row['wspolnota_id'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">'.$row['create_date'].'</td>
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
$name_in_scripts = 'mTablica';
$delete_path = 'scripts/mTablice/delete.php';
$path = 'components/panelSuperAdmin/mTablica_edit.php';
include "../../components/popup.php";
?>

<?php 
$name_in_scripts = 'mTablicaAdd';
$delete_path = '';
$path = 'components/panelSuperAdmin/mTablica_add.php';
include "../../components/popup.php";
?>