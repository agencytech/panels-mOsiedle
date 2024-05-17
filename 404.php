<!DOCTYPE html>
<html lang="pl">
    <?php include 'components/head.php'; ?>
    <body>
        <main class="grid min-h-screen place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="text-center">
                <p class="text-base font-semibold text-red-600">Błąd 404</p>
                <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Nie znaleźliśmy strony!</h1>
                <p class="mt-6 text-base leading-7 text-gray-600">Reasumując wszystkie aspekty kwintesencji tematu, dochodzimy do fundamentalnej konkluzji: <br/> Strona której szukasz jest niedostępna.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <div class="sm:flex sm:flex-row-reverse">
                        <button class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-full bg-gray-900 duration-150 px-4 py-2 text-sm font-medium text-white shadow-sm hover:shadow-xl hover:bg-gray-500 sm:ml-2 sm:w-auto">Panel</button>
                        <button onclick="popupUsersAddCloseConfirm()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-full px-4 py-2 text-sm font-medium text-gray-900 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:ring-gray-500 hover:bg-gray-500 hover:text-white hover:shadow-xl duration-150 sm:mt-0 sm:w-auto">Strona główna</button>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php'; ?>
    </body>
    
</html>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>