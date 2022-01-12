<?php
include '../controller/rental.php';


$ctrl =new rental();
$no_billing = $_GET['no_billing'];
$data = $ctrl->getData($no_billing);
$jaminan=$ctrl->getJenisData();





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center">Edit Billing</div>
                        </div>
                        <div class="card-body">
                            <form action="edit.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <small>No Billing</small>
                                            <input type="text" name="no_billing" id="no_billing" class="form-control" placeholder="WRS-001-2021" value="<?= $data['no_billing'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <small>Nama Penyewa</small>
                                            <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control" value="<?= $data['nama_penyewa'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <small>Alamat Peminjam</small>
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $data['alamat'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <small>Tanggal</small>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $data['tanggal'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>Lama Peminjaman</small>
                                            <input type="text" name="lama_peminjaman" id="lama_peminjaman" class="form-control" value="<?= $data['lama_peminjaman'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>Jaminan</small>
                                            <select name="jaminan" id="jaminan" class="form-control">
                                                <option value=""><?= $data['jaminan'] ?></option>
                                                <?php foreach ($jaminan as $val) { ?>
                                                    <option value="<?= $val['jaminan'] ?>"><?= $val['jaminan'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <button type="submit" name="submit" class="btn btn-info text-white"><i class="bi bi-pen"></i> Edit</button>
                                        <a href="view.php" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>