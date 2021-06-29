<?php $page = "Siswa";
// var_dump($page);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Siswa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Siswa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <!-- <h3 class="card-title">Data Siswa</h3> -->
                        <!-- <br> -->
                        <a href="index.php?page=tambah_siswa" class="btn btn-md btn-success" style="margin-bottom: 10px;">Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="iniDiv">
                        <table id="example1" class="table table-bordered table-striped tableSiswa">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nis</th>
                                    <th>Nama</th>
                                    <th>Nip</th>
                                    <th>Nama Guru</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "../koneksi.php";
                                $data = mysqli_query($koneksi, "SELECT * FROM siswa");
                                $no = 1;
                                while ($d = mysqli_fetch_array($data)) {
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$d[nip]'");
                                    $r = mysqli_fetch_array($tampil);
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nis']; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['nip']; ?></td>
                                        <td><?php echo $r['nama_guru']; ?></td>
                                        <td class="text-center">
                                            <a href="./index.php?page=edit_siswa&nis=<?php echo $d['nis']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <button class="btn btn-sm btn-danger hapus-data">Hapus</button>
                                            <input type="hidden" class="the_nis" value='<?php echo $d['nis']; ?>'>
                                            <a href="./index.php?page=cetak_siswa&nis=<?php echo $d['nis']; ?>" class="btn btn-sm btn-warning" target="_blank">Cetak</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<script>
    // $('.quick-update-order-product').click(function() {
    //     var trId = $(this).closest('tr').attr('id')
    // });
    // $('#iniDiv').on('click', '.quick-update-order-product', function() {
    //     var id = jQuery(this).closest('tr').attr('id');
    //     alert(id);
    // });

    // $('.hapus-data').click(function(e) {
    $('.tableSiswa').on("click", ".hapus-data", function(e) {
        // alert($(this).closest('td').find('.the_nis').val());
        var id = $(this).closest('td').find('.the_nis').val();
        console.log(id);
        console.log('index.php?page=hapus_siswa&nis=' + id);
        swal({
                title: "Apakah anda yakin?",
                text: "Ingin menghapus data Siswa dengan Nis " + id,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Sukses! Data berhasil terhapus!", {
                        icon: "success",
                    }).then(function() {
                        window.location.href = "index.php?page=hapus_siswa&nis=" + id;
                    });
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });

    });
</script>