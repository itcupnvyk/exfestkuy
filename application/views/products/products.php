    <nav class="navbar navbar-light navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a href="<?= base_url('home'); ?>"><img class="img-fluid" src="<?= base_url('assets/img/Logo%20exfest.png'); ?>" width="100"></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?= base_url('stand'); ?>">Stand</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="<?= base_url('product'); ?>">Produk</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?= base_url('map'); ?>">Peta</a>
                    </li>
                </ul>
            </div>
            <div class="text-right" id="button-search">
                <a class="text-decoration-none" href="#"><i class="fas fa-search" data-toggle="modal" data-target="#modal-search"></i></a>
            </div>
        </div>
    </nav>

    <div class="container" id="content">
        <h2 class="text-center my-4">Daftar Produk</h2>
        <?php foreach ($products as $product): ?>
        <a href="<?= base_url('product/product_detail/') . $product['user_id'] . '/' . $product['product_id']; ?>">
            <div class="card mt-2 bg-light">
                <div class="card-body">
                    <h4 class="card-title"><?= $product['product_name']; ?></h4>
                    <h6 class="text-muted card-subtitle mb-2"><?= $product['price']; ?></h6>
                    <h6 class="text-muted card-subtitle mb-2"><?= $product['user_name']; ?></h6>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
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
                    <h4 class="modal-title">Produk apa yang ingin dicari</h4>
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