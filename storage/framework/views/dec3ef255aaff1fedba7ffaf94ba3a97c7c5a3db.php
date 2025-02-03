
<?php $__env->startSection('content'); ?>
<?php if(session('danger')): ?>
    <script>
        toastr.error("<?php echo e(session('danger')); ?>");
    </script>
<?php endif; ?>


<div class="container">
    <div class="d-flex justify-content-between  mb-3">
        <h1></h1>
        <h1>View Student Data</h1>
        <a href="<?php echo e(url('addStudents')); ?>" class="btn btn-info btn-sm"> <i class="fa fa-plus"> </i> Add</a>

    </div>
    <div id="" class="table-responsive">
        <table class="table table-hover table-responsive table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>Email </th>
                    <th>Date </th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Address</th>
                    <th>User Name</th>
                    <th>State</th>
                    <th>Form Fee</th>
                    <th>Total Fee</th>
                    <th>Total Amount</th>

                </tr>
            </thead>
            <tbody>
                <?php if(!empty($studentsData)): ?>
                                <?php
                                    $i = 1;
                                ?>
                                <?php $__currentLoopData = $studentsData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studentDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr data-id="<?php echo e($studentDetail->id ?? ''); ?>">
                                        <td class="d-flex">
                                            <a href="<?php echo e(url('editStudents', $studentDetail->id)); ?>" class="btn btn-info btn-sm"
                                                style="height:30px; width:30px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <a href="<?php echo e(url('deleteStudents', $studentDetail->id)); ?>" class="btn btn-danger btn-sm"
                                                style="height:30px; width:30px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                           
                                           
                                        </td>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($studentDetail->name); ?></td>
                                        <td><?php echo e($studentDetail->class_name ?? ''); ?></td>
                                        <td><?php echo e($studentDetail->mobile); ?></td>
                                        <td><?php echo e($studentDetail->age); ?></td>
                                        <td><?php echo e($studentDetail->email); ?></td>
                                        <td><?php echo e($studentDetail->date); ?></td>
                                        <td><?php echo e($studentDetail->fatherName); ?></td>
                                        <td><?php echo e($studentDetail->motherName); ?></td>
                                        <td><?php echo e($studentDetail->address); ?></td>
                                        <td><?php echo e($studentDetail->userName); ?></td>
                                        <!-- <td><?php echo e($studentDetail->password); ?></td> -->
                                        <!-- <td><?php echo e($studentDetail->photo); ?></td> -->
                                        <td><?php echo e($studentDetail->state_name ?? ''); ?></td>
                                        <td><?php echo e(number_format($studentDetail->formFee, 2)); ?></td>
                                        <td><?php echo e(number_format($studentDetail->totalFee, 2)); ?></td>
                                        <td><?php echo e($studentDetail->totalAmount); ?></td>

                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('common.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\time_aura\resources\views/students/view.blade.php ENDPATH**/ ?>