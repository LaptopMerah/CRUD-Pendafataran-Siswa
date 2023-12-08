<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-10 m-auto">
                    <div class="card border-0 shadow">
                        <div for="validation" class="card-body">

                            <h4 class="text-center">Daftarkan diri anda dengan mengisi formulir ini!</h4>

                            <br>

                            <form for="validation" action="proses-pendaftaran.php" method="POST">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nama Lengkap" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
                                    <input type="text" name="alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Alamat" required>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-text">
                                        <input type="radio" value="laki-laki" name="jenis_kelamin" aria-label="Radio button for following text input">
                                    </div>
                                    <label class="form-control">Laki-laki</label>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input type="radio" value="perempuan" name="jenis_kelamin" aria-label="Radio button for following text input">
                                    </div>
                                    <label class="form-control">Perempuan</label>
                                </div>

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                                    <select class="form-select" id="inputGroupSelect01" name="agama">
                                        <option selected>Agama</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Sekolah Asal</span>
                                    <input type="text" name="sekolah_asal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Asal Sekolah" required>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-success" name="daftar">Register</button>
                                    <a href="index.php" class="btn btn-warning">Home</a>
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