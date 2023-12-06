<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            <i class="fas fa-edit"></i> Input Data Jurusan
        </div>

        <div class="card">
            <div class="card-body">

                <!-- form tambah data siswa -->
                <form class="needs-validation" action="JurusanSimpan.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Kode jurusan</label>
                                <input type="text" class="form-control" name="kode_jurusan" maxlength="5" autocomplete="off" placeholder="Masukan Kode jurusan" required>
                                <div class="invalid-feedback">Kode jurusan tidak boleh kosong.</div>
                            </div>
                            <div class="form-group col-md-12">
                            <label>nama jurusan</label>
                                <select class="form-control" name="nama_jurusan" autocomplete="off" required>
                                    <option value="">---- Pilih jurusan ----</option>
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                    <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                    <option value="MANAJEMEN">MANAJEMEN</option>
                                    <option value="HUKUM">HUKUM</option>
                                    <option value="TEKNOLOGI INFORMASI">TEKNOLOGI INFORMASI</option>
                                    <option value="REKAYASA SISTEM KOMPUTER">REKAYASA SISTEM KOMPUTER</option>
                                    <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                                </select>
                                <div class="invalid-feedback">Jurusan tidak boleh kosong.</div>
                            </div>
                        </div>


                        <div class="my-md-4 pt-md-1 border-top"> </div>

                        <div class="form-group col-md-12 right">
                            <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                            <a href="?page=jurusan" class="btn btn-dark btn-reset" onclick="return confirm('Anda yakin ingin kembali?')"> Batal </a>
                        </div>
                </form>

            </div>

        </div>
    </div>
</div>