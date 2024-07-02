  <div class="col-12 bg-second border-2 rounded-4 p-4" style="border: 2px solid #71A430; align-items: start; justify-content:space-between;">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="text-primary fw-semibold">CRUD Web</h5>
                    <div class="d-flex gap-2 align-items-center">
                        <a href="#" id="createTugas">
                            <div class="col-6">
                                <img src="<?=base_url("assets/images/pencil.svg")?>" alt="">
                            </div>
                        </a>
                        <input type="checkbox" class="col-8" style="height: 3vh;">
                    </div>
                </div> 
                <div class="text-primary fw-semibold">
                    <p>Tugas Matakuliah Web Programming</p>
                </div>
            <div>
                <div class="d-flex gap-4 mb-1 fw-semibold text-primary">
                    <div>26/06/2024</div>
                    <div>23:29</div>
                </div>
                <?php
            // Mendapatkan daftar file PDF dari folder 'assets/materi'
            $directory = './assets/tugas/';
            $files = scandir($directory);
            
            // Menampilkan setiap file PDF
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                    $file_path = base_url("assets/materi/{$file}");
                    ?>
                    <div class=" d-flex align-items-center">
                        <a href="<?= $file_path ?>" download id="tugasLink" style="background-color: transparent;">
                        <div class="d-flex align-items-end">
                            <img src="<?=base_url("assets/images/file2.svg")?>" alt="">
                            <div class="me-2 text-primary " style="font-size: small;"><?= htmlspecialchars($file) ?></div>
                        </div>   
                        </a>
                    </div>
                    <?php
                }
            }
        ?>
        </div>
        <div class="d-flex gap-4 mt-5">
            <button class="bg-second text-primary fw-semibold rounded-4 px-4 border-black">Delete</button>
            <button class="bg-primary text-white fw-semibold rounded-4 px-4">Download</button>
        </div>
    </div>
       <a href="#" id="createTugas">
        <h4 class="my-4 text-third position-relative fst-italic">+ New</h4>
    </a>