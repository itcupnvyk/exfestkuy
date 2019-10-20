    <div class="login-dark">
        <form method="post" action="<?= base_url('auth/createuser'); ?>">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Register Now !</button>
            </div>
            <a class="forgot" href="#">Forgot your email or password?</a>
            <a class="forgot" href="<?= base_url('auth'); ?>">back to login</a>
        </form>
    </div>