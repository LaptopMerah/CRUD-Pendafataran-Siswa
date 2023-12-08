<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-10 m-auto">
                    <div class="card border-0 shadow">
                        <div for="validation" class="card-body">

                            <h4 class="text-center">Formulir Edit Siswa</h4>

                            <br>

                            <form action="proses-edit.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
                                    <input type="text" name="alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Alamat" value="<?php echo $siswa['alamat'] ?>" />
                                </div>

                                <?php $jk = $siswa['jenis_kelamin']; ?>

                                <div class="input-group">
                                    <div class="input-group-text">
                                        <input type="radio" value="laki-laki" name="jenis_kelamin" aria-label="Radio button for following text input" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>>
                                    </div>
                                    <label class="form-control">Laki-laki</label>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input type="radio" value="perempuan" name="jenis_kelamin" aria-label="Radio button for following text input" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>>
                                    </div>
                                    <label class="form-control">Perempuan</label>
                                </div>

                                <div class="input-group mb-3">
                                    <?php $agama = $siswa['agama']; ?>

                                    <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                                    <select class="form-select" id="inputGroupSelect01" name="agama">
                                        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                                        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                                        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                                        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                                        <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Sekolah Asal</span>
                                    <input type="text" name="sekolah_asal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Asal Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Simpan" name="simpan" class="btn btn-warning " />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>