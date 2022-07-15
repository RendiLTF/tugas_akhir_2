<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>hrd/kelola_kategori">Kelola Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Tambah Kategori</li>
        </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800"></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info"> Form Tambah Kategori</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('hrd/tambah_kategori'); ?>" method="post">
                <div class="form-group row">
                    <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bobot_kategori" class="col-sm-2 col-form-label">Bobot</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bobot_kategori" name="bobot_kategori">
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