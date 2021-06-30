<!DOCTYPE html>
<html>
<head>
    <title>Pembelajaran Hadist</title>
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
<div class="card bg-primary">
        <div class="card-header text-white"><strong>Pembelajaran Hadits</strong>
        <a style="float: right;margin-bottom: 1px;" href="<?php echo base_url('login/bukaDashboard'); ?>" class="btn btn-danger">Dashboard</a>
        </div>
        
    </div>
    <br>
<h1 class="text-sm-center">Materi Hadist</h1>
<br>
<div class="container fa-align-left">


<div class="card-transparent mb-3 " style="max-width: 560px">
    <?php 
            foreach ($hadits as $key => $data):
            ?>
        <div class="row no-gutters">
            <div class="col-md-4 mb-3">
                <img class="card-img" src="<?php echo base_url('assets/hadist1.jpg'); ?>">
            </div>
            <br>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['judul']; ?></h5>
                    <a href="#" class="btn btn-primary stretched-link">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
    
    
</body>