<?php
 if ($_SESSION['level'] == 'admin'){
?>
<section class="text-center" >
    <div class="container">
        <h2 class="text-secondary">DATA SEKOLAH</h2>
        <br>
        <br>
        
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card text-white bg-info  mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-user-tie fa-3x mr-2 "></i> <span class="mr-3 font-weight-normal">
                            SISWA</span><br>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=siswa" class="text-light"><i class="fa fa-arrow-circle-right mr-2"></i>Lihat
                        Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class=" card-header bg-success">
                    <span>
                        <i class="fas fa-user-graduate fa-3x mr-2"></i> <span class="mr-3"> GURU</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=guru" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-book fa-3x mr-2"></i> <span class="mr-3"> MATAPELAJARAN</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=mapel" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-calendar fa-3x mr-2"></i> <span class="mr-3"> JADWAL</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=jadwal" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-school fa-3x mr-2"></i> <span class="mr-3"> KELAS</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=kelas" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-clock fa-3x mr-2"></i> <span class="mr-3"> WAKTU</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=waktu" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-graduation-cap fa-3x mr-2"></i> <span class="mr-3"> JURUSAN</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=jurusan" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-calendar-alt fa-3x mr-2"></i> <span class="mr-3"> HARI</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=hari" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>

    </div>
</section>


<?php
 }else if ($_SESSION['level'] == 'siswa'){
?>
<section class="jumbotron text-center" >
    <div class="container">
        <h2 class="text-secondary">DATA SEKOLAH</h2>
        <br>
        <br>
        
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class=" card-header bg-success">
                    <span>
                        <i class="fas fa-user-graduate fa-3x mr-2"></i> <span class="mr-3"> GURU</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=guru" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-book fa-3x mr-2"></i> <span class="mr-3"> MATAPELAJARAN</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=mapel" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-calendar fa-3x mr-2"></i> <span class="mr-3"> JADWAL</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=jadwal" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        
        <div class="col-sm-3" >
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-school fa-3x mr-2"></i> <span class="mr-3"> KELAS</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=kelas" class="text-light"><i
                            class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header bg-success">
                    <span>
                        <i class="fas fa-graduation-cap fa-3x mr-2"></i> <span class="mr-3"> JURUSAN</span>
                    </span>
                </div>
                <h6 class="m-2"> <a href="?page=jurusan" class="text-light">
                    <i class="fa fa-arrow-circle-right mr-2"></i>Lihat Selengkapnya</a> </h6>
            </div>
        </div>
        

    </div>
</section>


<?php
 }
?>