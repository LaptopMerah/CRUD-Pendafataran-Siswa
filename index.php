<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header class="text-center">
        <h3 class="mt-5">Pendaftaran Siswa Baru</h3>
        <h1 class="m-3">Kursus Media Digital</h1>
    </header>

    <div class="container p-5 text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="height: 10rem">
                    <div class="card-body d-flex flex-column  align-items-center justify-content-center">
                        <h5 class="card-title">Daftarkan diri anda sekarang</h5>
                        <a href="form-daftar.php" class="btn btn-primary">Daftar Baru</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="height: 10rem">
                    <div class="card-body d-flex flex-column  align-items-center justify-content-center">
                        <h5 class="card-title">Lihat yang sudah mendaftar</h5>
                        <a href="list-siswa.php" class="btn btn-primary">Pendaftar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <?php if (isset($_GET['status'])) : ?>
        <script>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Swal.fire({icon:'success',title:'Berhasil Mendaftarkan',text:'Siswa Berhasil registrasi'})";
            } else {
                echo "Swal.fire({icon:'error',title:'Terjadi Error',text:'Gagal melakukan pendaftaran'})";
            }
            ?>
        </script>
    <?php endif; ?>

</body>

</html>