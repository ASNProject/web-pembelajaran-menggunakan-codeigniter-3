<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body{
        background: url(<?php echo base_url('assets/background.jpg') ?>);
        
    }
    .title1{
        margin-right: 200px;
        margin-left: 200px;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="card bg-dark">
        <div class="card-header text-white"><strong>Hadits Arbain Nawawi</strong>
        </div>
        
    </div>
</div>
<br>
    <h1 class="text-center">Hadits Of The Day</h1>
    <h6 class="text-center title1">Dari Abu Ruqayyah Tamim bin Aus Ad Dari radhiyallahu ‘anhu, dia berkata: “Sesungguhnya Rasulullah shallallahu ‘alaihi wa sallam bersabda: ”Agama itu nasihat.” Kami bertanya: ”Untuk siapa?” Beliau shallallahu ‘alaihi wa sallam menjawab: ”Untuk Allah, untuk kitab-Nya, untuk Rasul-Nya, untuk pemimpin kaum muslimin dan seluruh kaum muslimin.”</h6>
    <br>
        <div class="container d-flex justify-content-center">
            <div class="row h-100">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('assets/hadist1.jpg') ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Materi Hadits</h5>
                            <p class="card-text">Isilah sesuatu keterangan disini</p>
                            <a href="<?php echo base_url('login/lihatData') ?>" class="btn btn-primary">Lihat Selengkapnya</a> 
                        </div>
        
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top;" src="<?php echo base_url('assets/hadist1.jpg') ?>">
                        <div class="card-body">
                            <h5 class="card-title">Latihan Soal</h5>
                            <p class="card-text">Isilah sesuatu keterangan disini</p>
                            <button style="margin-bottom: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#modalIdentitas">Mulai Latihan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!-- Modal Tambah-->
   <div class="modal fade in" id="modalIdentitas">
      <div class="modal-dialog">
        <div class="modal-content">
 
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Hadits</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
 
          <!-- Modal body -->
          <div class="modal-body">
            <form method="post" action="<?php echo base_url('login/tambahIdentitas') ?>">
                <div class="form-group">
                    <label for="ids">Id</label>
                    <input required="required" class="form-control" type="text" id="ids" name="id" />
                </div>
                <div class="form-group">
                    <label for="ids">Nama</label>
                    <input required="required" class="form-control" type="text" id="ids" name="nama" />
                </div>
                <div class="form-group">
                    <label for="ids">Kelas</label>
                    <input required="required" class="form-control" type="text" id="ids" name="kelas" />
                </div>
          </div>
 
          <!-- Modal footer -->
          <div class="modal-footer">
            <button class="btn btn-success" type="submit">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
           </form>
        </div>
      </div>
    </div>
</body>
</html>