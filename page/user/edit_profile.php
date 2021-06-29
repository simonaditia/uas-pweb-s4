<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data</h1>
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
                    <li class="breadcrumb-item active">Edit user</li>
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
                        <h3 class="card-title">Edit Data User</h3>
                    </div>
                    <?php
                    // include "../koneksi.php";
                    $iduser = $_GET['iduser'];
                    $dataa = mysqli_query($koneksi, "SELECT * FROM user WHERE iduser = '$iduser'");
                    while ($d = mysqli_fetch_array($dataa)) {
                    ?>
                        <form action="./index.php?page=proses_edit_profile" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" value="<?php echo $d['iduser']; ?>" name="iduser">
                                <div class="form-group">
                                    <label for="usernameId">Username</label>
                                    <div class="input-group">
                                        <input type="text" name="username" value="<?php echo $d['username']; ?>" class="form-control" id="usernameId" placeholder="Username" maxlength="10" size="10" required auto-focus>
                                    </div>
                                </div>
                                <input type="hidden" name="password" value="<?php echo $d['password']; ?>" class="form-control" id="passwordId" placeholder="Password" maxlength="50" size="50">
                                <div class="form-group">
                                    <label for="namaUserId">Nama</label>
                                    <div class="input-group">
                                        <input type="text" name="nama_user" value="<?php echo $d['nama_user']; ?>" class="form-control" id="namaUserId" placeholder="Nama" maxlength="50" size="50" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fotoId">Foto Profile</label>
                                    <small class="text-red">(Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif)</small>
                                    <div class="custom-file">
                                        <input type="file" name="foto" value="./assets/gambar/<?php echo $d['foto']; ?>" class="custom-file-input" id="fotoId">
                                        <label class="custom-file-label" for="fotoId"><?php echo $d['foto']; ?></label>
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