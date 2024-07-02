<h3 class="text-primary fw-bold position-relative text-decoration-underline"><a href="#" id="mataKuliahLink" style="color: #71A430;">Mata Kuliah</a>>Cloud Computing <span style="background-color: #71A430;"></span></h3>
        <h3 class="my-4 text-primary fw-bold position-relative">Materi</h3>
<div class="bg-second rounded-4 border border-black p-2">
    <div class="row p-2">
        <?php
            // Mendapatkan daftar file PDF dari folder 'assets/materi'
            $directory = './assets/materi/';
            $files = scandir($directory);

            // Menampilkan setiap file PDF
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                    $file_path = base_url("assets/materi/{$file}");
                    ?>
                    <div class="col-12 d-flex align-items-center mb-2 justify-content-between p-2 border-bottom border-3 border-dark-emphasis">
                        <div class="d-flex align-items-end">
                            <img src="<?=base_url("assets/images/file.svg")?>" alt="">
                            <span class="me-2 text-primary fw-semibold"><?= htmlspecialchars($file) ?></span>
                        </div>
                        <a href="<?= $file_path ?>" download id="detailMataKuliahLink" style="background-color: transparent;">
                            <img src="<?=base_url("assets/images/unduh.svg")?>" alt="">
                        </a>
                        </div>
                    <?php
                }
            }
        ?>
        <div class="justify-content-end d-flex gap-4 mt-5">
         <button class="bg-second text-primary fw-semibold rounded-4 px-4 border-black">Reset</button>
            <a href="#" id="inputDetailMataKuliahLink">
                <button class="bg-primary text-white fw-semibold rounded-4 px-4">Add</button>
            </a>
        </div>
    </div>
</div>
        <h3 class="my-4 text-primary fw-bold position-relative">Tugas</h3>
<div class="bg-second rounded-4 border border-black p-2">
    <div class="row p-2">
        <?php
            // Mendapatkan daftar file PDF dari folder 'assets/materi'
            $directory = './assets/tugas/';
            $files = scandir($directory);

            // Menampilkan setiap file PDF
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                    $file_path = base_url("assets/materi/{$file}");
                    ?>
                    <div class="col-12 d-flex align-items-center mb-2 justify-content-between p-2 border-bottom border-3 border-dark-emphasis">
                        <div class="d-flex align-items-end">
                            <img src="<?=base_url("assets/images/file.svg")?>" alt="">
                            <span class="me-2 text-primary fw-semibold"><?= htmlspecialchars($file) ?></span>
                        </div>
                        <a href="<?= $file_path ?>" download id="detailMataKuliahLink" style="background-color: transparent;">
                            <img src="<?=base_url("assets/images/unduh.svg")?>" alt="">
                        </a>
                        </div>
                    <?php
                }
            }
        ?>
        <div class="justify-content-end d-flex gap-4 mt-5">
         <button class="bg-second text-primary fw-semibold rounded-4 px-4 border-black">Reset</button>
         <a href="#" id="inputDetailMataKuliahTugasLink">
             <button class="bg-primary text-white fw-semibold rounded-4 px-4">Add</button>
            </a>
        </div>
    </div>
</div>