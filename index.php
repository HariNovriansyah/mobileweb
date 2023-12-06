 <?php
	session_start();
	if (isset($_SESSION['level']) == 'admin') {
		require_once "config/database.php"; ?>
 	<!doctype html>
 	<!--	HTML 5 Tag -->
 	<html lang="en">
 	<!--	tag pembuka HTML -->

 	<head>
 		<!-- Required meta tags -->
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<meta name="description" content="Aplikasi Pengelolaan Data Siswa dengan PHP 7, mysqli, dan bootstrap 4">
 		<meta name="keywords" content="Aplikasi Pengelolaan Data Siswa dengan PHP 7, mysqli, dan bootstrap 4">
 		<meta name="author" content="Indra Styawantoro">
 		<!-- favicon -->
 		<link rel="shortcut icon" href="assets/img/favicon.png">
 		<!-- Bootstrap CSS -->
 		<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css">
 		<!-- datepicker CSS -->
 		<link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
 		<!-- Font Awesome CSS -->
 		<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.2-web/css/all.min.css">
 		<!-- Custom CSS -->
 		<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
 		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 		<!-- title -->
 		<title>Data Siswa</title>
 	</head>

 	<body>
 		<div class="container-fluid">
 			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-whiteborder-bottom shadow-sm">

 				<h5 class="my-0 mr-md-auto font-weight-normal"><i class="fas fa-user title-icon"></i> DATA UTM</h5>
 				<nav class="my-2 my-md-0 mr-md-3">
 					<?php
						include "menu.php";
						?>
 				</nav>
 				<a class="btn btn-outline-primary" href="?page=logout"><i class='fas fa-sign-out-alt'></i>LOGOUT</a>
 			</div>

 		</div>

 		<div class="container-fluid">
 			<?php
				// fungsi untuk pemanggilan halaman
				// jika page = kosong atau saat aplikasi pertama dijalankan, tampilkan halaman siswa.php
				if (empty($_GET["page"])) {
					include "home.php";
				} elseif ($_GET['page'] == 'logout') {
					include "logout.php";
				} elseif ($_GET['page'] == 'siswa') {
					include "siswa.php";
				} elseif ($_GET['page'] == 'tambah') {
					include "siswatambah.php";
				} elseif ($_GET['page'] == 'ubah') {
					include "siswaubah.php";
				} elseif ($_GET['page'] == 'guru') {
					include "guru.php";
				} elseif ($_GET['page'] == 'tambahg') {
					include "gurutambah.php";
				} elseif ($_GET['page'] == 'ubahg') {
					include "guruubah.php";
				} elseif ($_GET['page'] == 'kelas') {
					include "kelas.php";
				} elseif ($_GET['page'] == 'tambahk') {
					include "kelastambah.php";
				} elseif ($_GET['page'] == 'ubahk') {
					include "kelasubah.php";
				} elseif ($_GET['page'] == 'mapel') {
					include "mapel.php";
				} elseif ($_GET['page'] == 'Tambahm') {
					include "MapelTambah.php";
				} elseif ($_GET['page'] == 'ubahm') {
					include "Mapelubah.php";
				} elseif ($_GET['page'] == 'jurusan') {
					include "jurusan.php";
				} elseif ($_GET['page'] == 'tambahj') {
					include "JurusanTambah.php";
				} elseif ($_GET['page'] == 'ubahj') {
					include "JurusanUbah.php";
				} elseif ($_GET['page'] == 'waktu') {
					include "waktu.php";
				} elseif ($_GET['page'] == 'tambahw') {
					include "waktutambah.php";
				} elseif ($_GET['page'] == 'ubahw') {
					include "waktuubah.php";
				} elseif ($_GET['page'] == 'jadwal') {
					include "jadwal.php";
				} elseif ($_GET['page'] == 'ubahjw') {
					include "jadwalubah.php";
				} elseif ($_GET['page'] == 'tambahjw') {
					include "jadwaltambah.php";
				} elseif ($_GET['page'] == 'hari') {
					include "hari.php";
				} elseif ($_GET['page'] == 'ubahh') {
					include "hariubah.php";
				} elseif ($_GET['page'] == 'tambahh') {
					include "haritambah.php";
				} elseif ($_GET['page'] == 'kelasWali') {
					include "kelasWali.php";
				} elseif ($_GET['page'] == 'kelasWaliTambah') {
					include "kelasWaliTambah.php";
				}
				?>
 		</div>

 		<div class="container-fluid">
 			<footer class="pt-4 my-md-4 pt-md-3 border-top">
 				<div class="row">
 					<div class="col-12 col-md center">
 						&copy; 2022 - <a class="text-info" href="http://torolab.id/">Harikun</a>
 					</div>
 				</div>
 			</footer>
 		</div>

 		<!--	Pemanggilan Library jQuery -->
 		<!--	pertama jQuery, kemudian Bootstrap js -->
 		<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
 		<script type="text/javascript" src="assets/plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>
 		<!-- fontawesome js -->
 		<script type="text/javascript" src="assets/plugins/fontawesome-free-5.4.1-web/js/all.min.js"></script>
 		<!-- datepicker js -->
 		<script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
 		<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
 		<script type="text/javascript">
 			$(function() {
 				$('#datetimepicker3').datetimepicker3({
 					format: 'LT'
 				});
 			});
 			// initiate plugin ============================================================================
 			// --------------------------------------------------------------------------------------------
 			$(document).ready(function() {
 				// datepicker plugin
 				$('.date-picker').datepicker({
 					autoclose: true,
 					todayHighlight: true
 				});
 			});

 			// ============================================================================================

 			// Validasi Form Tambah dan Form Ubah =========================================================
 			// --------------------------------------------------------------------------------------------
 			// Validasi form input tidak boleh kosong
 			(function() {
 				'use strict';
 				window.addEventListener('load', function() {
 					// Fetch all the forms we want to apply custom Bootstrap validation styles to
 					var forms = document.getElementsByClassName('needs-validation');
 					// Loop over them and prevent submission
 					var validation = Array.prototype.filter.call(forms, function(form) {
 						form.addEventListener('submit', function(event) {
 							if (form.checkValidity() === false) {
 								event.preventDefault();
 								event.stopPropagation();
 							}
 							form.classList.add('was-validated');
 						}, false);
 					});
 				}, false);
 			})();

 			// Validasi karakter yang boleh diinpukan pada form
 			function getkey(e) {
 				if (window.event)
 					return window.event.keyCode;
 				else if (e)
 					return e.which;
 				else
 					return null;
 			}

 			function goodchars(e, goods, field) {
 				var key, keychar;
 				key = getkey(e);
 				if (key == null) return true;

 				keychar = String.fromCharCode(key);
 				keychar = keychar.toLowerCase();
 				goods = goods.toLowerCase();

 				// check goodkeys
 				if (goods.indexOf(keychar) != -1)
 					return true;
 				// control keys
 				if (key == null || key == 0 || key == 8 || key == 9 || key == 27)
 					return true;

 				if (key == 13) {
 					var i;
 					for (i = 0; i < field.form.elements.length; i++)
 						if (field == field.form.elements[i])
 							break;
 					i = (i + 1) % field.form.elements.length;
 					field.form.elements[i].focus();
 					return false;
 				};
 				// else return false
 				return false;
 			}

 			// validasi image dan preview image sebelum upload
 			function validasiFile() {
 				var fileInput
 				var filePath
 				var fileSize
 				// tentukan extension yang diperbolehkan
 				var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
 				// Jika tipe file yang diupload tidak sesuai dengan allowedExtensions, tampilkan pesan :
 				if (!allowedExtensions.exec(filePath)) {
 					alert('Tipe file foto tidak sesuai. Harap unggah file foto yang memiliki tipe *.jpg atau*.png');
 					fileInput.value = '';
 					document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png"/>';
 					return false;
 				}
 				// jika ukuran file yang diupload lebih dari sama dengan 1 Mb
 				else if (fileSize >= 1000000) {
 					alert('Ukuran file foto lebih dari 1 Mb. Harap unggah file foto yang memiliki ukuran maksimal 1 Mb.');
 					fileInput.value = '';
 					document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png"/>';
 					return false;
 				}
 				// selain itu
 				else {
 					if (fileInput.files && fileInput.files[0]) {
 						var reader = new FileReader();
 						reader.onload = function(e) {
 							document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="' + e.target.result + '"/>';
 						};
 						reader.readAsDataURL(fileInput.files[0]);
 					}
 				}
 			}
 			// ============================================================================================
 		</script>
 	</body>

 	</html>
 <?php
	} else {
		header("location:login.php");
		exit;
	}
	?>