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
    <!-- content Profile -->
    <div class="container d-flex justify-content-between gap-4">
        <div class="col-4">
            <div class="rounded bg-second p-4" style="border: 2px solid #71A430;">
                <div class="d-flex row gap-4 justify-content-center"> 
                    <img src="<?=base_url("assets/images/DSC_0357.jpg") ?>" style="border-color: ; object-position: center; object-fit: cover;width: 100px; height: 80px; border-radius: 50%;" alt="">
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
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="profileLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/jadwalKuliah.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">Jadwal Kuliah</h5>
                </div>
            </a>
        </div>
        <div class="col-4 p-2">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="profileLink">
                <div class="bg-primary rounded-4 shadow">
                    <img src="<?= base_url('assets/images/jadwalUjian.jpg'); ?>" alt="Logo" class="img-fluid">
                    <h5 class="p-2 fw-bold text-white">Jadwal Ujian</h5>
                </div>
            </a>
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
<!-- MM jawal Ujian -->
 <div class="jadwalUjian-content hidden">
    <div class="container row">
        <div class="col-12 col-md-7 bg-white border shadow rounded p-4">
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
     <a href="#">
        <h3 class="my-4 text-third position-relative fst-italic">+ New<p class="hidden">ju</p></h3>
    </a>
 </div>
<!-- MM jadwal Kuliah -->
 <div class="jadwalKuliah-content hidden">
    <div class="container row">
        <div class="col-12 col-md-7 bg-white border shadow rounded p-4">
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
     <a href="#">
        <h3 class="my-4 text-third position-relative fst-italic">+ New<p class="hidden">jk</p></h3>
    </a>
 </div>
 <!-- input jk -->
  <div class="inputjk-content hidden">
    <div class="col-6 col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline">Jadwal Mata Kuliah<span style="background-color: #71A430;"></span></h3>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Mata Kuliah</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="waktu">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Hari</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="hari">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Ruang</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="ruangan">
        </div>
        <button class="bg-primary rounded p-1 mt-4 text-white">
            Add
        </button>
    </div>
  </div>
  <!-- inputJu -->
  <div class="inputju-content hidden">
    <div class="col-6 col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline">Jadwal Mata Kuliah<span style="background-color: #71A430;"></span></h3>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Mata Kuliah Ujian</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam Ujian</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="waktu">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Hari Ujian</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="hari">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Ruang Ujian</h4>
            <input class="rounded p-2 bg-second" type="text" placeholder="ruangan">
        </div>
        <button class="bg-primary rounded p-1 mt-4 text-white">
            Add
        </button>
    </div>
  </div>
<!-- group project -->
<div class="gp-content hidden">
    <div class="container row">
        <div class="col-4">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="profileLink">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/project.jpg'); ?>" alt="Logo" class="rounded-top-4 img-fluid">
                    <span class="p-2 fw-bold d-none d-sm-block fs-5">Project</span>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="profileLink">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/todoList.png'); ?>" alt="Logo" class="rounded-top-4 img-fluid">
                    <span class="p-2 fw-bold d-none d-sm-block fs-5">TodoList</span>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="#" class="align-items-end align-text-bottom gap-2 text-decoration-none" id="profileLink">
            <div class="bg-primary rounded-4 shadow">
                <img src="<?= base_url('assets/images/project.jpg'); ?>" alt="Logo" class="rounded-top-4 img-fluid">
                    <span class="p-2 fw-bold d-none d-sm-block fs-5">Meeting</span>
                </div>
            </a>
        </div>
</div>
</div>
<!-- group project (project)-->
<div class="project-content hidden">
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
    <a href="#">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>
</div>
<!-- group project todolist -->
 <div class="tl-content hidden">
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
      <a href="#">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
 </div>
<!-- group project (meeting) -->
<div class="meeting-content hidden">
    <!--  -->
    <div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Group Project<span style="background-color: #71A430;"></span></h3>
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
    <a href="#">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>
</div>
<!-- calender -->
<div class="calender-content hidden">
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
