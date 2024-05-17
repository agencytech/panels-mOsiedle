
<form action="scripts/mTablice/add.php" method="POST">
    <div class="-mt-4">
        <h1 class="text-md font-bold">Dodaj mTablicę</h1>
        <p class=" text-xs text-gray-500">Dodajesz nową mTablicę.</p>
    </div>

    <div class="mt-4 flex md:flex-row flex-col gap-2">
        <div class="w-full">
            <label for="model" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Model</label>
            <div class="mt-2">
                <select name="model" id="model" type="text" placeholder="Wybierz model" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white" required>
                    <option value="mTablica Basic">mTablica Basic</option>
                    <option value="mTablica Professional">mTablica Professional</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mt-4 flex md:flex-row flex-col gap-2">
        <div class="md:w-1/2 w-full">
            <label for="warranty_start" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Początek gwarancji</label>
            <div class="mt-2">
                <input name="warranty_start" id="warranty_start" type="date" value="" placeholder="Data ropoczęcia" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
            </div>
        </div>
        <div class="md:w-1/2 w-full">
            <label for="warranty_end" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Koniec gwarancji</label>
            <div class="mt-2">
                <input name="warranty_end" id="warranty_end" type="date" value="" placeholder="Data zakończenia" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
            </div>
        </div>
    </div>

    <div class="mt-4 flex flex-row gap-2">
        <div class="md:w-1/2 w-full">
            <label for="wspolnota" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Wspólnota - właściciel</label>
            <div class="mt-2">
                <select name="wspolnota" id="wspolnota" type="text" placeholder="Wybierz wspólnotę" class="border rounded-full py-1.5 w-full px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
                    <option value="0" class="hidden">Wybierz wspólnotę</option>
                    <option value="0">Brak</option>
                </select>
            </div>
        </div>
        <div class="md:w-1/2 w-full">
            <label for="details" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Szczegóły lokalizacji</label>
            <div class="mt-2">
                <input name="details" id="details" type="text" value="" placeholder="np. klatka 3" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
            </div>
        </div>
    </div>

    <div class="mt-4 flex md:flex-row flex-col gap-2">
        <div class="md:w-2/5 w-full">
            <label for="description" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Opis</label>
            <div class="mt-2">
                <input name="description" id="description" type="text" value="" placeholder="Wpisz opis" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
            </div>
        </div>
        <div class="md:w-2/5 w-full">
            <label for="pswd" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Hasło</label>
            <div class="mt-2">
                <input name="pswd" id="pswd" type="text" value="" placeholder="Wpisz hasło" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white" required>
            </div>
        </div>
        <div class="md:w-1/5 w-full">
            <label for="code" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Kod zaproszenia</label>
            <div class="mt-2 flex flex-row gap-1">
                <input name="code" id="code" type="text" value="" placeholder="Kod" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
                <button type="button" class="rounded-full bg-gray-900 text-white px-1.5 hover:bg-white hover:text-black hover:shadow-xl duration-150 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="mt-6 sm:mt-6 mb-2 sm:flex sm:flex-row-reverse">
        <button class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-full bg-gray-900 duration-150 px-4 py-2 text-sm font-medium text-white shadow-sm hover:shadow-xl hover:bg-green-500 sm:ml-2 sm:w-auto">Zapisz</button>
        <button onclick="popupmTablicaAddCloseConfirm()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-full px-4 py-2 text-sm font-medium text-gray-900 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:ring-gray-500 hover:bg-gray-500 hover:text-white hover:shadow-xl duration-150 sm:mt-0 sm:w-auto">Nie zapisuj</button>
    </div>
</form>