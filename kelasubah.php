<?php
// jika tombol ubah diklik
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
// tutup koneksi
?>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-edit"></i> Ubah Data Kelas
        </div>

        <div class="card">
            <div class="card-body">
                <!-- form ubah data kelas -->
                <form class="needs-validation" action="kelasprosesubah.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Kode Kelas</label>
                                <input type="text" class="form-control" name="kode_kelas" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $kode_kelas; ?>" readonly required>
                                <div class="invalid-feedback">Kode Kelas tidak boleh kosong.</div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Semester</label>
                                <select class="form-control" name="semester" autocomplete="off" required>
                                    <option value="<?php echo $semester; ?>"><?php echo $semester; ?></option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                    <option value="7">Semester 7</option>
                                    <option value="8">Semester 8</option>
                                </select>
                                <div class="invalid-feedback">Semester tidak boleh kosong.</div>
                            </div>
                           
                            <div class="form-group col-md-12">
                                <label>Nama Kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" autocomplete="off" value="<?php echo $nama_kelas; ?>" required>
                                <div class="invalid-feedback">Nama kelas tidak boleh kosong.</div>
                            </div>
                            

                        </div>

                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Tingkat</label>
                                <input type="text" class="form-control" name="tingkat" autocomplete="off" value="<?php echo $tingkat; ?>" required>
                                <div class="invalid-feedback">Tingkat tidak boleh kosong.</div>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Tahun</label>
                                <input type="y" class="form-control datepicker1" name="tahun" maxlength="4" autocomplete="off" value="<?php echo $tahun; ?>" required>
                                <div class="invalid-feedback">Tahun tidak boleh kosong.</div>
                            </div>
                            <div class="form-group col-md-12">
                            <label>wali kelas</label>
                                <select class="form-control mb-3 " name="wali_kelas" autocomplete="off" required>
                                    <option value="<?php echo $wali_kelas; ?>"></option>
                                    <?php $query  = mysqli_query($db, "SELECT * FROM tbl_guru");
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[nip]>$data[nama]</option>";
                                }?></select>
                                <div class="invalid-feedback">Wali kelas tidak boleh kosong.</div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="my-md-4 pt-md-1 border-top"> </div>
                    <div class="form-group col-md-12 right">
                        <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                        <a href="?page=kelas" class="btn btn-dark btn-reset"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>