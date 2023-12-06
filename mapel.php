<?php
// pengecekan pencarian data
// jika dilakukan pencarian data, maka tampilkan kata kunci pencarian
if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
}
// jika tidak maka kosong
else {
    $cari = "";
}
?>
<div class="row">
    <div class="col-md-12">
        <?php
        // fungsi untuk menampilkan pesan
        // jika alert = "" (kosong)
        // tampilkan pesan "" (kosong)
        if (empty($_GET['alert'])) {
            echo "";
        }
        // jika alert = 1
        // tampilkan pesan Sukses "Data mapel berhasil disimpan"
        elseif ($_GET['alert'] == 1) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check-circle"></i> Sukses!</strong> Data mapel berhasil disimpan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        // jika alert = 2
        // tampilkan pesan Sukses "Data mapel berhasil diubah"
        elseif ($_GET['alert'] == 2) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check-circle"></i> Sukses!</strong> Data mapel berhasil diubah.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        // jika alert = 3
        // tampilkan pesan Sukses "Data mapel berhasil dihapus"
        elseif ($_GET['alert'] == 3) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check-circle"></i> Sukses!</strong> Data mapel berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        // jika alert = 4
        // tampilkan pesan Gagal Kode mapel sudah ada"
        elseif ($_GET['alert'] == 4) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-times-circle"></i> Gagal!</strong> Kode mapel <b><?php echo $_GET['kode_mapel']; ?></b>
                sudah ada.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        ?>
        <form class="mr-3" action="index.php" method="post">
            <div class="form-row">
                <!-- form cari -->
                <div class="col-3">
                    <input type="text" class="form-control" name="cari" placeholder="Cari Kode mapel atau Nama mapel" value="<?php echo $cari; ?>">
                </div>
                <!-- tombol cari -->
                <div class="col-8">
                    <button type="submit" class="btn btn-dark">Cari</button>
                </div>
                <!-- tombol tambah data -->
                <div class="col-1">
                    <a class="btn btn-warning" href="?page=Tambahm" role="button"><i class="fas fa-plus"></i>
                        Tambah</a>
                </div>
            </div>
        </form>
        <!-- Tabel mapel untuk menampilkan data mapel dari database -->
        <table class="table table-striped table-default mt-3">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode mapel</th>
                    <th>Nama mapel</th>
                    <th>Semester</th>
                    <th>kode jurusan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Pagination -------------------------------------------------------------------------------
                // jumlah data yang ditampilkan setiap halaman
                $batas = 5;
                // jika dilakukan pencarian data
                if (isset($cari)) {
                    // perintah query untuk menampilkan jumlah data mapel dari database berdasarkan kode mapel atau nama mapel yang sesuai dengan kata kunci pencarian
                    $query_jumlah = mysqli_query($db, "SELECT count(kode_mapel) as jumlah FROM tbl_mapel
WHERE kode_mapel LIKE '%$cari%' OR nama_mapel LIKE '%$cari%'")
                        or die('Ada kesalahan pada query jumlah:' . mysqli_error($db));
                }
                // jika tidak dilakukan pencarian data
                else {
                    // perintah query untuk menampilkan jumlah data mapel dari database
                    $query_jumlah = mysqli_query($db, "SELECT count(kode_mapel) as jumlah FROM tbl_mapel")
                        or die('Ada kesalahan pada query jumlah:' . mysqli_error($db));
                }
                // tampilkan jumlah data
                $data_jumlah = mysqli_fetch_assoc($query_jumlah);
                $jumlah = $data_jumlah['jumlah'];
                $halaman = ceil($jumlah / $batas);
                $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                $mulai = ($page - 1) * $batas;
                // ------------------------------------------------------------------------------------------
                // nomor urut tabel
                $no = $mulai + 1;
                // jika dilakukan pencarian data
                if (isset($cari)) {
                    // perintah query untuk menampilkan data mapel dari database berdasarkan kode_mapel atau nama yang sesuai dengan kata kunci pencarian
                    // data yang ditampilkan mulai = $mulai sampai dengan batas = $batas
                    $query = mysqli_query($db, "SELECT * FROM tbl_mapel INNER JOIN tbl_jurusan
                ON tbl_mapel.kode_jurusan = tbl_jurusan.kode_jurusan WHERE tbl_mapel.kode_mapel LIKE '%$cari%' OR nama_mapel LIKE '%$cari%' ORDER BY kode_mapel DESC LIMIT $mulai, $batas")
                        or die('Ada kesalahan pada query mapel: ' . mysqli_error($db));
                }
                // jika tidak dilakukan pencarian data
                else {
                    // perintah query untuk menampilkan data mapel dari database
                    // data yang ditampilkan mulai = $mulai sampai dengan batas = $batas
                    $query = mysqli_query($db, "SELECT * FROM tbl_mapel INNER JOIN tbl_jurusan ON tbl_mapel.kode_jurusan = tbl_jurusan.kode_jurusan WHERE tbl_mapel.kode_mapel ORDER BY kode_mapel DESC LIMIT $mulai, $batas")
                        or die('Ada kesalahan pada query mapel: ' . mysqli_error($db));
                }
                // tampilkan data
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr class="cap">
                        <td width="30" class="center"><?php echo $no; ?></td>
                        <td width="80" class="center"><?php echo $data['kode_mapel']; ?></td>
                        <td width="160" class="center"><?php echo $data['nama_mapel']; ?></td>
                        <td width="30" class="center"><?php echo $data['semester']; ?></td>
                        <td width="30" class="center"><?php echo $data['nama_jurusan']; ?></td>
                        <td width="120" class="center">
                            <a title="Ubah" class="btn btn-outline-success" href="?page=ubahm&kode_mapel=<?php echo $data['kode_mapel']; ?>"><i class="fas fa-edit"></i></a>
                            <a title="Hapus" class="btn btn-outline-danger" href="mapelproseshapus.php?kode_mapel=<?php echo $data['kode_mapel']; ?>" onclick="return confirm('Anda yakin ingin menghapus mapel <?php echo $data['nama_mapel']; ?>?');"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                    $no++;
                } ?>
            </tbody>
        </table>
        <!-- Tampilkan Pagination -->
        <?php
        // fungsi untuk pengecekan halaman aktif
        // jika halaman kosong atau tidak ada yang dipilih
        if (empty($_GET['hal'])) {
            // halaman aktif = 1
            $halaman_aktif = '1';
        }
        // selain itu
        else {
            // halaman aktif = sesuai yang dipilih
            $halaman_aktif = $_GET['hal'];
        }
        ?>
        <div class="row">
            <div class="col">
                <!-- tampilkan informasi jumlah halaman dan jumlah data -->
                <a>
                    Halaman <?php echo $halaman_aktif; ?> dari <?php echo $halaman; ?> -
                    Total <?php echo $jumlah; ?> data
                </a>
            </div>
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <!-- Button untuk halaman sebelumnya -->
                        <?php
                        // jika halaman aktif = 0 atau = 1, maka button Sebelumnya = disable
                        if ($halaman_aktif <= '1') { ?>
                            <li class="page-item disabled"> <span class="page-link">Sebelumnya</span></li>
                        <?php
                        }
                        // jika halaman aktif > 1, maka button Sebelumnya = aktif
                        else { ?>
                            <li class="page-item"><a class="page-link" href="?hal=<?php echo $page - 1 ?>">Sebelumnya</a></li>
                        <?php } ?>
                        <!-- Button untuk link halaman 1 2 3 ... -->
                        <?php
                        for ($x = 1; $x <= $halaman; $x++) { ?>
                            <li class="page-item"><a class="page-link" href="?hal=<?php echo $x ?>"><?php echo $x ?></a></li>
                        <?php } ?>
                        <!-- Button untuk halaman selanjutnya -->
                        <?php
                        // jika halaman aktif >= jumlah halaman, maka button Selanjutnya = disable
                        if ($halaman_aktif >= $halaman) { ?>
                            <li class="page-item disabled"> <span class="page-link">Selanjutnya</span></li>
                        <?php
                        }
                        // jika halaman aktif <= jumlah halaman, maka button Selanjutnya = aktif
                        else { ?>
                            <li class="page-item"><a class="page-link" href="?page=mapel&hal=<?php echo $page + 1 ?>">Selanjutnya</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>