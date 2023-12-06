<?php
    // panggil file database.php untuk koneksi ke database
    require_once "config/database.php";
    // jika tombol simpan diklik
    if (isset($_POST['simpan'])) {
        // ambil data hasil submit dari form
        $id_jadwal = mysqli_real_escape_string($db, trim($_POST['id_jadwal']));
        $kode_hari = mysqli_real_escape_string($db, trim($_POST['kode_hari']));
        $id_waktu = mysqli_real_escape_string($db, trim($_POST['id_waktu']));
        $kode_mapel = mysqli_real_escape_string($db, trim($_POST['kode_mapel']));
        $kode_kelas = mysqli_real_escape_string($db, trim($_POST['kode_kelas']));
        $nip= mysqli_real_escape_string($db, trim($_POST['nip']));
        $tahun_ajaran = mysqli_real_escape_string($db, trim($_POST['tahun_ajaran']));

        // perintah query untuk menampilkan id_jadwal dari tabel siswa berdasarkan id_jadwal dari hasil submit form
        $query = mysqli_query($db, "SELECT id_jadwal FROM tbl_jadwal WHERE id_jadwal='$id_jadwal'")
            or die('Ada kesalahan pada query tampil data id_jadwal: ' . mysqli_error($db));
        $rows = mysqli_num_rows($query);
        // jika id_jadwal sudah ada
        if ($rows > 0) {
            // tampilkan pesan gagal simpan data
            header("location: index.php?alert=4&id_jadwal=$id_jadwal");
        }
        // jika id_jadwal belum ada  
        else {
            // upload file
                // Jika file berhasil diupload, Lakukan : 
                // perintah query untuk menyimpan data ke tabel siswa
                $insert = mysqli_query($db, "INSERT INTO tbl_jadwal(id_jadwal,kode_hari,id_waktu,kode_mapel,kode_kelas,nip,tahun_ajaran)
VALUES('$id_jadwal','$kode_hari','$id_waktu','$kode_mapel','$kode_kelas','$nip','$tahun_ajaran')")
                    or die('Ada kesalahan pada query insert : ' . mysqli_error($db));
                // cek query
                if ($insert) {
                    // jika berhasil tampilkan pesan berhasil simpan data
                    header("location: index.php?alert=1&page=jadwal");
                }
            
        }
    }
    // tutup koneksi
    mysqli_close($db);
    ?>
