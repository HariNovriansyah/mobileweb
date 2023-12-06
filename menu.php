<?php
 if ($_SESSION['level'] == 'admin'){
?>

<nav class="my-2 my-md-0 mr-md-3">
	<a class="p-2 text-dark" href="?page="><i class ='fas fa-home'></i>HOME</a>
	<a class="p-2 text-dark" href="?page=siswa"><i class ='fas fa-user-tie'></i>SISWA</a>
	<a class="p-2 text-dark" href="?page=guru"><i class ='fas fa-user-graduate'></i>GURU</a>
	<a class="p-2 text-dark" href="?page=mapel"><i class ='fas fa-book'></i>MATAPELAJARAN</a>
	<a class="p-2 text-dark" href="?page=jadwal"><i class ='fas fa-calendar'></i>JADWAL</a>
	<a class="p-2 text-dark" href="?page=kelas"><i class ='fas fa-school'></i>KELAS</a>
	<a class="p-2 text-dark" href="?page=waktu"><i class ='far fa-clock'></i>WAKTU</a>
	<a class="p-2 text-dark" href="?page=hari"><i class ='fas fa-calendar-alt'></i>HARI</a>
	<a class="p-2 text-dark" href="?page=jurusan"><i class ='fas fa-graduation-cap'></i>JURUSAN</a>
</nav>
<?php
 }else if ($_SESSION['level'] == 'siswa'){
?>
<nav class="my-2 my-md-0 mr-md-3">
	<a class="p-2 text-dark" href="?page=pages"><i class ='fas fa-home'></i>HOME</a>
	<a class="p-2 text-dark" href="?page=guru"><i class ='fas fa-user-graduate'></i>GURU</a>
	<a class="p-2 text-dark" href="?page=mapel"><i class ='fas fa-book'></i>MATAPELAJARAN</a>
	<a class="p-2 text-dark" href="?page=jadwal"><i class ='fas fa-calendar'></i>JADWAL</a>
	<a class="p-2 text-dark" href="?page=kelas"><i class ='fas fa-school'></i>KELAS</a>
	<a class="p-2 text-dark" href="?page=jurusan"><i class ='fas fa-graduation-cap'></i>JURUSAN</a>
</nav>
<?php
 }
?>