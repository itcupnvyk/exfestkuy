    <nav class="navbar navbar-light navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a href="<?= base_url('home'); ?>">
                <img class="img-fluid" src="<?= base_url('assets/img/Logo%20exfest.png'); ?>" width="100">
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
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
                <a class="text-decoration-none" href="#">
                    <i class="fas fa-search" data-toggle="modal" data-target="#modal-search"></i>
                </a>
            </div>
        </div>
    </nav>

    <div class="container" id="content">
        <h2 class="text-center my-4"><?= $user['name']; ?></h2>
        <?php foreach ($products as $product): ?>
        <div class="card mt-2 bg-light">
            <div class="card-body">
                <h4 class="card-title"><?= $product['product_name']; ?></h4>
                <?php if ($product['price'] != 0): ?>
                <h6 class="text-muted card-subtitle mb-2">Rp. <?= $product['price']; ?></h6>
                <?php endif; ?>
                <h6 class="text-muted card-subtitle mb-2"><?= $user['name']; ?></h6>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="row">
            <div class="col text-center">
                <a class="btn btn-outline-primary my-3" href="<?= base_url('stand/map/') . $user['id']; ?>">Lihat Posisi Stand</a>
            </div>
        </div>
    </div>

    <div class="footer-basic pt-1 pb-4">
        <footer class="mb-5">
            <p class="copyright">Powered by ANTHE and POSPERO</p>
        </footer>
    </div>