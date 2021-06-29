<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Guru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Guru</li>
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
                        <a href="index.php?page=tambah_guru" class="btn btn-md btn-success" style="margin-bottom: 10px;">Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="iniDiv">
                        <table id="example1" class="table table-bordered table-striped tableGuru">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nip</th>
                                    <th>Nama Guru</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No.HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "../koneksi.php";
                                $data = mysqli_query($koneksi, "SELECT * FROM guru");
                                $no = 1;
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nip']; ?></td>
                                        <td><?php echo $d['nama_guru']; ?></td>
                                        <td>
                                            <?php
                                            if ($d['jk'] == "L") {
                                                echo "Laki-laki";
                                            } else {
                                                echo "Perempuan";
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $d['hp']; ?></td>
                                        <td class="text-center">
                                            <a href="./index.php?page=edit_guru&nip=<?php echo $d['nip']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <button class="btn btn-sm btn-danger hapus-data">Hapus</button>
                                            <input type="hidden" class="the_nip" value='<?php echo $d['nip']; ?>'>
                                            <a href="./index.php?page=cetak_guru&nip=<?php echo $d['nip']; ?>" class="btn btn-sm btn-warning" target="_blank">Cetak</a>
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
    $('.tableGuru').on("click", ".hapus-data", function(e) {
        // alert($(this).closest('td').find('.the_nip').val());
        var id = $(this).closest('td').find('.the_nip').val();
        console.log(id);
        console.log('index.php?page=hapus_guru&nip=' + id);
        swal({
                title: "Apakah anda yakin?",
                text: "Ingin menghapus data Guru dengan Nip " + id,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Sukses! Data berhasil terhapus!", {
                        icon: "success",
                    }).then(function() {
                        window.location.href = "index.php?page=hapus_guru&nip=" + id;
                    });
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });

    });
</script>