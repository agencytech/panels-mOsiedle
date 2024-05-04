<div class="flex min-h-screen">
  <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
    <div class="mx-auto w-full max-w-sm lg:w-96">
      <div>
        <img data-aos="fade-right" data-aos-delay="100" data-aos-anchor-placement="top-bottom" class="h-10 w-auto" src="public/img/logo_long.svg" alt="Your Company">
        <h2 data-aos="fade-right" data-aos-delay="200" data-aos-anchor-placement="top-bottom" class="mt-8 text-2xl font-bold leading-9 tracking-tight text-gray-900">Zarejestruj swoje konto</h2>
        <p data-aos="fade-right" data-aos-delay="300" data-aos-anchor-placement="top-bottom" class="mt-2 text-sm leading-6 text-gray-500">
          Masz konto?
          <a onclick="openSite('login')" class="cursor-pointer font-semibold hover:text-red-300 theme-text duration-150">Zaloguj się tutaj <span aria-hidden="true">&rarr;</span></a>
        </p>
      </div>

      <div class="mt-10">
        <div>
          <form action="#" method="POST" class="space-y-6">
            <div data-aos="fade-right" data-aos-delay="400" data-aos-anchor-placement="top-bottom">
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adres email</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-3 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 duration-150 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div data-aos="fade-right" data-aos-delay="500" data-aos-anchor-placement="top-bottom">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Hasło</label>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-3 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 duration-150 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div data-aos="fade-right" data-aos-delay="600" data-aos-anchor-placement="top-bottom">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Powtórz hasło</label>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-3 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 duration-150 sm:text-sm sm:leading-6">
              </div>
            </div>

            <!-- <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                <label for="remember-me" class="ml-3 block text-sm leading-6 text-gray-700">Remember me</label>
              </div>

              <div class="text-sm leading-6">
                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
              </div>
            </div> -->

            <div data-aos="fade-right" data-aos-delay="700" data-aos-anchor-placement="top-bottom">
              <button type="submit" class="flex w-full justify-center rounded-full bg-gray-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm theme-bg-hover duration-150 theme-shadow-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Zarejestruj się</button>
            </div>
          </form>
        </div>

       
      </div>
    </div>
  </div>
  <div class="relative hidden w-0 flex-1 lg:block">
    <img class="absolute inset-0 h-full w-full object-cover" src="public/img/test_bg.jpg" alt="">
  </div>
</div>
