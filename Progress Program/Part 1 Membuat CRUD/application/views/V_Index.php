<!DOCTYPE html>
<html>
<head>
    <title>Pembelajaran Hadist</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
    <div class="container">
 
    <div class="card bg-primary">
        <div class="card-header"><strong>Pembelajaran Hadits</strong></div>
    </div>
        <div style="margin-top: 10px;">
            <button style="float: right;margin-bottom: 10px;" class="btn btn-success" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 10%">Id</th>
                            <th>Judul</th>
                            <th>Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=0;
                            foreach ($hadits as $key => $data):
                                $no++;
                         ?>
                         <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['isi']; ?></td>
                            <td><span><a class="btn btn-primary" href="<?php echo base_url('C_Index/editData/'.$data['id']) ?>">Edit</a>
                                      <a class="btn btn-danger" href="<?php echo base_url('C_Index/deleteData/'.$data['id']) ?>">Delete</a>
                                </span>
                            </td>
                         </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
 
    <!-- Modal Tambah-->
    <div class="modal fade" id="modalTambah">
      <div class="modal-dialog">
        <div class="modal-content">
 
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Hadits</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
 
          <!-- Modal body -->
          <div class="modal-body">
            <form method="post" action="<?php echo base_url('C_Index/tambahData') ?>">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input required="required" class="form-control" type="text" id="id" name="id" />
                </div>
                <div class="form-group">
                    <label for="id">Judul</label>
                    <input required="required" class="form-control" type="text" id="id" name="judul" />
                </div>
                <div class="form-group">
                    <label for="id">Isi</label>
                    <input required="required" class="form-control" type="text" id="id" name="isi" />
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