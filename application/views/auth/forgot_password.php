    <div class="login-dark">
        <form method="post" action="<?= base_url('auth/setpassword'); ?>">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group">
                <?= $this->session->flashdata('notif'); ?>
                <label>Enter you email</label>
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Search</button>
            </div>
        </form>
    </div>