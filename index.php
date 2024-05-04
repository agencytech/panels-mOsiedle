<!DOCTYPE html>
<html lang="pl">
    <?php include 'components/head.php'; ?>
    <body>
        
    </body>
    
</html>
<script>
    function openSite(site) {
    var body = document.body;
    // body.innerHTML = "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
    const url = "pages/" + site + ".php";
    fetch(url)
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");
            body.innerHTML = parsedDocument.body.innerHTML;

            // Wywołaj funkcję do wykonania skryptów
            executeScripts(parsedDocument);

            // Dodaj nowy wpis do historii przeglądarki
            const newUrl = window.location.origin + window.location.pathname + "?panel";
            history.pushState({ path: newUrl }, "", newUrl);
        });
    // Zapisz URL w localStorage
    localStorage.setItem("mOsiedlePanel", site);
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

var site = localStorage.getItem("mOsiedlePanel");
if (site == null) {
    openSite('login');
} else {
    openSite(site);
}
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>