<?php
    // panggil file database.php untuk koneksi ke database
    require_once "config/database.php";
    // jika tombol simpan diklik
    if (isset($_POST['simpan'])) {
        if (isset($_POST['id_waktu'])) {
            // ambil data hasil submit dari form
            $id_waktu = mysqli_real_escape_string($db, trim($_POST['id_waktu']));
            $jam_masuk = mysqli_real_escape_string($db, trim($_POST['jam_masuk']));
            $jam_keluar = mysqli_real_escape_string($db, trim($_POST['jam_keluar']));

            // perintah query untuk mengubah data pada tabel siswa
            $update = mysqli_query($db, "UPDATE tbl_waktu SET jam_masuk = '$jam_masuk',
            jam_keluar = '$jam_keluar'
WHERE id_waktu = '$id_waktu'")
                or die('Ada kesalahan pada query update : ' . mysqli_error($db));
            // cek query
            if ($update) {
                // jika berhasil tampilkan pesan berhasil ubah data
                header("location: index.php?alert=2&page=waktu");
            }

            // jika foto diubah
            else {
                // upload file
                // Jika file berhasil diupload, Lakukan : 
                // perintah query untuk mengubah data pada tabel siswa
                $update = mysqli_query($db, "UPDATE tbl_waktu SET
                jam_masuk = '$jam_masuk',
                jam_keluar = '$jam_keluar'
WHERE id_waktu = '$id_waktu'")
                    or die('Ada kesalahan pada query update : ' . mysqli_error($db));
                // cek query
                if ($update) {
                    // jika berhasil tampilkan pesan berhasil ubah data
                    header("location: index.php?alert=2&page=waktu");
                }
            }
        }
    }
    // tutup koneksi
    mysqli_close($db);
    ?>