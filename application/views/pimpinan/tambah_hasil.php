<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url("pimpinan/kelola_hasil"); ?>">Kelola Status Karyawan</a>
            </li>
            <li class=" breadcrumb-item active" aria-current="page">Form Tambah Status</li>
        </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800"></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info"> Form Tambah Status</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('pimpinan/tambah_hasil'); ?>" method="post">
                <div class="form-group row">
                    <label for="hasil" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hasil" name="hasil" placeholder="Status">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="batas_nilai_yi" class="col-sm-2 col-form-label">Batas Nilai Yi</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="min_nilai_yi" name="min_nilai_yi" placeholder="Min">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="max_nilai_yi" name="max_nilai_yi" placeholder="Max">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" hidden>
                        <input type="id_user" class="form-control" id="id_user" name="id_user" value="<?= $user['id']; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Done</button>
                    </div>
                </div>
            </form>
        </div>
    </div>







</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->