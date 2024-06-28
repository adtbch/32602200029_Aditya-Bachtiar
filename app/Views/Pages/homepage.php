<?php echo $this->extend('Components/sidebar'); ?>
<?php echo $this->section('content'); ?>
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

<div class="profile-content">
    <!-- content Profile -->
    <div class="container d-flex justify-content-between gap-4">
        <div class="col-4">
            <div class="rounded bg-second p-4" style="border: 2px solid #71A430;">
                <div class="d-flex row gap-4 justify-content-center">
                    <img src="" style="width: 15vh; height: 15vh;" class="bg-white col-2 rounded-circle" alt="">
                    <div class="text-center text-primary">Moch.taufik febriansyah</div>
                    <button class="bg-primary rounded p-2 text-white col-4">Edit Foto</button>
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

<div class="home-content hidden">
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

<div class="mm-content hidden">
    <!--   content M&M -->  
    <div class="container row d-flex justify-content-center">
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/jadwalKuliah.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">Jadwal Kuliah</h5>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/jadwalUjian.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">Jadwal Ujian</h5>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/jadwalUjian.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">Belajar</h5>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/mataKuliah.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">Mata Kuliah</h5>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/tugas.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">Tugas</h5>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/timelineTugas.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">TimeLine Tugas</h5>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/todoList.jpg'); ?>" alt="Logo" class="img-fluid">
                <h5 class="p-2 fw-bold text-white">Todo List</h5>
            </div>
        </div>
    </div>
</div>
<div class="gp-content hidden">
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
    <a href="#">
        <h4 class="my-4 text-third position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h4>
    </a>
    <div>
  
    </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
