<!-- Form untuk upload tugas -->
<div class="container mt-4" id="formTugas">
    <form action="/upload_tugas" method="post" enctype="multipart/form-data" class="col-6 col-sm-5 col-md-4">
        <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline">Tugas<span style="background-color: #71A430;"></span></h3>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Upload File</h4>
            <input class="col-12 rounded p-2 bg-second" type="file" name="tugas_file" accept=".pdf" id="tugas_file">
        </div>
        <input type="hidden" name="id_matkul" value="1">
        <button type="submit" class="col-4 bg-primary rounded p-1 mt-4 text-white">Add</button>
    </form>
</div>
