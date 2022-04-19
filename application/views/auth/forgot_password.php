<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main>

<section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="container pt-lg-md">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card bg-secondary shadow border-0">

                    <!-- Forgot password Card -->
                    <div class="card-body px-lg-5 py-lg-5">

                        <div class="text-center text-muted mb-4">
                            <p><?php echo lang('users_forgot') ?></p>
                        </div>
                        
                        <?php echo form_open('auth/forgot_password', array('class'=>'', 'id'=>'form_login')); ?>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input class="form-control" name="identity" id="identity" placeholder="<?php echo lang('users_email') ?>" type="email" value="<?php echo set_value('identity', (isset($user['identity']) ? $user['identity'] : '')) ?>" required>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo lang('action_submit'); ?></button>
                            </div>
                        <?php echo form_close(); ?>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="<?php echo site_url('login') ?>" class="text-light">
                            <small><?php echo lang('users_login_back') ?></small>
                        </a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="<?php echo site_url('register') ?>" class="text-light">
                            <small><?php echo lang('users_register_account') ?></small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>