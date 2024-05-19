<section data-aos="fade-in" data-aos-delay="100" class="">
    <div class="flex md:flex-row flex-col justify-between items-center w-full">
        <div>
            <h1 class="text-lg font-bold">Wspólnoty</h1>
            <p class="mt-2 text-sm text-gray-500">Wszystkie wspólnoty w systemie mOsiedle.</p>
        </div>
        <button onclick="openPopupmTablicaAdd()" class="flex md:mt-0 mt-4 justify-center rounded-full bg-gray-900 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm theme-bg-hover duration-150 theme-shadow-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Dodaj wspólnotę</button>
    </div>
    <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full border-separate border-spacing-0">
          <thead>
            <tr>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">ID</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Nazwa</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Ulica</th>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Miasto</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../../scripts/conn_db.php";
            $sql = "SELECT id, name, street_name, city from communities;";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '
                    <tr class="hover:bg-gray-100 cursor-pointer" onclick="openPopupmTablica('.$row['id'].')">
                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                            <p class="">'.$row['id'].'</p>
                        </td>
                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">'.$row['name'].'</td>
                        <td class="whitespace
                        -nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">'.$row['street_name'].'</td>
                        <td class="whitespace
                        -nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">'.$row['city'].'</td>
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
