<?php
    // panggil file database.php untuk koneksi ke database
    require_once "config/database.php";
    // jika tombol simpan diklik
    if (isset($_POST['simpan'])) {
        // ambil data hasil submit dari form
        $kode_kelas = mysqli_real_escape_string($db, trim($_POST['kode_kelas']));
        foreach ($_POST['nis'] as $nis) {
            $insert =  mysql_query($db,"INSERT into tbl_kelasdetail (kode_kelas,nis) VALUES('$kode_kelas','$nis')");
           }
       
                if ($insert) {
                    // jika berhasil tampilkan pesan berhasil simpan data
                    header("location: index.php?alert=1&page=kelasWali");
                }
            
        }
    
    // tutup koneksi
    mysqli_close($db);
    ?>
