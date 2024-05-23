
<!DOCTYPE html>
<html lang="pl">
    <?php include 'components/head.php'; ?>
    <body>
        <div class="relative h-screen isolate overflow-hidden bg-black">
            <div class="h-screen flex items-center w-full justify-center">
                <div class="flex flex-col items-center">
                    <h2 id="clock" class="text-[220px] leading-[230px] font-medium items-center tracking-tight sm:text-12xl font-[poppins] flex flex-col">00:00</h2>
                    <!-- <p class="mx-auto mt-1 max-w-xl text-3xl text-gray-300">Czwartek</p> -->
                </div>
            </div>
            <svg viewBox="0 0 1024 1024" class="md:scale-110 scale-[55%] absolute left-1/2 md:top-[25%] -top-[0vh] -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)" fill-opacity="0.7" />
                <defs>
                <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                    <stop stop-color="#7775D6" />
                    <stop offset="1" stop-color="#E935C1" />
                </radialGradient>
                </defs>
            </svg>
        </div>
        <script>
            function updateTime() {
                const now = new Date();
                let hours = now.getHours().toString().padStart(2, '0');
                let minutes = now.getMinutes().toString().padStart(2, '0');
                
                const timeString = `${hours}<span class="blink"></span>${minutes}`;
                document.getElementById('clock').innerHTML = timeString;
            }

            setInterval(updateTime, 1000);
            updateTime();
        </script>
    </body>
    
</html>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>