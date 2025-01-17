<section data-aos="fade-in" data-aos-delay="100">
    <div class="flex md:flex-row flex-col justify-between items-center w-full">
        <div>
            <h1 class="text-lg font-bold">Mieszkańcy</h1>
            <p class="mt-2 text-sm text-gray-500">Lista mieszkańców w Twojej wspólnocie w portalu mOsiedle.</p>
        </div>
    </div>
    <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full border-separate border-spacing-0">
          <thead>
            <tr>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Imię i nazwisko</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Email</th>
              <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Wspólnoty</th>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Rola</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../../scripts/conn_db.php";
            session_start();
            $wspolnota_id = $_SESSION['wspolnota_id'];
            $sql = "SELECT users.id, users.fullName, users.email, roles.name, users.communities FROM users JOIN roles ON users.role_id = roles.id where users.role_id != 5 and communities like '%$wspolnota_id%';";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '
                    <tr class="hover:bg-gray-100 cursor-pointer" onclick="openPopupUsers('.$row['id'].')">
                        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">'.$row['fullName'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">'.$row['email'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">'.$row['communities'].'</td>
                        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">'.$row['name'].'</td>
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
$name_in_scripts = 'Users';
$delete_path = 'scripts/users/delete.php';
$path = 'components/panelSuperAdmin/users_edit.php';
include "../../components/popup.php";
?>
<?php 
$name_in_scripts = 'UsersAdd';
$delete_path = '';
$path = 'components/panelSuperAdmin/users_add.php';
include "../../components/popup.php";
?>