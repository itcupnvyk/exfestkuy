    <div class="login-dark">
        <form method="post" action="<?= base_url('auth/login'); ?>">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
                <a class="btn btn-dark btn-block" href="index.html">Home</a>
            </div>
            <a class="forgot" href="<?= base_url('auth/forgotpassword'); ?>">Forgot your password?</a>
            <a class="forgot" href="<?= base_url('auth/registration'); ?>">Didn't have an acount?</a>
        </form>
    </div>