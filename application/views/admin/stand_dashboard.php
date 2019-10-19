<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Stand Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a href="index.html"><img class="img-fluid" src="assets/img/Logo%20exfest.png" width="100"></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                </ul>
        </div>
            <a class="nav-link btn btn-outline-secondary" href="#">Logout</a>
        </div>
    </nav>
    <div class="container" id="content">
        <h2 class="text-center">Stand</h2>
        <form>
            <div class="form-group">
                <label>Nama Stand</label>
                <input class="form-control" type="text" name="nama-stand">
            </div>
            <hr>
            <div class="form-group">
                <label>Nama Produk</label>
                <input class="form-control" type="text" name="makanan1">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input class="form-control" type="text" name="harga-makanan1">
            </div>
            <div class="form-group">
                <label>Tempat</label>
                <input type="file">
            </div>
            <hr>
            <div class="text-center mb-5">
                <button class="btn btn-primary mr-1" type="button" data-toggle="modal" data-target="#modal-simpan">Simpan</button><a class="btn btn-outline-danger ml-1" href="dashboard.html">Kembali</a>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-simpan"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Simpan data stand?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Pilih batal jika data ingin membatalkan.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Simpan</button><button class="btn btn-light" type="button" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <nav class="navbar navbar-light navbar-expand-md" id="nav-footer">
        <div class="container-fluid"><a class="nav-link" href="stand.html">Dashboard</a><a class="nav-link" href="#">Peta</a></div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>