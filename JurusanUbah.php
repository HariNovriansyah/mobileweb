<?php
// jika tombol ubah diklik
if (isset($_GET['kode_jurusan'])) {
    // ambil data get dari form
    $kode_jurusan = $_GET['kode_jurusan'];
    // perintah query untuk menampilkan data dari tabel siswa berdasarkan kode_jurusan
    $query = mysqli_query($db, "SELECT * FROM tbl_jurusan WHERE kode_jurusan='$kode_jurusan'")
        or die('Query Error : ' . mysqli_error($db));
    $data = mysqli_fetch_assoc($query);
    // buat variabel untuk menampung data
    $kode_jurusan = $data['kode_jurusan'];
    $nama_jurusan = $data['nama_jurusan'];
}
// tutup koneksi
mysqli_close($db);
?>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-edit"></i> Ubah Data jurusan
        </div>

        <div class="card">
            <div class="card-body">
                <!-- form ubah data jurusan -->
                <form class="needs-validation" action="JurusanProsesUbah.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Kode jurusan</label>
                                <input type="text" class="form-control" name="kode_jurusan" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $kode_jurusan; ?>" readonly required>
                                <div class="invalid-feedback">Kode jurusan tidak boleh kosong.</div>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Nama jurusan</label>
                                <select class="form-control" name="nama_jurusan" autocomplete="off" required>
                                    <option value="<?php echo $nama_jurusan; ?>">---- Pilih jurusan ----</option>
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                    <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                    <option value="MANAJEMEN">MANAJEMEN</option>
                                    <option value="HUKUM">HUKUM</option>
                                    <option value="TEKNOLOGI INFORMASI">TEKNOLOGI INFORMASI</option>
                                    <option value="REKAYASA SISTEM KOMPUTER">REKAYASA SISTEM KOMPUTER</option>
                                    <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                                </select>
                                <div class="invalid-feedback">Nama jurusan tidak boleh kosong.</div>
                            </div>

                        </div>

                    </div>
                    <div class="my-md-4 pt-md-1 border-top"> </div>
                    <div class="form-group col-md-12 right">
                        <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                        <a href="?page=jurusan" class="btn btn-dark btn-reset"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>