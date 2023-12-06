<?php
// jika tombol ubah diklik
if (isset($_GET['id_waktu'])) {
    // ambil data get dari form
    $id_waktu = $_GET['id_waktu'];
    // perintah query untuk menampilkan data dari tabel siswa berdasarkan id_waktu
    $query = mysqli_query($db, "SELECT * FROM tbl_waktu WHERE id_waktu='$id_waktu'")
        or die('Query Error : ' . mysqli_error($db));
    $data = mysqli_fetch_assoc($query);
    // buat variabel untuk menampung data
    $id_waktu = $data['id_waktu'];
    $jam_masuk = $data['jam_masuk'];
    $jam_keluar = $data['jam_keluar'];
}
// tutup koneksi
mysqli_close($db);
?>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="fas fa-edit"></i> Ubah Data waktu
        </div>

        <div class="card">
            <div class="card-body">
                <!-- form ubah data waktu -->
                <form class="needs-validation" action="waktuProsesUbah.php" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-12">
                                <label>Id Waktu</label>
                                <input type="text" class="form-control" name="id_waktu" maxlength="5" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" value="<?php echo $id_waktu; ?>" readonly required>
                                <div class="invalid-feedback">Kode waktu tidak boleh kosong.</div>
                            </div>

                            
                           
                            <div class="col">
                            <div class="form-group col-md-12">
                                <label>Jam Masuk</label>
                                <input  type= 'time'class="form-control" name="jam_masuk" autocomplete="off" value="<?php echo $jam_masuk; ?>" required>
                                <div class="invalid-feedback">Jam boleh kosong.</div>
                            </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Jam keluar</label>
                                <input  type= 'time'class="form-control" name="jam_keluar" autocomplete="off" value="<?php echo $jam_keluar; ?>" required>
                                <div class="invalid-feedback">Jam boleh kosong.</div>
                            </div>
                         </div>

                        </div>

                    </div>
                    <div class="my-md-4 pt-md-1 border-top"> </div>
                    <div class="form-group col-md-12 right">
                        <input type="submit" class="btn btn-danger btn-submit mr-2" name="simpan" value="Simpan">
                        <a href="?page=waktu" class="btn btn-dark btn-reset"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>