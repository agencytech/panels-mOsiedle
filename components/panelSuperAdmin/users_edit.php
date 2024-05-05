
<div class="-mt-4">
    <h1 class="text-md font-bold">Edytuj użytkownika</h1>
    <p class=" text-xs text-gray-500">Edytujesz profil użytkownika: Gustawo Ni.</p>
</div>

<div class="mt-4 flex md:flex-row flex-col gap-2">
  <div class="w-full">
    <label for="name" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Imię</label>
    <div class="mt-2">
        <input name="name" id="name" type="text" placeholder="Wpisz imię" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
    </div>
  </div>
  <div class="w-full">
    <label for="name" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Nazwisko</label>
    <div class="mt-2">
        <input name="name" id="name" type="text" placeholder="Wpisz nazwisko" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
    </div>
  </div>
</div>

<div class="mt-4 flex md:flex-row flex-col gap-2">
  <div class="md:w-2/3 w-full">
    <label for="name" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Email</label>
    <div class="mt-2">
        <input name="name" id="name" type="text" placeholder="Wpisz email" class="border rounded-full py-1.5 w-full px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
    </div>
  </div>
  <div class="md:w-1/3 w-full">
    <label for="name" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Rola</label>
    <div class="mt-2">
        <input name="name" id="name" type="text" placeholder="Wybierz rolę" class="border rounded-full py-1.5 w-full px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
    </div>
  </div>
</div>

<div class="mt-4 flex flex-row gap-2">
  <div class="w-full">
    <label for="name" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Wspólnoty</label>
    <div class="mt-2">
        <input name="name" id="name" type="text" placeholder="Wybierz wspólnoty" class="border rounded-full py-1.5 w-full px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
    </div>
  </div>
</div>

<div class="mt-6 sm:mt-6 mb-2 sm:flex sm:flex-row-reverse">
    <button onclick="popup<?=$name_in_scripts?>CloseConfirm()" type="button" class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-full bg-gray-900 duration-150 px-4 py-2 text-sm font-medium text-white shadow-sm hover:shadow-xl hover:bg-green-500 sm:ml-3 sm:w-auto">Zapisz</button>
    <button onclick="popup<?=$name_in_scripts?>OpenClose();popup<?=$name_in_scripts?>CloseConfirm()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-full px-4 py-2 text-sm font-medium text-gray-900 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:ring-red-500 hover:bg-red-500 hover:text-white hover:shadow-xl duration-150 sm:mt-0 sm:w-auto">Nie zapisuj</button>
</div>
<?php
$id = $_GET['id'];

?>