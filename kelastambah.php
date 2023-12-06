<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            <i class="fas fa-edit"></i> Input Data Kelas
        </div>

        <div class="card">
            <div class="card-body">

                <!-- form tambah data siswa -->
                <form class="needs-validation" action="kelassimpan.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Kode Kelas</label>
                                <input type="text" class="form-control" name="kode_kelas" maxlength="5" autocomplete="off" placeholder="Masukan Kode Kelas" required>
                                <div class="invalid-feedback">Kode kelas tidak boleh kosong.</div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Nama Kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" autocomplete="off" placeholder="Masukan Nama Kelas" required>
                                <div class="invalid-feedback">Nama kelas tidak boleh kosong.</div>
                            </div>
                            <div class="form-group col-md-12">
                            <label>wali kelas</label>
                                <select class="form-control" name="wali_kelas" autocomplete="off" required>
                                    <option value="">---- Pilih wali kelas ----</option>
                                    <?php $query  = mysqli_query($db, "SELECT * FROM tbl_guru") or die (mysqli_error($db));
                                while ($data = mysqli_fetch_assoc($query)){
                                    echo "<option value=$data[nip]>$data[nama]</option>";
                                }?>
                                </select>
                                <div class="invalid-feedback">Semester tidak boleh kosong.</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Tingkat</label>
                                <input type="text" class="form-control" name="tingkat" autocomplete="off" placeholder="Masukan Tingkat" required>
                                <div class="invalid-feedback">Tingkat kelas tidak boleh kosong.</div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Semester</label>
                                <select class="form-control" name="semester" autocomplete="off" required>
                                    <option value="">---- Pilih Semester ----</option>
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
                                <label>Tahun</label>
                                <input type="text" class="form-control datepicker1" name="tahun" maxlength="4" autocomplete="off" placeholder="Masukan Tahun" required>
                                <div class="invalid-feedback">Tahun tidak boleh kosong.</div>
                            </div>
                        </div>

                        <div class="my-md-4 pt-md-1 border-top"> </div>

                        <div class="form-group col-md-12 right">
                            <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                            <a href="?page=kelas" class="btn btn-dark btn-reset" onclick="return confirm('Anda yakin ingin kembali?')"> Batal </a>
                        </div>
                </form>

            </div>

        </div>
    </div>
</div>