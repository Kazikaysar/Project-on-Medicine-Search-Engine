<?php $__env->startSection('title', '| Homepage'); ?>

<?php $__env->startSection('content'); ?>
        
       <div class="row">
            <div class="col-md-12">
                <?php if(Auth::check()): ?>
                        
                        <div class="jumbotron" >
                            Welcome <?php echo e(Auth::user()->name); ?>

                        </div>

                          <?php else: ?>

                            <div class="jumbotron" >
                                <a href="<?php echo e(route('login')); ?>" class="btn btn-default">Login</a>
                                <hr/>
                                <hr/>
                                
                            </div>
                          <?php endif; ?>
                
                
            </div>
        </div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>