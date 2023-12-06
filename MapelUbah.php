<?php
// jika tombol ubah diklik
if (isset($_GET['kode_mapel'])) {
    // ambil data get dari form
    $kode_mapel = $_GET['kode_mapel'];
    // perintah query untuk menampilkan data dari tabel siswa berdasarkan kode_mapel
    $query = mysqli_query($db, "SELECT * FROM tbl_mapel WHERE kode_mapel='$kode_mapel'")
        or die('Query Error : ' . mysqli_error($db));
    $data = mysqli_fetch_assoc($query);
    // buat variabel untuk menampung data
    $kode_mapel = $data['kode_mapel'];
    $nama_mapel = $data['nama_mapel'];
    $semester = $data['semester'];
    $kode_jurusan = $data['kode_jurusan'];
}
// tutup koneksi

?>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-edit"></i> Ubah Data mata pelelajaran
        </div>

        <div class="card">
            <div class="card-body">
                <!-- form ubah data mapel -->
                <form class="needs-validation" action="mapelprosesubah.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Kode mapel</label>
                                <input type="text" class="form-control" name="kode_mapel" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $kode_mapel; ?>" readonly required>
                                <div class="invalid-feedback">Kode mapel tidak boleh kosong.</div>
                            </div>

                            <div class="form-group col-md-12">
                            <label>nama mapel</label>
                                <select class="form-control" name="nama_mapel" autocomplete="off" required>
                                    <option value="<?php echo $nama_mapel; ?>">---- Pilih mapel ----</option>
                                    <option value="arsitektur komputer">Arsitektur Komputer</option>
                                    <option value="pemrograman web">pemrograman web</option>
                                    <option value="rekayasa perangkat lunak">rekayasa perangkat lunak</option>
                                    <option value="kalkulus">kalkulus</option>
                                    <option value="struktur data">struktur data</option>
                                    <option value="algoritma dan pemrograman">algoritma dan pemrograman</option>
                                    <option value="instalasi dan troubleshooting">instalasi dan troubleshooting</option>
                                    <option value="grafika dan animasi kompuster">grafika dan animasi kompuster</option>
                                </select>
                                <div class="invalid-feedback">mapel tidak boleh kosong.</div>
                            </div>

                        </div>
                        <div class="col">
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
                            <label>Kode jurusan</label>
                                <select class="form-control mb-3" name="kode_jurusan" autocomplete="off" required>
                                <?php 
                                echo "<option value =$data[nama_jurusan]> $data[kode_jurusan]</option>"; 
                                $query  = mysqli_query($db, "SELECT * FROM tbl_jurusan") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[kode_jurusan]>$data[nama_jurusan]</option>";
                                }?>
                                </select>
                                <div class="invalid-feedback">Kode jurusan tidak boleh kosong.</div>
                            </div> 
                        </div>

                    </div>
                    <div class="my-md-4 pt-md-1 border-top"> </div>
                    <div class="form-group col-md-12 right">
                        <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                        <a href="?page=mapel" class="btn btn-dark btn-reset"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>