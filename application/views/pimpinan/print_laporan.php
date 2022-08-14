<!DOCTYPE html>
<html>

<head>
	<title>LAPORAN</title>

	<!-- bootstrap=============> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- akhir bootstrap=============> -->
</head>

<body>
	<hr>
	<div width="100" height="100">
		</hr>
		<h4 align="center" size="2pt" face="arial">
			LAPORAN PENGANGKATAN KARYAWAN
	</div>
	</h4>
	<h4 align="center" size="2pt" face="arial">URBAN WARKOP MILENIAL</p>
		</div>
	</h4>

	<h6 align="center"><b>Jl. Komp. Boulevard, RT.004/RW.030, Pejuang, Kecamatan Medan Satria, Kota Bekasi, Jawa Barat 17131.</b></h6>
	<br>
	<hr width="100%" height="10px">
	</hr>
	<br>
	<p><b>A. Pendahuluan</b></p>
	Evaluasi kinerja karyawan merupakan suatu instrumen manajemen SDM untuk menilai pegawai sebagai dasar dalam kegiatan penilaian yang diberikan. Penilaian kinerja pegawai adalah suatu bentuk penilaian terhadap kinerja karyawan yang dinilai dengan standart kriteria yang ditentukan. Penilaian karyawan ini harus dipergunakan secara terus menerus untuk menilai kualitas pelayanan dan berusaha memperbaiki kinerja karyawan. Penilaian Karyawan Dilakukan karena ada beberapa alasan, diantaranya :

	<p></p>1. HRD melakukan penilaian karyawan yang akan diangkat menjadi karyawan tetap</p>
	<p>2. Evaluasi kinerja karyawan akan dapat memperbaiki prestasi kerja, bila dilakukan secara objektif</p>
	<p>3. Pada dasarnya karyawan ingin mengetahui bagaimana penampilan prestasi kinerjanya yang dinilai oleh atasan</p>
	<P></P>

	<p><b>B. Kegiatan</b></p>
	Penilaian Karyawan Periode <?= date('Y') ?>
	<P></P>

	<p><B>C. Laporan Kegiatan</B></p>
	Berdasarkan kebijakan HRD yang berlaku di Warkop Urban Milenial tentang penilaian pengangkatan karyawan kontrak menjadi tetap, maka telah dilakukan penilaian kinerja yang dinilai dari setiap kepala bagian.
	<P></P>

	<table class="table table-bordered" style="width: 100%;">
		<tr>
			<th> NO </th>
			<th> NAMA KARYAWAN </th>
			<th> DEPARTEMEN </th>
			<th> NILAI YI </th>
			<th> STATUS </th>
		</tr>
		<?php
		$no = 0;
		foreach ($record_print as $r) {

			$hasil = $this->Hasil_model->getHasil($r['nilai_yi']);
			if (!empty($hasil)) {
				$jumlah = $hasil['hasil'];
			} else {
				$jumlah = 'Hasil Tidak Tersedia';
			}
			$no++;
			// echo '
		?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $r['nama_karyawan'] ?></td>
				<td><?= $r['departemen'] ?></td>
				<td><?= $r['nilai_yi'] ?></td>
				<td><?= $jumlah ?></td>
			</tr>
		<?php
		}
		?>
	</table>
	<div class="row mt-5">
		<div class="col text-center">
			<p class="mb-5"><b>Dinilai</b></p>
			<p class="pt-5"><u>Kepala Bagian</u></p>
		</div>
		<div class="col text-center">
			<p class="mb-5"><b>Disetujui</b></p>
			<p class="pt-5"><u>HRD</u></p>
		</div>
		<div class="col-12 mt-5 text-center">
			<p class="mb-5"><b>Mengetahui</b></p>
			<p class="pt-5"><u>Pimpinan</u></p>
		</div>
	</div>

	<script type="text/javascript">
		window.print();
	</script>
</body>

</html>