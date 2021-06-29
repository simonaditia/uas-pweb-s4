<?php

include "./config/koneksi.php";
error_reporting(error_reporting() & ~E_NOTICE);

// menu dashboard
if ($_GET['page'] == "dashboard") {
    include "page/dashboard/index.php";
}

// menu siswa
else if ($_GET['page'] == "data_siswa") {
    include "page/siswa/index.php";
} else if ($_GET['page'] == "tambah_siswa") {
    include "page/siswa/tambah.php";
} else if ($_GET['page'] == "proses_tambah_siswa") {
    include "page/siswa/proses_tambah.php";
} else if ($_GET['page'] == "edit_siswa") {
    include "page/siswa/edit.php";
} else if ($_GET['page'] == "proses_edit_siswa") {
    include "page/siswa/proses_edit.php";
} else if ($_GET['page'] == "hapus_siswa") {
    include "page/siswa/hapus.php";
}

// menu guru
else if ($_GET['page'] == "data_guru") {
    include "page/guru/index.php";
} else if ($_GET['page'] == "tambah_guru") {
    include "page/guru/tambah.php";
} else if ($_GET['page'] == "proses_tambah_guru") {
    include "page/guru/proses_tambah.php";
} else if ($_GET['page'] == "edit_guru") {
    include "page/guru/edit.php";
} else if ($_GET['page'] == "proses_edit_guru") {
    include "page/guru/proses_edit.php";
} else if ($_GET['page'] == "hapus_guru") {
    include "page/guru/hapus.php";
}

// menu mapel
else if ($_GET['page'] == "data_mapel") {
    include "page/mapel/index.php";
} else if ($_GET['page'] == "tambah_mapel") {
    include "page/mapel/tambah.php";
} else if ($_GET['page'] == "proses_tambah_mapel") {
    include "page/mapel/proses_tambah.php";
} else if ($_GET['page'] == "edit_mapel") {
    include "page/mapel/edit.php";
} else if ($_GET['page'] == "proses_edit_mapel") {
    include "page/mapel/proses_edit.php";
} else if ($_GET['page'] == "hapus_mapel") {
    include "page/mapel/hapus.php";
}

// menu nilai
else if ($_GET['page'] == "data_nilai") {
    include "page/nilai/index.php";
} else if ($_GET['page'] == "tambah_nilai") {
    include "page/nilai/tambah.php";
} else if ($_GET['page'] == "proses_tambah_nilai") {
    include "page/nilai/proses_tambah.php";
} else if ($_GET['page'] == "edit_nilai") {
    include "page/nilai/edit.php";
} else if ($_GET['page'] == "proses_edit_nilai") {
    include "page/nilai/proses_edit.php";
} else if ($_GET['page'] == "hapus_nilai") {
    include "page/nilai/hapus.php";
}

// menu user
else if ($_GET['page'] == "edit_profile") {
    include "page/user/edit_profile.php";
} else if ($_GET['page'] == "proses_edit_profile") {
    include "page/user/proses_edit_profile.php";
} else if ($_GET['page'] == "edit_password_user") {
    include "page/user/edit_password.php";
} else if ($_GET['page'] == "proses_edit_password") {
    include "page/user/proses_edit_password.php";
}

// menu cetak
else if ($_GET['page'] == "cetak_siswa") {
    include "page/siswa/cetak.php";
} else if ($_GET['page'] == "cetak_guru") {
    include "page/guru/cetak.php";
} else if ($_GET['page'] == "cetak_mapel") {
    include "page/mapel/cetak.php";
} else if ($_GET['page'] == "cetak_nilai") {
    include "page/nilai/cetak.php";
}

// halaman 404
else {
    include "page/404/404.php";
}
