<?php
        if (isset($_GET['kode_kelas'])) {
            // ambil data get dari form
            $kode_kelas = $_GET['kode_kelas'];
            // perintah query untuk menampilkan data dari tabel siswa berdasarkan kode_kelas
            $query = mysqli_query($db, "SELECT * FROM tbl_kelas WHERE kode_kelas='$kode_kelas'")
                or die('Query Error : ' . mysqli_error($db));
            $data = mysqli_fetch_assoc($query);
            // buat variabel untuk menampung data
            $kode_kelas = $data['kode_kelas'];
            $nama_kelas = $data['nama_kelas'];
            $wali_kelas = $data['wali_kelas'];
            $tingkat = $data['tingkat'];
            $semester = $data['semester'];
            $tahun = $data['tahun'];
        }
    ?>
    <div class="row">
        <div class="col-md-12">
			<div class="alert alert-info" role="alert">
  				<i class="fas fa-edit"></i> Input Wali Kelas
			</div>

			<div class="card">
			  	<div class="card-body">
			  		<!-- form tambah Mata Pelajaran -->
			    	<form class="needs-validation" action="kelaswalitambahproses.php" method="post" enctype="multipart/form-data" novalidate>
					  	<div class="row">
					    	<div class="col">
                            <table class="table table-bordered">
                                <thead>
                                    <input type = "hidden" name="kode_kelas" value = " <?php echo $kode_kelas; ?>">
                                    <tr>
                                        <td class="alert alert-info">Kode Kelas</td>
                                        <td>: <?php echo $kode_kelas; ?></td>
                                        <td class="alert alert-info">Nama Kelas</td>
                                        <td>: <?php echo $nama_kelas; ?></td>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td class="alert alert-info">Wali Kelas</td>
                                        <td>: <?php echo $wali_kelas; ?></td>
                                        <td class="alert alert-info">Tahun Ajaran</td>
                                        <td>: <?php echo $tahun; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="alert alert-info">Tingkat</td>
                                        <td>: <?php echo $tingkat; ?></td>
                                        <td class="alert alert-info">Semester</td>
                                        <td>: <?php echo $semester; ?></td>
                                    </tr>
                            </table>


							</div>
					  	</div>

					  	<div class="my-md-4 pt-md-1 border-top"> </div>

						<div class="form-group col-md-12 right">
			                <input type="submit" class="btn btn-info btn-submit mr-2" name="simpan" value="Simpan">
                            <a href="index.php?page=mapel" class="btn btn-secondary btn-reset"> Batal </a>
				  		</div>
					
			  	</div>

				  <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Foto</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>pilih</th>
                </tr>
            </thead>

            <tbody>
            <?php
            // Pagination --------------------------------------------------------------------------------------------
            // jumlah data yang ditampilkan setiap halaman
            $batas = 5;
            // jika dilakukan pencarian data
            if (isset($cari)) {
                // perintah query untuk menampilkan jumlah data siswa dari database berdasarkan nis atau nama yang sesuai dengan kata kunci pencarian
                $query_jumlah = mysqli_query($db, "SELECT count(nis) as jumlah FROM tbl_siswa WHERE nis LIKE '%$cari%' OR nama LIKE '%$cari%'")
                                                   or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($db));
            } 
            // jika tidak dilakukan pencarian data
            else {
                // perintah query untuk menampilkan jumlah data siswa dari database
                $query_jumlah = mysqli_query($db, "SELECT count(nis) as jumlah FROM tbl_siswa")
                                                   or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($db));
            }
            // tampilkan jumlah data
            $data_jumlah = mysqli_fetch_assoc($query_jumlah);
            $jumlah      = $data_jumlah['jumlah'];
            $halaman     = ceil($jumlah / $batas);
            $page        = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
            $mulai       = ($page - 1) * $batas;
            // ------------------------------------------------------------------------------------------------------
            // nomor urut tabel
            $no = $mulai + 1;
            // jika dilakukan pencarian data
            if (isset($cari)) {
                // perintah query untuk menampilkan data siswa dari database berdasarkan nis atau nama yang sesuai dengan kata kunci pencarian
                // data yang ditampilkan mulai = $mulai sampai dengan batas = $batas
                $query = mysqli_query($db, "SELECT * FROM tbl_siswa WHERE nis LIKE '%$cari%' OR nama LIKE '%$cari%'  ORDER BY nis DESC LIMIT $mulai, $batas") 
                                            or die('Ada kesalahan pada query siswa: '.mysqli_error($db));
            } 
            // jika tidak dilakukan pencarian data
            else {
                // perintah query untuk menampilkan data siswa dari database
                // data yang ditampilkan mulai = $mulai sampai dengan batas = $batas
                $query = mysqli_query($db, "SELECT * FROM tbl_siswa ORDER BY nis DESC LIMIT $mulai, $batas")
                                            or die('Ada kesalahan pada query siswa: '.mysqli_error($db));
            }
            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td width="30" class="center"><?php echo $no; ?></td>
                    <td width="45" class="center"><img class="foto-thumbnail" src='foto/<?php echo $data['foto']; ?>' alt="Foto Siswa"></td>
                    <td width="80" class="center"><?php echo $data['nis']; ?></td>
                    <td width="180"><?php echo $data['nama']; ?></td>
                    <td width="180"><?php echo $data['tempat_lahir']; ?>, <?php echo date('d-m-Y', strtotime($data['tanggal_lahir'])); ?></td>
                    <td width="120"><?php echo $data['jenis_kelamin']; ?></td>
                    <td width="100"><?php echo $data['agama']; ?></td>
                    <td width="180"><?php echo $data['alamat']; ?></td>
                    <td width="70" class="center"><?php echo $data['no_hp']; ?></td>

                    <td width="120" class="center">
                        <input type="checkbox" value="<?php echo $data['nis']; ?>"name="nis[]"/>
                    </td>
                </tr>
            <?php
                $no++;
            } ?>
            </tbody>
        </table>
        </form>
			</div>
        </div>
	</div>
