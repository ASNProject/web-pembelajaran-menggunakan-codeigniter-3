<!DOCTYPE html>
<html>

<head>
    <title>Pembelajaran Hadist</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <div class="card bg-primary">
            <div class="card-header text-white"><strong>Pembelajaran Hadits</strong>
                <a style="float: right;margin-bottom: 1px;" href="<?php echo base_url('login/logout'); ?>" class="btn btn-danger">Logout</a>
            </div>

        </div>
        <div style="margin-top: 10px;">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="col-md-12">
                                <button style="margin-bottom: 10px;" class="btn btn-success" data-toggle="modal" data-target="#modalTambah">Tambah Materi</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="col-md-12">
                                <button style="margin-bottom: 10px;" class="btn btn-success" data-toggle="modal" data-target="#modalSoal">Tambah Soal</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="col-md-12">
                            <a style="float: right;margin-bottom: 1px;" href="<?php echo base_url('login/lihatNilai'); ?>" class="btn btn-danger">Lihat Nilai</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <th style="width: 2%;">No</th>
                            <th style="width: 2%">Id</th>
                            <th style="width: 20%">Judul</th>
                            <th style="width: 55%">Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($hadits as $key => $data) :
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['isi']; ?></td>
                                <td><span><a class="btn btn-primary" href="<?php echo base_url('admin/editData/' . $data['id']) ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?php echo base_url('admin/deleteData/' . $data['id']) ?>">Delete</a>
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
    <div class="modal fade in" id="modalTambah">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Hadits</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url('admin/tambahData') ?>">
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

     <!-- Modal Soal-->
     <div class="modal fade in" id="modalSoal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Soal</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url('admin/tambahSoal') ?>">
                        <div class="form-group">
                            <label for="id">id_soal</label>
                            <input required="required" class="form-control" type="text" id="id" name="id_soal" />
                        </div>
                        <div class="form-group">
                            <label for="id">Soal</label>
                            <input required="required" class="form-control" type="text" id="id" name="soal" />
                        </div>
                        <div class="form-group">
                            <label for="id">Jawaban A</label>
                            <input required="required" class="form-control" type="text" id="id" name="a" />
                        </div>
                        <div class="form-group">
                            <label for="id">Jawaban B</label>
                            <input required="required" class="form-control" type="text" id="id" name="b" />
                        </div>
                        <div class="form-group">
                            <label for="id">Jawaban C</label>
                            <input required="required" class="form-control" type="text" id="id" name="c" />
                        </div>
                        <div class="form-group">
                            <label for="id">Jawaban D</label>
                            <input required="required" class="form-control" type="text" id="id" name="d" />
                        </div>
                        <div class="form-group">
                            <label for="id">Kunci Jawaban (isikan dengan huruf a/b/c/d)</label>
                            <input required="required" class="form-control" type="text" id="id" name="kcn_jawaban" />
                        </div>
                        <div class="form-group">
                            <label for="id">Aktif (Isi dengan Y/N)</label>
                            <input required="required" class="form-control" type="text" id="id" name="aktif" />
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