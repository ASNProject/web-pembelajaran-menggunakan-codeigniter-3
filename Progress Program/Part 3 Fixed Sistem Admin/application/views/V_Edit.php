<!DOCTYPE html>
<html>
<head>
<title>Edit Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
</head>
<body>
    <div class="container" style="margin: 20px;">
        <div class="card">
            <div class="card-header bg-primary">
                <strong>Edit Hadits</strong>
            </div>
            <div class="card-body">
                <?php foreach ($hadits_edit as $key => $data): ?>
                <form method="post" action="<?php echo base_url('admin/updateData/'.$data['id']) ?>">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input readonly="readonly" type="text" name="id" id="id" class="form-control" value="<?php echo $data['id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" value="<?php echo $data['judul'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <input type="text" name="isi" id="isi" class="form-control" value="<?php echo $data['isi'] ?>" />
                    </div>
                    <button class="btn btn-success" type="submit" onclick="return confirm('Yakin data anda sudah benar?')">Submit</button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>">Batal</a>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>