
<?php $__env->startSection('content'); ?>
<?php
    $states = DB::table('states')->get();
?>

<div class="container">
    <div class="text-center d-flex justify-content-between mb-3">
        <h1>Student Form</h1>
        <a href="<?php echo e(url('viewDhanVenture')); ?>" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View</a>
    </div>
    <hr>
    <form method="POST" enctype="multipart/form-data" id="addHostelStaffTraining" action="<?php echo e(url('addDhanVenture')); ?>">
        <?php echo csrf_field(); ?>
        <div class="row">

            <!-- Date -->
            <div class="col-md-3 mt-5">
                <label for="date">Date<span style="color:red;">*</span></label>
                <input type="date" name="date" id="date" value="<?php echo e(old('date')); ?>" class="form-control p-1"
                    autocomplete="off" 
                    max="<?php echo e(\Carbon\Carbon::now()->addYear()->format('Y-m-d\TH:i')); ?>" />
                <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Image -->
            <div class="col-md-3 mt-5 ">
                <label for="image">Image<span style="color:red;">*</span></label>
                <input type="file" name="photo" id="photo" class="form-control p-1" value="<?php echo e(old('photo')); ?>" />
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="col-md-3 mt-5 ">
                <label for="noteNo">Note No</label>
                <input type="number" name="noteNo"  id="noteNo" >
            </div>
            <!-- Total Amount -->
            <div class="col-md-3 mt-5">
                <label for="totalAmount">Total Amount</label>
                <input type="text" name="totalAmount" id="totalAmount" class="form-control p-1  "/>
                <span class="text-success"> Total Amount.</span>
            </div>
        </div>
        <hr>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-info btn-sm">Submit</button>
        </div>

    </form>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('common.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\time_aura\resources\views/DhanVenture/add.blade.php ENDPATH**/ ?>