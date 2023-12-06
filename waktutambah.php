<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            <i class="fas fa-edit"></i> Input Data waktu
        </div>

        <div class="card">
            <div class="card-body">

                <!-- form tambah data siswa -->
                <form class="needs-validation" action="waktusimpan.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>id waktu</label>
                                <input type="text" class="form-control" name="id_waktu" maxlength="5" autocomplete="off" placeholder="Masukan id waktu" required>
                                <div class="invalid-feedback">id waktu tidak boleh kosong.</div>
                            </div>
                            
                            </div>
                           
                            
                            <div class="form-group col-md-12">
                                <label>Jam Masuk</label>
                                <input  type= 'time'class="form-control" name="jam_masuk" autocomplete="off" required>
                                <div class="invalid-feedback">Jam boleh kosong.</div>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label>Jam keluar</label>
                                <input  type= 'time'class="form-control" name="jam_keluar" autocomplete="off" required>
                                <div class="invalid-feedback">Jam boleh kosong.</div>
                            </div>
                         </div>

                        

                        <div class="form-group col-md-12 right">
                            <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                            <a href="?page=waktu" class="btn btn-dark btn-reset" onclick="return confirm('Anda yakin ingin kembali?')"> Batal </a>
                        </div>
                </form>

            </div>

        </div>
    </div>
</div>