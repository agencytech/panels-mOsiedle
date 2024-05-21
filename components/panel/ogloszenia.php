<section data-aos="fade-in" data-aos-delay="100" class="">
    <div class="flex md:flex-row flex-col justify-between items-center w-full">
        <!-- <div>
            <h1 class="text-lg font-bold">Uchwały</h1>
            <p class="mt-2 text-sm text-gray-500">Wszystkie uchwały w Twojej wspólnocie w portalu mOsiedle.</p>
        </div> -->
    </div>
    <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
        <!-- <div class="absolute inset-x-0 transform-gpu pointer-events-none overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-blue-800 to-red-500 opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div> -->
        <div id="refresh_body" class="px-8 duration-300 w-full h-full grid md:grid-cols-12 grid-cols-1 gap-4 row-span-3">
                    
        </div>
    </div>
  </div>
</section>
<script>
    function refresh(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("refresh_body").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "components/panel/refresh.php", true);
        xhttp.send();
    }
    setInterval(refresh, 10000);
    refresh();
</script>