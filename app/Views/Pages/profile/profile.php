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