    
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
                        <a class="nav-link active" href="<?= base_url('stand'); ?>">Stand</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?= base_url('product'); ?>">Produk</a>
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
        <h2 class="text-center my-4">Daftar Stand</h2>
        <?php foreach($users as $user): ?>
            <?php if ($user['role_id'] == 2): ?>
            <a href="<?= base_url('stand/detail/') . $user['id']; ?>">
                <div class="card mt-2 bg-light">
                    <div class="card-body">
                        <h4 class="card-title"><?= $user['name']; ?></h4>
                    </div>
                </div>
            </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <?php if($pagination): ?>
    <div class="row mt-3">
        <div class="col">
            <?php echo $pagination; ?>
        </div>
    </div>
    <?php endif ?>

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
                    <form class="form-group" action="<?= base_url('stand') . '/search'; ?>" method="post">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" class="form-control" name="search-input" placeholder="ketik disini">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-basic pt-1 pb-4">
        <footer class="mb-5">
            <p class="copyright">Powered by ANTHE and POSPERO</p>
        </footer>
    </div>