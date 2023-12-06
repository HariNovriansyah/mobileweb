<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            <i class="fas fa-edit"></i> Input Data jadwal
        </div>

        <div class="card">
            <div class="card-body">

                <!-- form tambah data siswa -->
                <form class="needs-validation" action="jadwalsimpan.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                                <label>ID JADWAL</label>
                                <input type="text" class="form-control" name="id_jadwal" maxlength="5" autocomplete="off" placeholder="Masukan Kode jadwal" required>
                                <div class="invalid-feedback">Kode jadwal tidak boleh kosong.</div>
                            </div>
                            <div class="form-group ">
                                <label>HARI</label>
                                <select class="form-control " name="kode_hari" autocomplete="off" required>
                                <option value="">---- Pilih hari----</option>
                                <?php $query  = mysqli_query($db, "SELECT * FROM tbl_hari") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){ 
                                    echo "<option value=$data[kode_hari]>$data[nama_hari]</option>";
                                }?>
                                </select>
                                <div class="invalid-feedback">id waktu tidak boleh kosong.</div>
                            </div>
                            <div class="form-group ">
                                <label>WAKTU</label>
                                <select class="form-control " name="id_waktu" autocomplete="off" required>
                                <option value="">---- Pilih id waktu----</option>
                                <?php $query  = mysqli_query($db, "SELECT * FROM tbl_waktu") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){ 
                                    echo "<option value=$data[id_waktu]>$data[jam_masuk]</option>";
                                }?>
                                </select>
                                <div class="invalid-feedback">id waktu tidak boleh kosong.</div>
                            </div>
                               <div class="form-group ">
                                <label>MATAPELAJARAN</label>
                                <select class="form-control" name="kode_mapel" autocomplete="off" required>
                                <option value="">---- Pilih kode mapel----</option>
                                <?php $query  = mysqli_query($db, "SELECT * FROM tbl_mapel") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[kode_mapel]>$data[nama_mapel]</option>";
                                }?>

                                <div class="invalid-feedback">Kode mapel tidak boleh kosong.</div>
                            </select>
                            </div>

                        </div>
                        <div class="col">
                            
                        <div class="form-group ">
                         <label>Tahun Ajaran</label>
                            <input type="text" class="form-control" name="tahun_ajaran" maxlength="4" autocomplete="off" placeholder="Masukan Tahun Ajaran" required>
                        <div class="invalid-feedback">Tahun Ajaran tidak boleh kosong.</div>
                        </div>
                            <div class="form-group">
                                <label>Kode kelas</label>
                                <select class="form-control mb-3" name="kode_kelas" autocomplete="off" required>
                                <option value="">---- Pilih kode kelas----</option>
                                <?php $query  = mysqli_query($db, "SELECT * FROM tbl_kelas") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[kode_kelas]>$data[nama_kelas]</option>";
                                }?>
                                <div class="invalid-feedback">Kode kelas tidak boleh kosong.</div>
                            </select>
                            </div>

                            
                            <div class="form-group ">
                            <label>GURU</label>
                                <select class="form-control" name="nip" autocomplete="off" required>
                                    <option value="">---- Pilih GURU ----</option>
                                    <?php $query  = mysqli_query($db, "SELECT * FROM tbl_guru") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[nip]>$data[nama]</option>";
                                }?>
                                </select>
                                <div class="invalid-feedback">GURU tidak boleh kosong.</div>
                            </select>
                            </div>
                            

                        </div>

                        <div class="my-md-4 pt-md-1 border-top"> </div>

                        <div class="form-group col-md-12 right">
                            <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                            <a href="?page=jadwal" class="btn btn-dark btn-reset" onclick="return confirm('Anda yakin ingin kembali?')"> Batal </a>
                        </div>
                </form>

            </div>

        </div>
    </div>
</div>