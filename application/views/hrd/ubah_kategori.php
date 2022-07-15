<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>hrd/kelola_kategori">Kelola Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Kategori</li>
        </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800"></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Form Ubah Kategori</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="<?= $tb_kategori['id_kategori']; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $tb_kategori['nama_kategori']; ?>" rows="3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bobot_kategori" class="col-sm-2 col-form-label">Bobot Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bobot_kategori" name="bobot_kategori" value="<?= $tb_kategori['bobot_kategori']; ?>" rows="3">
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Done</button>
                </div>
            </form>
        </div>
    </div>










</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->