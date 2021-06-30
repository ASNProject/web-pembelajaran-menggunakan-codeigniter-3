<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-3.6.0.min.js'); ?>"></script>

    <style>
    body{
        background: url(assets/background.jpg);
    }
    .title1{
        text-align: center;
    }
    .gambar{
        background: url(assets/hadits2.jpg);
    }
    .gambar1{
        text-align: justify;
    }
    </style>

</head>
<body style="margin: 50px;">

<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="font-size: 40px;">Selamat Datang Admin</h1>
            <h6>Silahkan login dengan akun admin yang sudah terdaftar</h6>
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 style="font-weight: bold;">Login</h4   >
                </div>
                <br>
                <div class="panel-body ">
                    <form method="post" action="<?php echo base_url('login/aksi_login'); ?>">
                        <div class="row">
                            <div class="col-md12">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="username">Username</label>
                                    <input required id="username" class="form-control" type="text" name="username"></input>
                                </div>
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="col-md12">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="password">Password</label>
                                    <input required id="password" class="form-control" type="password" name="password"></input>
                                </div>
                            </div>
                        </div>
 
                        <br>
 
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <h1 class="title1" >Petunjuk Penggunaan</h1>
            <div class="d-flex justify-content-center">
            <div class="card gambar1" style="width: 18rem;">
                <img class="card-img-top" src="assets/hadist1.jpg">
                <div class="card-body">
                    <h5 class="card-title">Untuk Admin</h5>
                    <p class="card-text">Pertama kali silahkan admin membuat database terlebih dahulu dengan nama database ="db_hadits" table="hadits dan admin" </p>
                </div>
                <div class="card-body text-white bg-dark">
                    <p class="card-text font-italic ">Contact Person: 081234567890</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        var gagal = '<?php echo $this->session->gagal; ?>';
 
        if(gagal==1){
            alert('Username atau Password Salah');
        }
    })
</script>
</html>