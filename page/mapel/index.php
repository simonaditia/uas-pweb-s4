<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Mapel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Mapel</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=tambah_mapel" class="btn btn-md btn-success" style="margin-bottom: 10px;">Tambah Data</a>
                    </div>
                    <div class="card-body" id="iniDiv">
                        <table id="example1" class="table table-bordered table-striped tableMapel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Mata Pelajaran</th>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "../koneksi.php";
                                $data = mysqli_query($koneksi, "SELECT * FROM mapel");
                                $no = 1;
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['kd_mapel']; ?></td>
                                        <td><?php echo $d['nama_mapel']; ?></td>
                                        <td class="text-center">
                                            <a href="./index.php?page=edit_mapel&kd_mapel=<?php echo $d['kd_mapel']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <button class="btn btn-sm btn-danger hapus-data">Hapus</button>
                                            <input type="hidden" class="the_mapel" value='<?php echo $d['kd_mapel']; ?>'>
                                            <a href="./index.php?page=cetak_mapel&kd_mapel=<?php echo $d['kd_mapel']; ?>" class="btn btn-sm btn-warning" target="_blank">Cetak</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // $('.hapus-data').click(function(e) {
    $('.tableMapel').on("click", ".hapus-data", function(e) {
        var id = $(this).closest('td').find('.the_mapel').val();
        console.log(id);
        console.log('index.php?page=hapus_mapel&kd_mapel=' + id);
        swal({
                title: "Apakah anda yakin?",
                text: "Ingin menghapus data Mapel dengan Kode Mapel " + id,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Sukses! Data berhasil terhapus!", {
                        icon: "success",
                    }).then(function() {
                        window.location.href = "index.php?page=hapus_mapel&kd_mapel=" + id;
                    });
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });

    });
</script>