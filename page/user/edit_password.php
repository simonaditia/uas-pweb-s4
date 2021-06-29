<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Password</h1>
            </div>
            <div class="col-sm-6">
                <div class="row justify-content-end">
                    <a href="javascript:history.back()"><button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-undo"></i> Kembali</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Edit Password</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Password</h3>
                    </div>
                    <?php
                    // include "../koneksi.php";
                    $iduser = $_GET['iduser'];
                    $dataa = mysqli_query($koneksi, "SELECT * FROM user WHERE iduser = '$iduser'");
                    while ($d = mysqli_fetch_array($dataa)) {
                    ?>
                        <form action="./index.php?page=proses_edit_password" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" value="<?php echo $d['iduser']; ?>" name="iduser">
                                <div class="form-group">
                                    <label for="passwordBaruId">Password Baru</label>
                                    <div class="input-group">
                                        <input type="password" name="password_baru" class="form-control" id="passwordBaruId" placeholder="Password Baru" maxlength="50" size="50" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPasswordId">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password_konfirmasi" class="form-control" id="confirmPasswordId" placeholder="Konfirmasi Password" maxlength="50" size="50" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>