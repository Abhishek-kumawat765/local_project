
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between  mb-3">

        <h1>Images DhanVenture</h1>
        <a href="<?php echo e(url('viewDhanVenture')); ?>" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View</a>

    </div>
    <div id="" class="table-responsive">
        <table>
            <thead>
                <tr class="text-center">
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dhanView->chunk(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Chunking the images into sets of 10 -->
                    <tr class="text-center">
                        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Loop through each chunk -->
                            <td>
                                <img src="<?php echo e(url('webimage/dhanVenture/' . $venture->photo)); ?>" alt="Venture Image"
                                    style="width: 100px; height: 40px;">
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('common.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\time_aura\resources\views/DhanVenture/index.blade.php ENDPATH**/ ?>