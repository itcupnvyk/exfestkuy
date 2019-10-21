    <div class="login-dark">
        <form method="post" action="<?= base_url('auth/resetpassword/' . $id); ?>">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group">
                <?= $this->session->flashdata('notif'); ?>
                <label>Enter your new password</label>
                <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                <label class="mt-3">Re-enter password</label>
                <input class="form-control" id="re-enter-password" type="password" name="re-enter-password" placeholder="Re-enter Password">
            </div>
            <div class="form-group">
                <span id="message"></span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Set Password</button>
            </div>
        </form>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#password, #re-enter-password').on('keyup', function () {
                if($('#password').val() == $('#re-enter-password').val()) {
                $('#message').html('Password sama').css('color', 'green');
                }
                else {
                $('#message').html('Password berbeda').css('color', 'red');
                }
            })
        });
    </script>