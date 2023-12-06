<?php
// jika tombol ubah diklik
if (isset($_GET['kode_hari'])) {
    // ambil data get dari form
    $kode_hari = $_GET['kode_hari'];
    // perintah query untuk menampilkan data dari tabel siswa berdasarkan kode_hari
    $query = mysqli_query($db, "SELECT * FROM tbl_hari WHERE kode_hari='$kode_hari'")
        or die('Query Error : ' . mysqli_error($db));
    $data = mysqli_fetch_assoc($query);
    // buat variabel untuk menampung data
    $kode_hari = $data['kode_hari'];
    $nama_hari = $data['nama_hari'];
}
// tutup koneksi

?>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-edit"></i> Ubah Data hari
        </div>

        <div class="card">
            <div class="card-body">
                <!-- form ubah data hari -->
                <form class="needs-validation" action="hariprosesubah.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Kode hari</label>
                                <input type="text" class="form-control" name="kode_hari" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $kode_hari; ?>" readonly required>
                                <div class="invalid-feedback">Kode hari tidak boleh kosong.</div>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Hari</label>
                                <select class="form-control" name="nama_hari" autocomplete="off" required>
                                    <option value="<?php echo $nama_hari; ?>">---- Pilih Hari ----</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                <div class="invalid-feedback">Hari tidak boleh kosong.</div>
                            </div>

                        </div>

                    </div>
                    <div class="my-md-4 pt-md-1 border-top"> </div>
                    <div class="form-group col-md-12 right">
                        <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                        <a href="?page=hari" class="btn btn-dark btn-reset"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>