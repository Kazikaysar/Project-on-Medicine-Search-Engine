<?php $__env->startSection('title', '| Homepage'); ?>

<?php $__env->startSection('content'); ?>
<section>
                
                <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                <?php echo Form::open(array('files'=>true)); ?>

                                        <?php echo e(Form::label('medicine_name', "Diseases Name:")); ?>

                                        <?php echo e(Form::text('medicine_name', null, ['class' => 'form-control'])); ?>

                                    
                                        <?php echo e(Form::label('syndrome_id',"Syndrome")); ?>

                                        <select class="form-control" name="syndrome_id">
					<?php foreach($add_syndrome as $syndrome): ?>
						<option value='<?php echo e($syndrome->id); ?>'><?php echo e($syndrome->syndrome_name); ?></option>
					<?php endforeach; ?>

                                        </select>

                                        <?php echo e(Form::submit('ADD', ['class' => 'btn btn-primary btn-block form-spacing-top'])); ?>


                                <?php echo Form::close(); ?>

                        </div>
                        
                          
                </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>