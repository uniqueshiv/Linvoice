<?php $__env->startSection('content'); ?>
<div class="container">

                    <form class="form-signin" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <h2 class="form-signin-heading">sign in now</h2>
                        <div class="login-wrap">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                         
                                <input id="email" type="email" class="form-control" placeholder="User ID" autofocus name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                         
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                           
                        </div>
                       <label class="checkbox">
                <input type="checkbox" name="remember" value="remember-me"> Remember me
                <span class="pull-right">
                    <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">  Forgot Password?</a>

                </span>
            </label>

                                <button type="submit" class="btn btn-lg btn-login btn-block">
                                    Login
                                </button>



                             </div>
                    </form>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>