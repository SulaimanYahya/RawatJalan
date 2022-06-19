<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="<?= base_url("PortalTheme/assets/plugins/fontawesome/js/all.min.js") ?>"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url("PortalTheme/assets/css/portal.css") ?>">

</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">

                <?= $this->renderSection('content') ?>

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                        <small class="copyright"><a class="app-link" href="<?= base_url('/') ?>" target="_blank"> &copy; Avian Shop | 2022</a></small>

                    </div>
                </footer>
                <!--//app-auth-footer-->
            </div>
            <!--//flex-column-->
        </div>
        <!-- //auth-main-col-->
        <!-- <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100">
                        <div class="auth-background-holder"></div>
                    </div>
                </div>
            </div> -->
        <!--//auth-background-overlay-->
        <!-- </div> -->
        <!--//auth-background-col -->

    </div>
    <!--//row-->


</body>

</html>