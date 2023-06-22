<div class="modal fade" style="padding:40px !important" id="create" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color:var(--background-color)">
            <div class="modalHeader p-2">
                <div class="row">
                    <div class="col-10 justify-content-center align-items-center d-flex">
                        <h4 class="fw-bold d-flex justify-content-center" style="padding-left:45px">Tambah Keunggulan</h4>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <!-- <div class="row">
                    <h5 class="fw-semid=bold d-flex justify-content-center sub-desc">Isi data berikut</h5>
                </div> -->
            </div>

            <div class="modal-body" style="padding:15px">
                <form action="create" method="post" class="" style="" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="judul" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="deskripsi" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input class="form-control" name="file" type="file" id="formFile">
                    </div>
                    <div class="submit d-flex justify-content-center align-items-center">
                        <button class="fw-bold text-white btn" role="button" style="background-color:var(--second-color); width:100%">tambahkan</button>
                    </div>
                </form>
            </div>

            <!-- <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
            </div> -->
        </div>
    </div>
</div>