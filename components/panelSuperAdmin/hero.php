
<div class="min-h-screen">
  
  <?php include '../components/panelSuperAdmin/navbar_mobile.php'?>

  <!-- Static sidebar for desktop -->
  <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <?php include '../components/panelSuperAdmin/navbar.php'; ?>
  </div>

  <div class="lg:hidden sticky top-0 z-40 bg-cover bg-fixed bg-center bg-no-repeat">
      <div class="flex h-16 shrink-0 items-center gap-x-6 border-b border-black/5  px-4 shadow-sm sm:px-6 lg:px-8">
        <button id="nav_m_open_button" type="button" class="-m-2.5 p-2.5 text-black">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>
        </button>
        <img src="public/img/logo_long_superadmin.svg" class="w-1/3 max-w-[150px]" alt="">
      </div>
  </div>

  <div id="loading" class="hidden absolute pointer-events-none w-full mt-32 justify-center z-[999]">
          
  </div>

  <main class="py-10 lg:pl-72 h-full">
    <div id="panelBody" class="px-4 sm:px-6 lg:px-8 h-full">
      
    </div>
  </main>
</div>

<script>
    function openPanelSite(site) {
    var body = document.getElementById("panelBody");
    var loading = document.getElementById("loading");
    loading.innerHTML = "<div class='z-[30] bg-black/90 p-4 rounded-full flex items-center justify-center'><div class='lds-dual-ring'></div></div>";
    // body.innerHTML = "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
    const url = "components/panelSuperAdmin/" + site + ".php";
    fetch(url)
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");
            body.innerHTML = parsedDocument.body.innerHTML;

            // Wywołaj funkcję do wykonania skryptów
            executeScripts(parsedDocument);

            // Dodaj nowy wpis do historii przeglądarki
            //const newUrl = window.location.origin + window.location.pathname + "?" + site;
            //history.pushState({ path: newUrl }, "", newUrl);
        });
    // Zapisz URL w localStorage
    localStorage.setItem("mOsiedlePanelSite", site);
    var removeButtons = document.querySelectorAll("#nav_button");
    for (var i = 0; i < removeButtons.length; i++) {
      removeButtons[i].classList.remove("sidenav-button-active");
    }

    var activeButtons = document.querySelectorAll("." + site);
    for(var i = 0; i < activeButtons.length; i++) {  
      activeButtons[i].classList.add("sidenav-button-active");
    }
    loading.innerHTML = "";
}

function executeScripts(parsedDocument) {
    // Przechodź przez znalezione skrypty i wykonuj je
    const scripts = parsedDocument.querySelectorAll("script");
    scripts.forEach(script => {
        const scriptElement = document.createElement("script");
        scriptElement.textContent = script.textContent;
        document.body.appendChild(scriptElement);
    });
}

var panelSite = localStorage.getItem("mOsiedlePanelSite");
// jeśli nie ma zapisanego panelSite lub panelSite nie równa się users lub mTablice lub wspolnota lub ogloszenia lub docs lub changeLog to otwórz stronę users
//if (!panelSite || panelSite !== "users" && panelSite !== "mTablice" && panelSite !== "wspolnota" && panelSite !== "ogloszenia" && panelSite !== "docs" && panelSite !== "changeLog") {
if(panelSite == null) {
    openPanelSite('users');
} else {
    openPanelSite(panelSite);
    var removeButtons = document.querySelectorAll("#nav_button");
    for (var i = 0; i < removeButtons.length; i++) {
      removeButtons[i].classList.remove("sidenav-button-active");
    }

    var activeButtons = document.querySelectorAll("." + panelSite);
    for(var i = 0; i < activeButtons.length; i++) {  
      activeButtons[i].classList.add("sidenav-button-active");
    }
}
</script>
 <script>
    const button = document.querySelector('#nav_m_close_button')
    const openButton = document.querySelector('#nav_m_open_button')
    const sidebar = document.querySelector('#sidenav_mobile')
    const backdrop = document.querySelector('#backdrop')

    function toggleNavMobile() {
      sidebar.classList.toggle('left-[-100%]')
      backdrop.classList.toggle('opacity-0')
      sidebar.classList.toggle('pointer-events-none')
      backdrop.classList.toggle('pointer-events-none')
    }

    function mobileClose() {
      sidebar.classList.add('left-[-100%]')
      backdrop.classList.add('opacity-0')
      sidebar.classList.add('pointer-events-none')
      backdrop.classList.add('pointer-events-none')
    }
    button.addEventListener('click', () => {
      toggleNavMobile()
    })

    openButton.addEventListener('click', () => {
        toggleNavMobile()
    })
    </script>