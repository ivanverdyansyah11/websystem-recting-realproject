<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="flasher-wrap w-100">
                                        <?php Flasher::flash(); ?>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="text-gray-900 mb-4 font-weight-bolder">Login Account</h1>
                                    </div>
                                    <form class="user" action="<?= BASEURL; ?>/login/loginAction" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Enter Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Enter Password" name="password">
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>