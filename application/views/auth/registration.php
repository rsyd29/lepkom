<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center" style="color: #136A38;">
                            <h1>Create an Account!</h1>
                        </div>
                        <hr>
                        <div class="text-center mb-4">
                            <img src="<?= base_url('assets/img/lepkom.jpg'); ?>" style="width: 204px;">
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/registration') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="npm" name="npm" placeholder="NPM" value="<?= set_value('npm'); ?>">
                                <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-user btn-block" style="background-color: #136A38; color: white;">
                                Register Account
                            </button>
                            <hr>
                        </form>
                        <!-- <div class="text-center">
                            <!-- <a class="small" href="forgot-password.html" style="color: #136A38;">Forgot Password?</a> -->
                        <!-- </div> -->
                        <div class="text-center">
                            <a class="small" href="index" style="color: #136A38;">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>