<?php
// jika tombol ubah diklik
if (isset($_GET['id_jadwal'])) {
    // ambil data get dari form
    $id_jadwal = $_GET['id_jadwal'];
    // perintah query untuk menampilkan data dari tabel siswa berdasarkan id_jadwal
    $query = mysqli_query($db, "SELECT * FROM tbl_jadwal WHERE id_jadwal='$id_jadwal'")
        or die('Query Error : ' . mysqli_error($db));
    $data = mysqli_fetch_assoc($query);
    // buat variabel untuk menampung data
    $id_jadwal = $data['id_jadwal'];
    $id_waktu = $data['id_waktu'];
    $kode_hari = $data['kode_hari'];
    $kode_mapel = $data['kode_mapel'];
    $kode_kelas = $data['kode_kelas'];
    $nip = $data['nip'];
    $tahun_ajaran = $data['tahun_ajaran'];

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
                <!-- form ubah data jadwal -->
                <form class="needs-validation" action="jadwalprosesubah.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>ID JADWAL</label>
                                <input type="text" class="form-control" name="id_jadwal" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $id_jadwal; ?>" readonly required>
                                <div class="invalid-feedback">ID jadwal tidak boleh kosong.</div>
                            </div>
                            <div class="form-group">
                            <label>HARI</label>
                                <select class="form-control mb-3" name="kode_hari" autocomplete="off" required>
                                <?php 
                                echo "<option value =$data[nama_hari]> $data[kode_hari]</option>"; 
                                $query  = mysqli_query($db, "SELECT * FROM tbl_hari") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[kode_hari]>$data[nama_hari]</option>";
                                }?></select>

                                <div class="invalid-feedback">GURU tidak boleh kosong.</div>
                            </div> 
                            <div class="form-group">
                            <label>WAKTU</label>
                                <select class="form-control mb-3" name="id_waktu" autocomplete="off" required>
                                <?php 
                                echo "<option value =$data[jam_masuk]> $data[kode_kelas]</option>"; 
                                $query  = mysqli_query($db, "SELECT * FROM tbl_waktu") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[id_waktu]>$data[jam_masuk]</option>";
                                }?></select>

                                <div class="invalid-feedback">GURU tidak boleh kosong.</div>
                            </div> 
                            <div class="form-group">
                            <label>MATAPELAJARAN</label>
                                <select class="form-control mb-3" name="kode_mapel" autocomplete="off" required>
                                <?php 
                                echo "<option value =$data[nama_mapel]> $data[kode_mapel]</option>"; 
                                $query  = mysqli_query($db, "SELECT * FROM tbl_mapel") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[kode_mapel]>$data[nama_mapel]</option>";
                                }?></select>

                                <div class="invalid-feedback">GURU tidak boleh kosong.</div>
                            </div> 

                        </div>
                        <div class="col">
                        <div class="form-group ">
                         <label>Tahun Ajaran</label>
                            <input type="text" class="form-control" name="tahun_ajaran" maxlength="4" autocomplete="off" placeholder="Masukan Tahun Ajaran" value="<?php echo $tahun_ajaran; ?>" required>
                        <div class="invalid-feedback">Tahun Ajaran tidak boleh kosong.</div>
                        </div>
                        <div class="form-group">
                            <label>KELAS</label>
                                <select class="form-control mb-3" name="kode_kelas" autocomplete="off" required>
                                <?php 
                                echo "<option value =$data[nama_kelas]> $data[kode_kelas]</option>"; 
                                $query  = mysqli_query($db, "SELECT * FROM tbl_kelas") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[kode_kelas]>$data[nama_kelas]</option>";
                                }?></select>

                                <div class="invalid-feedback">GURU tidak boleh kosong.</div>
                            </div> 

                            <div class="form-group">
                            <label>GURU</label>
                                <select class="form-control mb-3" name="nip" autocomplete="off" required>
                                <?php 
                                echo "<option value =$data[nama]> $data[nip]</option>"; 
                                $query  = mysqli_query($db, "SELECT * FROM tbl_guru") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[nip]>$data[nama]</option>";
                                }?></select>

                                <div class="invalid-feedback">GURU tidak boleh kosong.</div>
                            </div> 
                        </div>

                    </div>
                    <div class="my-md-4 pt-md-1 border-top"> </div>
                    <div class="form-group col-md-12 right">
                        <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                        <a href="?page=jadwal" class="btn btn-dark btn-reset"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>