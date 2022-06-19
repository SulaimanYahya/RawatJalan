<?= $this->extend('template_auth') ?>
<?= $this->section('content'); ?>

<div class="app-auth-body mx-auto">
    <div class="app-auth-branding mb-4">
        <a class="app-logo" href="<?= base_url("Auth") ?>">
            <!-- <img class="logo-icon" src="<?= base_url("PortalTheme/assets/images/logo1.png") ?>" alt="logo"> -->
        </a>
    </div>
    <div class="auth-form-container text-start" style="margin-top: 100px;">
        <!-- <img class="logo-icon" src="<?= base_url("PortalTheme/assets/images/logo1.png") ?>" alt="logo"> -->

        <h2 class="auth-heading text-center mb-3">Halaman Login</h2>
        <form class="auth-form login-form" method="POST" action="<?= base_url("Auth/login") ?>">
            <?php if (session()->getFlashdata('msg')) { ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            <?php } ?>
            <?= csrf_field() ?>
            <div class="email mb-3">
                <label class="sr-only" for="username">Email</label>
                <input id="username" name="username" type="text" class="form-control signin-email <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" placeholder="Username" autocomplete="off" value="<?= old('username'); ?>">
                <div id="validationServer03Feedback" class="invalid-feedback" value="<?= old('username'); ?>">
                    <?= $validation->getError('username') ?>
                </div>
            </div>
            <!--//form-group-->
            <div class="password mb-3">
                <label class="sr-only" for="password">Password</label>
                <input id="password" name="password" type="password" class="form-control signin-password <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" placeholder="Password" autocomplete="off" value="<?= old('password') ?>">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('password') ?>
                </div>
            </div>
            <!--//form-group-->
            <div class="text-center col-12 row">
                <div class="col">
                    <a href="<?= base_url('/') ?>" class="btn btn-danger theme-btn mx-auto text-white">
                        C A N C E L
                    </a>
                </div>
                <div class="col">
                    <button type="submit" class="btn app-btn-primary theme-btn mx-auto">L O G I N</button>
                </div>
            </div>
        </form>
    </div>
    <!--//auth-form-container-->

</div>
<!--//auth-body-->
<?= $this->endSection(); ?>