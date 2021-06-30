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
        body {
            background: url(<?php echo base_url('assets/background.jpg') ?>);

        }

        .circle {
            background: green;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            margin: 5px;
            overflow: hidden;
            padding: 25px;
            position: relative;
            margin-left: auto;
            margin-right: auto;
        }

        .text {
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            color: #FFFFFF;
            font-size: 50px;
        }

        a {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card bg-dark">
            <div class="card-header text-white"><strong>Hadits Arbani Nawawi</strong></div>
        </div>
    </div>
    <br>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white font-weight-bold">Score Hasil Latihan Soal</div>
                <div class="card-body">
                    <h4 class="text-center">Hai <?php echo $this->session->userdata("nama"); ?></h4>
                    <h4 class="text-center">Kamu mendapat score:</h4>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db = "db_hadits";
                    $koneksi = mysqli_connect($servername, $username, $password, $db);
                    if (!$koneksi) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    if (isset($response)) {
                        $pilihan = $response["pilihan"];
                        $id_soal = $response["id"];
                        $jumlah = $response['jumlah'];

                        $score = 0;
                        $benar = 0;
                        $salah = 0;
                        $kosong = 0;

                        for ($i = 0; $i < $jumlah; $i++) {
                            //id nomor soal
                            $nomor = $id_soal[$i];

                            //jika user tidak memilih jawaban
                            if (empty($pilihan[$nomor])) {
                                $kosong++;
                            } else {
                                //jawaban dari user
                                $jawaban = $pilihan[$nomor];

                                //cocokan jawaban user dengan jawaban di database
                                $query = mysqli_query($koneksi, "select * from tb_soal where id_soal='$nomor' and kcn_jawaban='$jawaban'");

                                $cek = mysqli_num_rows($query);

                                if ($cek) {
                                    //jika jawaban cocok (benar)
                                    $benar++;
                                } else {
                                    //jika salah
                                    $salah++;
                                }
                            }
                            /*RUMUS
                        Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                        hasil= 100 / jumlah soal * jawaban yang benar
                        */

                            $result = mysqli_query($koneksi, "select * from tb_soal WHERE aktif='Y'");
                            $jumlah_soal = mysqli_num_rows($result);
                            $score = 100 / $jumlah_soal * $benar;
                            $hasil = number_format($score, 1);
                        }
                    }
                    echo "
         <tr><td>Jawaban Benar</td><td> : $benar </td></tr>
         <tr><td>,Salah</td><td> : $salah</td></tr>
         <tr><td>,Tidak Menjawab</td><td>: $kosong</td></tr>
        </table></div>";
                    echo "
        <div class='circle'>
            <div class='text'>$hasil</div>
        </div>
        ";
                    echo "
        <br>
        ";
                    ?>
                    <div class="d-flex justify-content-center">
                    <form  class="align-center" method="post" action="<?php echo base_url('login/tambahNilai') ?>">
                    <input type="hidden" name="id" value=<?php echo $this->session->userdata("ids"); ?>>
                    <input type="hidden" name="nama" value=<?php echo $this->session->userdata("nama"); ?>>
                    <input type="hidden" name="kelas" value=<?php echo $this->session->userdata("kelas"); ?>>
                    <input type="hidden" name="nilai" value=<?php echo $hasil; ?>>
                    <button class="btn btn-primary align-center" type="submit">Selesai</button>
                    <br>
                    </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>

    </div>

</body>