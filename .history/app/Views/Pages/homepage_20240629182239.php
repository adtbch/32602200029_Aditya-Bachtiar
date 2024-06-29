<?php echo $this->extend('Components/sidebar'); ?>
<?php echo $this->section('content'); ?>

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

<div class="profile-content">
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
                <?php 
                $fields = ['Nama' => 'name', 'User Nama' => 'username', 'Password' => 'password', 'Email' => 'email', 'Semester' => 'semester', 'Nim' => 'nim', 'Prodi' => 'prodi', 'Instansi' => 'instansi'];
                foreach ($fields as $label => $id): ?>
                    <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                        <label for="<?= $id ?>" class="col-3 d-flex fw-bold text-primary"><?= $label ?>:</label>
                        <div class="col-9">
                            <input type="text" id="<?= $id ?>" class="form-control custom-input">
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="row d-flex align-items-end bg-second p-3" style="height: 20vh; border: 2px solid #71A430; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;">
                    <div class="col-7 d-flex justify-content-between">
                        <button class="col-5 p-1 text-white fw-bold bg-primary rounded edit">Edit</button>
                        <button class="col-5 p-1 text-white fw-bold bg-primary rounded edit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-content hidden">
    <div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-2 text-primary fw-bold position-relative text-decoration-underline">Priority List<span  style="background-color: #71A430;"></span></h3>
        <div class="my-1 row d-flex gap-2">
            <?php for ($i = 0; $i < 2; $i++): ?>
                <div class="col-12 col-md-6 bg-primary rounded-4 p-4 d-flex" style="align-items: start; justify-content:space-between; height: 25vh;">
                    <h5 class="text-white">Codingan Program Aplikasi</h5>
                    <input type="checkbox" style="width: 10%; height: 3vh;">
                </div>
            <?php endfor; ?>
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
    <div class="container row d-flex justify-content-center">
        <?php 
        $menuItems = [
            'jadwalKuliah' => 'Jadwal Kuliah',
            'jadwalUjian' => 'Jadwal Ujian',
            'belajar' => 'Belajar',
            'mataKuliah' => 'Mata Kuliah',
            'tugas' => 'Tugas',
            'timelineTugas' => 'TimeLine Tugas',
            'todoList' => 'Todo List'
        ];
        foreach ($menuItems as $image => $title): ?>
            <div class="col-4 p-2">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/'.$image.'.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white"><?= $title ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="jadwalKuliah-content hidden">
    <div class="container row">
        <div class="col-12 col-md-7 bg-white border shadow rounded p-4">
            <div class="d-flex justify-content-between">
                <h5 class="fw-bold text-primary">Senin</h5>
                <div>
                    <button><img src="<?= base_url('assets/images/pencil.svg ') ?>" alt=""></button>
                    <button><img src="<?= base_url('assets/images/sampah.svg ') ?>" alt=""></button>
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
    <a href="#">
        <h3 class="my-4 text-third position-relative fst-italic">+ New<p class="hidden">jk</p></h3>
    </a>
</div>

<div class="inputjk-content hidden">
    <div class="col-6 col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline">Jadwal Mata Kuliah<span style="background-color: #71A430;"></span></h3>
        <?php 
        $fields = ['Mata Kuliah', 'Jam', 'Hari', 'Ruang'];
        foreach ($fields as $placeholder): ?>
            <div>
                <h4 class="my-2 text-primary fw-bold position-relative"><?= $placeholder ?></h4>
                <input class="rounded p-2 bg-second" type="text" placeholder="<?= strtolower($placeholder) ?>">
            </div>
        <?php endforeach; ?>
        <button class="bg-primary rounded p-1 text-white">Add</button>
    </div>
</div>

<div class="gp-content hidden

">
    <div class="container row">
        <div class="col-12">
            <div class="calendar-controls">
                <button id="prevMonth">&lt;</button>
                <div id="monthYear"></div>
                <button id="nextMonth">&gt;</button>
            </div>
            <div class="calendar">
                <div class="day-name">Sun</div>
                <div class="day-name">Mon</div>
                <div class="day-name">Tue</div>
                <div class="day-name">Wed</div>
                <div class="day-name">Thu</div>
                <div class="day-name">Fri</div>
                <div class="day-name">Sat</div>
            </div>
            <div id="selectedDate"></div>
        </div>
    </div>
    <a href="#">
        <h3 class="my-4 text-third position-relative fst-italic">+ New<p class="hidden">gp</p></h3>
    </a>
</div>

<div class="inputgp-content hidden">
    <div class="col-6 col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline">Group Proyek<span style="background-color: #71A430;"></span></h3>
        <?php 
        $fields = ['Nama Proyek', 'Deskripsi', 'Tanggal Mulai', 'Tanggal Selesai', 'Status', 'Prioritas'];
        foreach ($fields as $placeholder): ?>
            <div>
                <h4 class="my-2 text-primary fw-bold position-relative"><?= $placeholder ?></h4>
                <input class="rounded p-2 bg-second" type="text" placeholder="<?= strtolower($placeholder) ?>">
            </div>
        <?php endforeach; ?>
        <button class="bg-primary rounded p-1 text-white">Add</button>
    </div>
</div>

<div class="ml-content hidden">
    <div class="container row">
        <div class="col-12 bg-white border shadow rounded p-4">
            <h5 class="fw-bold text-primary">Semester 4</h5>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>Nama Dosen</th>
                            <th>SKS</th>
                            <th>Ruangan</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Web Programming</td>
                            <td>Dr. John Doe</td>
                            <td>3</td>
                            <td>304</td>
                            <td>Senin</td>
                            <td>09:00 - 12:00</td>
                            <td>
                                <div class="action-icons">
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash"></i>
                                </div>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="#">
        <h3 class="my-4 text-third position-relative fst-italic">+ New<p class="hidden">ml</p></h3>
    </a>
</div>

<div class="inputml-content hidden">
    <div class="col-6 col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline">Mata Kuliah<span style="background-color: #71A430;"></span></h3>
        <?php 
        $fields = ['Mata Kuliah', 'Nama Dosen', 'SKS', 'Ruangan', 'Hari', 'Waktu'];
        foreach ($fields as $placeholder): ?>
            <div>
                <h4 class="my-2 text-primary fw-bold position-relative"><?= $placeholder ?></h4>
                <input class="rounded p-2 bg-second" type="text" placeholder="<?= strtolower($placeholder) ?>">
            </div>
        <?php endforeach; ?>
        <button class="bg-primary rounded p-1 text-white">Add</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendar = document.querySelector('.calendar');
    const monthYear = document.getElementById('monthYear');
    const prevMonthBtn = document.getElementById('prevMonth');
    const nextMonthBtn = document.getElementById('nextMonth');
    const selectedDateElem = document.getElementById('selectedDate');
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    let selectedDate = today;

    function renderCalendar(month, year) {
        calendar.innerHTML = '';
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const startDay = new Date(year, month, 1).getDay();

        monthYear.textContent = `${monthNames[month]} ${year}`;

        for (let i = 0; i < startDay; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.classList.add('day');
            calendar.appendChild(emptyCell);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const dayCell = document.createElement('div');
            dayCell.classList.add('day');
            dayCell.textContent = i;

            if (i === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                dayCell.classList.add('today');
            }

            dayCell.addEventListener('click', function() {
                selectedDate = new Date(year, month, i);
                selectedDateElem.textContent = `Selected Date: ${selectedDate.toDateString()}`;
                document.querySelectorAll('.day').forEach(cell => cell.classList.remove('selected'));
                dayCell.classList.add('selected');
            });

            calendar.appendChild(dayCell);
        }
    }

    prevMonthBtn.addEventListener('click', function() {
        if (currentMonth === 0) {
            currentMonth = 11;
            currentYear--;
        } else {
            currentMonth--;
        }
        renderCalendar(currentMonth, currentYear);
    });

    nextMonthBtn.addEventListener('click', function() {
        if (currentMonth === 11) {
            currentMonth = 0;
            currentYear++;
        } else {
            currentMonth++;
        }
        renderCalendar(currentMonth, currentYear);
    });

    renderCalendar(currentMonth, currentYear);
});
</script>

<?php echo $this->endSection(); ?>