<?php echo $this->extend('Components/sidebar'); ?>
<?php echo $this->section('content'); ?>
<style>
        .task-list, .calendar {
            padding: 1rem;
        }
        .task-list {
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .calendar2 {
            background-color: #e9ecef;
        }
        .task-item {
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
        }
        .calendar2 .month {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }
        .calendar2 table {
            width: 100%;
            table-layout: fixed;
        }
        .calendar2 th, .calendar2 td {
            text-align: center;
            padding: .5rem;
            box-sizing: border-box;
            border: 1px solid #dee2e6;
        }
        .calendar2 td.task-date {
            font-weight: bold;
            color: white;
        }
    </style>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .calendar {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .day, .day-name {
            box-sizing: border-box;
            width: calc(100% / 7);
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            cursor: pointer;
        }
        .day-name {
            font-weight: bold;
        }
        .today {
            background-color: #71A430;
            color: white;
            border-radius: 2vh;
        }
        .selected {
            background-color: #007bff;
            color: white;
            border-radius: 2vh;  
        }
        .calendar-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        .calendar-controls button {
            background-color: #71A430;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        #selectedDate {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 2px solid #71A430;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #EBF4F6;
            color: #71A430;
        }
        td {
            background-color: #EBF4F6;
            color: #71A430;
        }
        .action-icons {
            display: flex;
            gap: 10px;
        }
        .action-icons i {
            cursor: pointer;
        }
    </style>

<div class="profileLink-content content">
    <!-- content Profile -->
    <div class="container d-flex justify-content-between gap-4">
        <div class="col-4">
            <div class="rounded bg-second p-4" style="border: 2px solid #71A430;">
                <div class="d-flex row gap-4 justify-content-center"> 
                    <img src="" style="object-position: center; object-fit: cover;width: 100px; height: 80px; border-radius: 50%;" alt="">
                    <div class="text-center text-primary">Moch.taufik febriansyah</div>
                   <div class="col-5">
                       <label for="foto">
                           <input type="file" class="hidden" id="foto">
                           <button type="button" class="bg-primary rounded p-2 text-white " onclick="document.getElementById('foto').click();">Edit Foto</button>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-8 rounded">
            <div class="px-3">
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430; border-top-right-radius: 5px; border-top-left-radius: 5px;">
                    <label for="name" class="col-3 d-flex fw-bold text-primary">Nama:</label>
                    <div class="col-9">
                        <input type="text" id="name" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="username" class="col-3 d-flex fw-bold text-primary">User Nama:</label>
                    <div class="col-9">
                        <input type="text" id="username" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="password" class="col-3 d-flex fw-bold text-primary">Password:</label>
                    <div class="col-9">
                        <input type="text" id="password" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="email" class="col-3 d-flex fw-bold text-primary">Email:</label>
                    <div class="col-9">
                        <input type="text" id="email" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="semester" class="col-3 d-flex fw-bold text-primary">Semester:</label>
                    <div class="col-9">
                        <input type="text" id="semester" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="nim" class="col-3 d-flex fw-bold text-primary">Nim:</label>
                    <div class="col-9">
                        <input type="text" id="nim" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="prodi" class="col-3 d-flex fw-bold text-primary">Prodi:</label>
                    <div class="col-9">
                        <input type="text" id="prodi" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="instansi" class="col-3 d-flex fw-bold text-primary">Instansi:</label>
                    <div class="col-9">
                        <input type="text" id="instansi" class="form-control custom-input">
                    </div>
                </div>
                <div class="row d-flex align-items-end bg-second p-3" style="height: 20vh; border: 2px solid #71A430; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;">
                    <div class="col-7 d-flex justify-content-between">
                        <button class="col-5 p-1 text-white fw-bold bg-primary rounded edit">edit</button>
                        <button class="col-5 p-1 text-white fw-bold bg-primary rounded edit">save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homeLink-content content hidden">
    <!-- content Home-->
    <div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-2 text-primary fw-bold position-relative text-decoration-underline">Priority List<span  style="background-color: #71A430;"></span></h3>
        <div class="my-1 row d-flex gap-2">
            <div class="col-12 col-md-6 bg-primary rounded-4 p-4 d-flex" style="align-items: start; justify-content:space-between; height: 25vh;">
                <h5 class="text-white">Codingan Program Aplikasi</h5>
                <input type="checkbox" style="width: 10%; height: 3vh;">
            </div>
            <div class="col-12 col-md-6 bg-primary rounded-4 p-4 d-flex" style="align-items: start; justify-content:space-between; height: 25vh;">
                <h5 class="text-white">Codingan Program Aplikasi</h5>
                <input type="checkbox" style="width: 10%; height: 3vh;">
            </div>
            <!-- card 2 -->
            <div class="col-12 col-md-6 bg-second rounded-4 p-4" style="align-items: start; justify-content:space-between; height: 25vh;">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="text-primary">CRUD Web</h5>
                    <input type="checkbox" style="width: 10%; height: 3vh;">
                </div> 
                <div class="text-primary">
                    <p>Tugas Matakuliah Web Programming</p>
                </div>
                <div class="d-flex gap-2 text-primary">
                    <p>26/06/2024</p>
                    <p>23:29</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="managementLink-content content hidden">
    <!--   content M&M -->  
    <div class="container row d-flex justify-content-center">
        <div class="col-4 p-2">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="jadwalKuliahLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/jadwalKuliah.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">Jadwal Kuliah</h5>
                </div>
            </a>
        </div>
        <div class="col-4 p-2">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="jadwalUjianLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/jadwalUjian.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">Jadwal Ujian</h5>
                </div>
            </a>
        </div>
        <div class="col-4 p-2">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="belajarLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/jadwalUjian.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">Belajar</h5>
                </div>
            </a>
        </div>
        <div class="col-4 p-2">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="mataKuliahLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/mataKuliah.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">Mata Kuliah</h5>
                </div>
            </a>
        </div>
        <div class="col-4 p-2">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="tugasLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/tugas.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">Tugas</h5>
                </div>
            </a>
        </div>
        <div class="col-4 p-2">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="timeLineLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/timelineTugas.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">TimeLine Tugas</h5>
                </div>
            </a>
        </div>
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/todoList.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">Todo List</h5>
            </div>
        </div>
    </div>
</div>
<!-- MM jawal Ujian -->
 <div class="jadwalUjianLink-content content hidden">
    <div class="container row d-flex gap-2">
       <div style="border: 2px solid #71A430;" class="col-12 col-md-6 bg-white shadow rounded-4 p-4">
            <div class=" d-flex justify-content-between">
                <h5 class="fw-bold text-primary">Senin</h5>
                <div>
                    <button><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                    <button><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                </div>
            </div> 
            <div class="d-flex row">
                <div class="col-4">
                        <p class="bg-primary text-white p-1 text-center">09.00</p>
                        <p class="bg-primary text-white p-1 text-center">09.00</p>
                </div>           
                <div class="col-8">
                    <div>
                        <div class="text-primary fs-3 fw-bold">Web Programming</div>
                        <div class="text-primary">Ruang 304</div>
                    </div>
                </div>           
            </div>
        </div>
    </div>
     <a href="#" id="createJadwalUjian">
        <h3 class="my-4 text-third position-relative fst-italic">+ New</h3>
    </a>
 </div>
 <!-- MM jadwal Belajar -->
<div class="belajarLink-content content hidden">
    <!--  -->
    <div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Belajar<span style="background-color: #71A430;"></span></h3>
         <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Activity</th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meeting as $project): ?>
                <tr>
                    <td><?= $project['date']; ?></td>
                    <td><?= $project['time']; ?></td>
                    <td><?= $project['activity']; ?></td>
                    <td><?= $project['notes']; ?></td>
                    <td>
                    <button><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                    <button><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="createJadwalBelajar">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>
</div>  
<!-- MM Mata Kuliah -->
 <div class="mataKuliahLink-content content hidden row container">
    <div class="col-10">
        <a href="#" id="detailMataKuliahLink">
            <div class="row d-flex align-items-center">
                <div class="col-4">
                    <img src="<?=base_url("assets/images/kelas.svg")?>" class="img-fluid">
                </div>
                <div class="col-5">
                    <h5 style="color: gray;" class="fw-bold d-flex gap-4">
                        Cloud Computing
                        <div>
                            <button style="background-color: transparent; border: none;"><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                            <button style="background-color: transparent; border: none;"><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                        </div>
                    </h5>
                    <div style="color: gray;">semester</div>
                </div>
            </div>
        </a > 
    </div>
    <a href="#" id="createMataKuliah">
        <h4 class="my-4 text-third position-relative fst-italic">+ New</h4>
    </a>
 </div>
 <!-- detail Mata Kuliah -->
  <div class="detailMataKuliahLink-content content hidden container">
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
            <button class="bg-primary text-white fw-semibold rounded-4 px-4">Add</button>
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
            <button class="bg-primary text-white fw-semibold rounded-4 px-4">Add</button>
        </div>
    </div>
</div>
</div>
<!-- MM tugas -->
 <div class="tugasLink-content content container hidden">
    <div class="col-12 bg-second border-2 rounded-4 p-4" style="border: 2px solid #71A430; align-items: start; justify-content:space-between;">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="text-primary fw-semibold">CRUD Web</h5>
                    <div class="d-flex gap-2 align-items-center">
                        <img src="<?=base_url("assets/images/pencil.svg")?>" class="col-6" alt="">
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
</div>
<div class="createTugas-content content hidden container ">
    <h3 class="text-primary fw-bold position-relative text-decoration-underline">Tugas<span style="background-color: #71A430;"></span></h3>
    <div class="d-flex row justify-content-center">
        <div class="col-6 col-sm-5 col-md-6">
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Nama Tugas</h5>
                <input class="col-12 rounded p-2 bg-second" type="text">
            </div>
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Deskripsi Tugas</h5>
                <textarea class="col-12 rounded p-2 bg-second" name=""></textarea>
            </div>
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Tenggat Waktu</h5>
                <input class="col-12 rounded p-2 bg-second" type="text" >
            </div>
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Upload File</h5>
                <input class="col-12 rounded p-2 bg-second" type="file" >
            </div>
            <div class="mt-5 d-flex gap-3">
                <button class="col-3 bg-second border-2 border-black rounded text-primary">
                    Reset
                </button>
                <button class="col-3 bg-primary rounded p-1 text-white">
                    Add
                </button>
            </div>
        </div>
    </div>
    </div>
    <!-- MM Timeline Tugas -->
     <div class="container timeLineLink-content content hidden">
       <?php
        function random_color() {
            return '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        // Data tugas dan warna
        $tugas = [
            ['judul' => 'Tugas 1', 'deskripsi' => 'Deskripsi tugas 1', 'tanggal_deadline' => '2024-06-10'],
            ['judul' => 'Tugas 2', 'deskripsi' => 'Deskripsi tugas 2', 'tanggal_deadline' => '2024-06-15'],
            ['judul' => 'Tugas 3', 'deskripsi' => 'Deskripsi tugas 3', 'tanggal_deadline' => '2024-06-20'],
        ];

        // Generate warna random untuk setiap tugas
        $colors = [];
        foreach ($tugas as $item) {
            $colors[] = random_color();
        }

        // Pemrosesan bulan yang dipilih
        $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : date('m');
        $tahun = date('Y');
        $jumlah_hari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
        $tanggal_tugas = array_column($tugas, 'tanggal_deadline');
        $days_of_week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        // Generate array untuk menentukan warna untuk setiap tanggal tugas
        $date_color_map = [];
        foreach ($tanggal_tugas as $index => $tanggal) {
            $date_color_map[$tanggal] = $colors[$index];
        }
    ?>
    <div class="container-fluid">
        <h3 class="mb-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">TimeLine Tugas<span style="background-color: #71A430;"></span></h3>
        <div class="row">
            <div class="col-md-4 task-list">
                <div class="gap-2 d-flex align items-center">
                    <h2>Tugas</h2> 
                        <button>Create</button>
                    </div>
                </div>
                <?php foreach ($tugas as $index => $item): ?>
                    <div class="task-item" style="border-left: 5px solid <?= $colors[$index] ?>;">
                        <h4><?= htmlspecialchars($item['judul']) ?></h4>
                        <div><?= htmlspecialchars($item['deskripsi']) ?></div>
                        <div class="text-muted">Deadline: <?= htmlspecialchars($item['tanggal_deadline']) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-8">
                <div class="calendar2">

                    <div class="month"><?= date('F', mktime(0, 0, 0, $bulan, 1, $tahun)) . ' ' . $tahun ?></div>
                    <table>
                        <thead>
                            <tr>
                                <?php foreach ($days_of_week as $day): ?>
                                    <th><?= $day ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            // Calculate the first day of the month
                            $first_day_of_month = date('w', mktime(0, 0, 0, $bulan, 1, $tahun));
                            // Print empty cells until the first day of the month
                            for ($i = 0; $i < $first_day_of_month; $i++): ?>
                                <td></td>
                                <?php endfor; ?>
                                
                                <?php for ($day = 1; $day <= $jumlah_hari; $day++):
                                $current_date = $tahun . '-' . str_pad($bulan, 2, '0', STR_PAD_LEFT) . '-' . str_pad($day, 2, '0', STR_PAD_LEFT);
                                $is_task_date = in_array($current_date, $tanggal_tugas);
                                $task_color_class = isset($date_color_map[$current_date]) ? 'task-date' : '';
                                ?>
                                <td class="<?= $task_color_class ?>" style="background-color: <?= $date_color_map[$current_date] ?? '' ?>">
                                    <?= $day ?>
                                </td>
                                <?php
                                // Move to the next row at the end of the week
                                if (($day + $first_day_of_month) % 7 == 0): ?>
                                    </tr><tr>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php
                            // Print empty cells at the end of the last row if needed
                            $remaining_days = (7 - (($jumlah_hari + $first_day_of_month) % 7)) % 7;
                            for ($i = 0; $i < $remaining_days; $i++): ?>
                                <td></td>
                                <?php endfor; ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- MM jadwal Kuliah -->
<div class="jadwalKuliahLink-content content hidden">
    <div class="container row d-flex gap-2">
        <div style="border: 2px solid #71A430;" class="col-12 col-md-6 bg-white shadow rounded-4 p-4">
            <div class=" d-flex justify-content-between">
                <h5 class="fw-bold text-primary">Senin</h5>
                <div>
                    <button><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                    <button><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                </div>
            </div> 
            <div class="d-flex row">
                <div class="col-4">
                        <p class="bg-primary text-white p-1 text-center">09.00</p>
                        <p class="bg-primary text-white p-1 text-center">09.00</p>
                </div>           
                <div class="col-8">
                    <div>
                        <div class="text-primary fs-3 fw-bold">Web Programming</div>
                        <div class="text-primary">Ruang 304</div>
                    </div>
                </div>           
            </div>
        </div>
    </div>
     <a href="#" id="createJadwalKuliah">
        <h3 class="my-4 text-third position-relative fst-italic">+ New</h3>
    </a>
 </div>
 <!-- input jk -->
  <div class="createJadwalKuliah-content content hidden container">
    <div class="col-6 col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline">Jadwal Mata Kuliah<span style="background-color: #71A430;"></span></h3>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Mata Kuliah</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" placeholder="mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" placeholder="waktu">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Hari</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" placeholder="hari">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Ruang</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" placeholder="ruangan">
        </div>
        <button class="col-4 bg-primary rounded p-1 mt-4 text-white">
            Add
        </button>
    </div>
  </div>
  <!-- inputJu -->
  <div class="createJadwalUjian-content content container hidden">
    <div class="col-6 col-sm-5 col-md-6">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline">Jadwal Mata Kuliah<span style="background-color: #71A430;"></span></h3>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Mata Kuliah Ujian</h4>
            <input class="col-8 rounded p-2 bg-second" type="text" placeholder="mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam Ujian</h4>
            <input class="col-8 rounded p-2 bg-second" type="text" placeholder="waktu">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Hari Ujian</h4>
            <input class="col-8 rounded p-2 bg-second" type="text" placeholder="hari">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Ruang Ujian</h4>
            <input class="col-8 rounded p-2 bg-second" type="text" placeholder="ruangan">
        </div>
        <button class="col-4 bg-primary rounded p-1 mt-4 text-white">
            Add
        </button>
    </div>
  </div>
<!-- group project -->
<div class="groupLink-content content hidden">
    <div class="container row">
        <div class="col-4">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="projectLink">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/project.jpg'); ?>" alt="Logo" class="rounded-top-4 img-fluid">
                    <span class="p-2 fw-bold d-none d-sm-block fs-5">Project</span>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="todoListLink">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/todoList.png'); ?>" alt="Logo" class="rounded-top-4 img-fluid">
                    <span class="p-2 fw-bold d-none d-sm-block fs-5">TodoList</span>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="#" class="align-items-end align-text-bottom gap-2 text-decoration-none" id="meetingLink">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/project.jpg'); ?>" alt="Logo" class="rounded-top-4 img-fluid">
                    <span class="p-2 fw-bold d-none d-sm-block fs-5">Meeting</span>
                </div>
            </a>
        </div>
</div>
</div>
<!-- group project (project)-->
<div class="projectLink-content content hidden">
    <!--  -->
    <div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Group Project<span style="background-color: #71A430;"></span></h3>
         <table>
        <thead>
            <tr>
                <th>Status</th>
                <th>Project</th>
                <th>Deadline</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td><p class="bg-primary col-8 p-1 rounded text-white text-center fw-bold"><?= $project['status']; ?></p></td>
                    <td><?= $project['project']; ?></td>
                    <td><?= $project['deadline']; ?></td>
                    <td>
                    <button><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                    <button><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="createGroupProject">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>
</div>
<!-- group project todolist -->
 <div class="todoListLink-content content hidden">
    <div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-2 text-primary fw-bold position-relative text-decoration-underline">TodoList<span  style="background-color: #71A430;"></span></h3>
        <div class="my-1 row d-flex gap-2">
            <div class="col-12 col-md-6 bg-primary rounded-4 p-4 " style="align-items: start; justify-content:space-between; height: 25vh;">
                <div class="d-flex w-100 justify-content-between">
                      <h5 class="text-white">Menyelesaikan tugas docker</h5>
                      <input type="checkbox" style="width: 10%; height: 3vh;">
                </div> 
                <div class="d-flex mt-5 gap-2 text-primary justify-content-end ">
                    <img src="<?= base_url("assets/images/editing.svg") ?>" style="height: 4vh;" class="img-fluid">
                    <img src="<?= base_url("assets/images/hapus.svg") ?>" style="height: 4vh;" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6 bg-primary rounded-4 p-4 " style="align-items: start; justify-content:space-between; height: 25vh;">
                <div class="d-flex w-100 justify-content-between">
                      <h5 class="text-white">Rapat Organisasi</h5>
                      <input type="checkbox" style="width: 10%; height: 3vh;">
                </div> 
                <div class="d-flex mt-5 gap-2 text-primary justify-content-end ">
                    <img src="<?= base_url("assets/images/editing.svg") ?>" style="height: 4vh;" class="img-fluid">
                    <img src="<?= base_url("assets/images/hapus.svg") ?>" style="height: 4vh;" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
      <a href="#" id="createTodoList">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
 </div>
<!-- group project (meeting) -->
<div class="meetingLink-content content hidden">
    <!--  -->
    <div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Meeting<span style="background-color: #71A430;"></span></h3>
         <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Activity</th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meeting as $project): ?>
                <tr>
                    <td><?= $project['date']; ?></td>
                    <td><?= $project['time']; ?></td>
                    <td><?= $project['activity']; ?></td>
                    <td><?= $project['notes']; ?></td>
                    <td>
                    <button><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                    <button><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="createMeeting">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>
</div>
<!-- calender -->
<div class="calendarLink-content content hidden">
     <div class="container my-5 text-center border shadow">
        <div class="calendar-controls">
            <button id="prevMonth">&lt;</button>
            <h2 id="monthYear"></h2>
            <button id="nextMonth">&gt;</button>
        </div>
        <div id="calendar" class="calendar"></div>
        <div id="selectedDate"></div>
    </div>
</div>

    <script>
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

        let selectedDateElement = null;
        let currentYear = new Date().getFullYear();
        let currentMonth = new Date().getMonth();

        function createCalendar(year, month) {
            const calendar = document.getElementById('calendar');
            const monthYear = document.getElementById('monthYear');
            calendar.innerHTML = '';

            const today = new Date();
            const currentDay = today.getDate();
            const todayMonth = today.getMonth();
            const todayYear = today.getFullYear();

            monthYear.textContent = `${monthNames[month]} ${year}`;

            // Add day names
            dayNames.forEach(day => {
                const dayNameCell = document.createElement('div');
                dayNameCell.classList.add('day-name');
                dayNameCell.textContent = day;
                calendar.appendChild(dayNameCell);
            });

            const firstDayOfMonth = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDayOfMonth; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.classList.add('day');
                calendar.appendChild(emptyCell);
            }

            for (let i = 1; i <= daysInMonth; i++) {
                const dayCell = document.createElement('div');
                dayCell.classList.add('day');
                if (i === currentDay && month === todayMonth && year === todayYear) {
                    dayCell.classList.add('today');
                }
                dayCell.textContent = i;
                dayCell.addEventListener('click', () => selectDate(dayCell, year, month, i));
                calendar.appendChild(dayCell);
            }
        }

        function selectDate(element, year, month, day) {
            if (selectedDateElement) {
                selectedDateElement.classList.remove('selected');
            }
            element.classList.add('selected');
            selectedDateElement = element;
            const selectedDate = new Date(year, month, day);
            const dayName = dayNames[selectedDate.getDay()];
            document.getElementById('selectedDate').textContent = `Selected Date: ${dayName}, ${monthNames[month]} ${day}, ${year}`;
        }

        function navigateMonth(offset) {
            currentMonth += offset;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            } else if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            createCalendar(currentYear, currentMonth);
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('prevMonth').addEventListener('click', function () {
                navigateMonth(-1);
            });

            document.getElementById('nextMonth').addEventListener('click', function () {
                navigateMonth(1);
            });

            createCalendar(currentYear, currentMonth);
        });
    </script>
<?php echo $this->endSection(); ?>
