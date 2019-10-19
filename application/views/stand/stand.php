<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Exfeskuy</title>
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
            <a href="index.php"><img class="img-fluid" src="assets/img/Logo%20exfest.png" width="100"></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="stand.php">Stand</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="product.php">Produk</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#">Peta</a>
                    </li>
                </ul>
        </div>
        <div class="text-right" id="button-search">
            <a class="text-decoration-none" href="#"><i class="fas fa-search" data-toggle="modal" data-target="#modal-search"></i></a>
        </div>
        </div>
    </nav>

    <div class="container" id="content">
        <h2 class="text-center my-4">Daftar Stand</h2>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand pertama</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand kedua</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand ketiga</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand keempat</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand kelima</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand keenam</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand ketujuh</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand kedelapan</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand kesembilan</h4>
                </div>
            </div>
        </a>
        <a href="stand_detail.php">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title">Stand kesepuluh</h4>
                </div>
            </div>
        </a>
    </div>

    <nav class="mt-3">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
        </ul>
    </nav>

    <div class="modal fade" role="dialog" tabindex="-1" id="modal-search">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nama stand yang ingin dicari</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search-input" placeholder="ketik disini">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="button">Cari</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic pt-1 pb-4">
        <footer class="mb-5">
            <p class="copyright">Powered by ANTHE and POSPERO</p>
        </footer>
    </div>

    <!-- Nav when opened on phone -->
    <nav class="navbar navbar-light navbar-expand-md" id="nav-footer">
        <div class="container-fluid">
            <a class="nav-link" href="stand.php">Stand</a>
            <a class="nav-link" href="product.php">Produk</a>
            <a class="nav-link" href="#">Peta</a>
        </div>
    </nav>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>