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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Kerjakan Soal Dibawah Ini!</div>
                    <div class="card-body">
                        <?php
                        // koneksi ke mysqli
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $db = "db_hadits";
                        // Create connection
                        $koneksi = mysqli_connect($servername, $username, $password, $db);
                        // Check connection
                        if (!$koneksi) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
                        echo '<table width="100%" border="0">';
                        

                        $hasil = mysqli_query($koneksi, "select * from tb_soal WHERE aktif='Y' ORDER BY RAND ()");
                        $jumlah = mysqli_num_rows($hasil);
                        $urut = 0;
                        while ($row = mysqli_fetch_array($hasil)) {
                            $id = $row["id_soal"];
                            $pertanyaan = $row["soal"];
                            $pilihan_a = $row["a"];
                            $pilihan_b = $row["b"];
                            $pilihan_c = $row["c"];
                            $pilihan_d = $row["d"];

                        ?>
                            <form name="form1" method="post" action="<?php echo base_url('login/jawabs'); ?>">
                                <input type="hidden" name="id[]" value=<?php echo $id; ?>>
                                <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                                <tr>
                                    <td width="17"><?php echo $urut = $urut + 1; ?></td>
                                    <td width="430"><?php echo "$pertanyaan"; ?></td>
                                </tr>
                                <?php
                                if (!empty($row["gambar"])) {
                                    echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
                                }
                                ?>
                                <tr>
                                    <td height="21">&nbsp;</td>
                                    <td>
                                        A. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A">
                                        <?php echo "$pilihan_a"; ?> </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B">
                                        <?php echo "$pilihan_b"; ?></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        C. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C">
                                        <?php echo "$pilihan_c"; ?></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        D. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D">
                                        <?php echo "$pilihan_d"; ?></td>
                                </tr>
                            <?php

                        }
                            ?>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">

                            </tr>
                            </table>
                            </form>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>