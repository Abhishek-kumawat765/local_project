
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between  mb-3">
        <h1></h1>
        <a href="<?php echo e(url('addDhanVenture')); ?>" class="btn btn-info btn-sm"> <i class="fa fa-plus"> </i> Add</a>
        <h1>View DhanVenture</h1>
        <a href="<?php echo e(url('indexDhanVenture')); ?>" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View Images</a>

    </div>
    <div id="" class="table-responsive">
        <table class="table table-hover table-responsive table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Date </th>
                    <th>Photo </th>

                    <th>Total Amount</th>

                </tr>
            </thead>
            <tbody>
                <?php if(!empty($dhanView)): ?>
                                <?php
                                    $i = 1;
                                ?>
                                <?php $__currentLoopData = $dhanView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr data-id="<?php echo e($venture->id ?? ''); ?>">

                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($venture->date); ?></td>
                                        <td><?php echo e($venture->noteNo); ?></td>
                                        <td><?php echo e($venture->totalAmount); ?></td>

                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('common.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\time_aura\resources\views/DhanVenture/view.blade.php ENDPATH**/ ?>