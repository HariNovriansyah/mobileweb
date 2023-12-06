<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            <i class="fas fa-edit"></i> Input Data Hari
        </div>

        <div class="card">
            <div class="card-body">

                <!-- form tambah data siswa -->
                <form class="needs-validation" action="harisimpan.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Kode hari</label>
                                <input type="text" class="form-control" name="kode_hari" maxlength="5" autocomplete="off" placeholder="Masukan Kode hari" required>
                                <div class="invalid-feedback">Kode hari tidak boleh kosong.</div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Hari</label>
                                <select class="form-control" name="nama_hari" autocomplete="off" required>
                                    <option value="">---- Pilih Hari ----</option>
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


                        <div class="my-md-4 pt-md-1 border-top"> </div>

                        <div class="form-group col-md-12 right">
                            <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                            <a href="?page=hari" class="btn btn-dark btn-reset" onclick="return confirm('Anda yakin ingin kembali?')"> Batal </a>
                        </div>
                </form>

            </div>

        </div>
    </div>
</div>