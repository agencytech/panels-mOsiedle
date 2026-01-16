<?php
$id = $_GET['id'];
include "../../scripts/conn_db.php";
$sql = "SELECT id, title, text, created_at, expire_at, edited_at, importance from announcements where id = $id;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $text = $row['text'];
        $created_at = $row['created_at'];
        $expire_at = $row['expire_at'];
        $importance = $row['importance'];
        $edited_at = $row['edited_at'];
    }
}
?>
<form action="scripts/ogloszenia/edit.php" method="POST">
    <input type="hidden" name="id" value="<?=$id?>">
    <div class="-mt-4">
        <h1 class="text-md font-bold">Edytujesz ogłoszenie</h1>
        <p class=" text-xs text-gray-500">Ostatnia edycja: <?=$edited_at?>.</p>
    </div>

    <div class="mt-4 flex md:flex-row flex-col gap-2">
    <div class="w-full">
        <label for="title" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900 ql-align-right">Tytuł</label>
        <div class="mt-2">
            <input name="title" id="title" type="text" value="<?=$title?>" placeholder="Wpisz tytuł" class="border rounded-full w-full py-1.5 px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
        </div>
    </div>
    </div>

    <div class="mt-4 flex md:flex-row flex-col gap-2">
    <div class="w-full">
        <label for="text" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Treść (obowiązkowe)</label>
        <!-- <div class="mt-2">
            <textarea name="text" id="text" placeholder="Wpisz treść" rows=5 class="border rounded-2xl py-1.5 w-full px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white" required><?=$text?></textarea>
        </div> -->
        <div style="height: auto; " class=" max-h-[45vh] text-gray-900 rounded-xl" id="editor-container-popup"><?=$text?></div>
        <input type="hidden" id="text" name="text" value='<?=$text?>'>
    </div>
    </div>

    <div class="mt-4 flex flex-row gap-2">
        <div class="md:w-1/2 w-full">
            <label for="expire_at" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Data wygaśnięcia *</label>
            <div class="mt-2">
                <input name="expire_at" id="expire_at" type="datetime-local" value="<?=$expire_at?>" placeholder="Wpisz hasło" class="cursor-pointer border rounded-full py-1.5 w-full px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white">
            </div>
        </div>
        <div class="md:w-1/2 w-full">
            <label for="importance" class="ml-px block pl-2 text-sm font-medium leading-6 text-gray-900">Priorytetyzacja</label>
            <div class="mt-2">
                <select name="importance" id="importance" placeholder="Wybierz" class="border rounded-full py-1.5 w-full px-4 text-sm border-gray-400 focus:ring-0 focus:outline-0 focus:bg-[#1c1c1c] focus:border-[#1c1c1c] focus:shadow-xl duration-150 font-medium focus:text-white" required>
                    <option value="" class="hidden">Wybierz</option>
                    <option value="0" <?php if($importance == 0) echo 'selected'; ?>>Zagrożenie</option>
                    <option value="1" <?php if($importance == 1) echo 'selected'; ?>>Awaria</option>
                    <option value="2" <?php if($importance == 2) echo 'selected'; ?>>Ważne</option>
                    <option value="3" <?php if($importance == 3) echo 'selected'; ?>>Średnie</option>
                    <option value="4" <?php if($importance == 4) echo 'selected'; ?>>Mniej ważne</option>
                    <option value="5" <?php if($importance == 5) echo 'selected'; ?>>Informacja</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mt-4 flex flex-row gap-2">
        <p class="text-xs">* zostaw puste jeżeli chcesz, aby ogłoszenie było bezterminowe</p>
    </div>

    <div class="mt-6 sm:mt-6 mb-2 sm:flex sm:flex-row-reverse">
        <button class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-full bg-gray-900 duration-150 px-4 py-2 text-sm font-medium text-white shadow-sm hover:shadow-xl hover:bg-green-500 sm:ml-2 sm:w-auto">Zapisz</button>
        <button onclick="popupOgloszeniaCloseConfirm()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-full px-4 py-2 text-sm font-medium text-gray-900 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:ring-gray-500 hover:bg-gray-500 hover:text-white hover:shadow-xl duration-150 sm:mt-0 sm:w-auto">Nie zapisuj</button>
        <button type="button" onclick="popupOgloszeniaDelete()" class="active:scale-95 duration-150 mt-3 sm:mr-2 inline-flex w-full justify-center rounded-full px-4 py-2 text-sm font-medium text-gray-900 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:ring-red-500 hover:bg-red-500 hover:text-white hover:shadow-xl duration-150 sm:mt-0 sm:w-auto">Usuń</button>
    </div>
</form>

<script>
  var quill = new Quill('#editor-container-popup', {
    theme: 'snow',
    placeholder: 'Tu wpisz treść...',
    modules: {
      toolbar: [
        [{ 'size': [ 'small', false, 'large', 'huge'] }],
        ['bold', 'italic', 'underline', 'strike'],  // Funkcje pogrubiania, kursywy, podkreślenia, przekreślenia
        // Dodaj niestandardową paletę kolorów
        ['link'],
        ['blockquote'],
        ['code'],
        [{ 'align': ['', 'center', 'right', 'justify'] }],
        [{ 'color': [false, 'var(--text)', '#ffffff', 'rgb(243 244 246)', 'rgb(229 231 235)', 'rgb(209 213 219)', 'rgb(156 163 175)', 'rgb(107 114 128)', 'rgb(75 85 99)', 'rgb(55 65 81)', 'rgb(31 41 55)', 'rgb(17 24 39)', 'rgb(3 7 18)', 'black'] }],
        // Inne opcje
        
      ],
    },
  });


  // Dodaj event listener do śledzenia zmian w treści
  quill.on('text-change', function(delta, oldDelta, source) {
    // Zaktualizuj ukryte pole lub wykonaj inne operacje po zmianie treści
    updateHiddenField();
  });

  // Funkcja aktualizująca ukryte pole
  function updateHiddenField() {
    var editorContent = document.getElementById('text');
    editorContent.value = quill.root.innerHTML;
  }

</script>