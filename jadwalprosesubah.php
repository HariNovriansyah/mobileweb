<?php
    // panggil file database.php untuk koneksi ke database
    require_once "config/database.php";
    // jika tombol simpan diklik
    if (isset($_POST['simpan'])) {
        if (isset($_POST['id_jadwal'])) {
            // ambil data hasil submit dari form
            $id_jadwal = mysqli_real_escape_string($db, trim($_POST['id_jadwal']));
            $kode_hari = mysqli_real_escape_string($db, trim($_POST['kode_hari']));
            $id_waktu = mysqli_real_escape_string($db, trim($_POST['id_waktu']));
            $kode_mapel = mysqli_real_escape_string($db, trim($_POST['kode_mapel']));
            $kode_kelas = mysqli_real_escape_string($db, trim($_POST['kode_kelas']));
            $nip= mysqli_real_escape_string($db, trim($_POST['nip']));
            $tahun_ajaran = mysqli_real_escape_string($db, trim($_POST['tahun_ajaran']));
            // perintah query untuk mengubah data pada tabel siswa
            $update = mysqli_query($db, "UPDATE tbl_jadwal SET id_waktu = '$id_waktu',
kode_hari = '$kode_hari',
kode_mapel = '$kode_mapel',
kode_kelas = '$kode_kelas',
nip = '$nip',
tahun_ajaran = '$tahun_ajaran'
WHERE id_jadwal = '$id_jadwal'")
                or die('Ada kesalahan pada query update : ' . mysqli_error($db));
            // cek query
            if ($update) {
                // jika berhasil tampilkan pesan berhasil ubah data
                header("location: index.php?alert=2&page=jadwal");
            }

            // jika foto diubah
            else {
                // upload file
                // Jika file berhasil diupload, Lakukan : 
                // perintah query untuk mengubah data pada tabel siswa
                $update = mysqli_query($db, "UPDATE tbl_jadwal SET id_waktu = '$id_waktu',
kode_hari = '$kode_hari',
kode_mapel = '$kode_mapel',
kode_kelas = '$kode_kelas',
nip = '$nip',
tahun_ajaran = '$tahun_ajaran'
WHERE id_jadwal = '$id_jadwal'")
                    or die('Ada kesalahan pada query update : ' . mysqli_error($db));
                // cek query
                if ($update) {
                    // jika berhasil tampilkan pesan berhasil ubah data
                    header("location: index.php?alert=2&page=jadwal");
                }
            }
        }
    }
    // tutup koneksi
    mysqli_close($db);
    ?>