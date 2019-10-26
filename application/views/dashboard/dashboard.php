   
    <nav class="navbar navbar-light navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a href="<?= base_url('home'); ?>"><img class="img-fluid" src="<?= base_url('assets/img/Logo%20exfest.png'); ?>" width="100"></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
            <a class="nav-link btn btn-outline-secondary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
    </nav>

    <div class="container" id="content">
        <h2 class="text-center my-4">Daftar Stand</h2>
        <ul class="list-group">
            <?php foreach ($users as $user): ?>
            <li class="list-group-item">
                <span><?= $user['name']; ?></span>
                <div class="mt-2">
                    <a class="btn btn-primary" href="<?= base_url('dashboard/stand/') . $user['id']; ?>">Edit</a>
                    <a class="btn btn-outline-danger ml-1" href="<?= base_url('dashboard/products/') . $user['id']; ?>">Product</a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="text-right fixed-bottom" id="button-plus">
        <a class="text-decoration-none" href="#"><i class="icon-plus"></i></a>
    </div>