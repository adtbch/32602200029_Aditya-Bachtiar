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
        <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline">TimeLine Tugas<span style="background-color: #71A430;"></span></h3>
        <div class="row">
            <div class="col-md-4 task-list">
                <div class="gap-2 d-flex justify-content-between py-2 align items-center">
                    <h2>Tugas</h2>
                    <a href="#" id="inputTimelineTugas">
                        <button class="bg-primary rounded text-white">Create</button>
                    </a> 
                </div>
                <?php foreach ($tugas as $index => $item): ?>
                    <div class="task-item" style="border-left: 5px solid <?= $colors[$index] ?>;">
                        <h4 class="d-flex justify-content-between"><?= htmlspecialchars($item['judul']) ?>
                          <div>
                            <a href="#" id="inputTimelineTugas">
                                <button style="background-color: transparent; border: none;"><img style="height: 3vh;" src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                            </a>
                            <button style="background-color: transparent; border: none;"><img style="height: 3vh;" src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                        </div>
                        </h4>
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