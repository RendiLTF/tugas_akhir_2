<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Kelola Kategori</li>
        </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800"></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Kategori Penilaian</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-primary btn-sm rounded-0 mb-3" data-toggle="tooltip" data-placement="top" title="Input" href="<?= base_url('hrd/tambah_kategori'); ?> ">
                <i class="fa fa-edit"></i>
            </a>

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tb_kategori as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['id_kategori']; ?></td>
                            <td><?= $p['nama_kategori']; ?></td>
                            <td><?= $p['bobot_kategori']; ?></td>
                            <td>
                                <a class="btn btn-success btn-sm " type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url(); ?>hrd/ubah_kategori/<?php echo $p['id_kategori'] ?> "><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm tombol-hapus-kategori" type="button" data-toggle="tooltip" data-placement="top" title="Delete" href="<?= base_url(); ?>hrd/delete_kategori/<?php echo $p['id_kategori'] ?> "><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>











</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->