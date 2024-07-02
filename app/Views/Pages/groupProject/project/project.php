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
                        <a href="#" id="inputProjectLink">
                            <button><img src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                        </a>
                    <button><img src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="inputProjectLink">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>