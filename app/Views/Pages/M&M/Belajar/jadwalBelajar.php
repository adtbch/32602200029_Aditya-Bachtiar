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
                        <a href="#" id="inputBelajarLink">
                            <button><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                        </a>
                    <button><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="inputBelajarLink">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>