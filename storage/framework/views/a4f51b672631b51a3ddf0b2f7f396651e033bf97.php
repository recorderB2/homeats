
<?php $__env->startSection('title', 'Blogs'); ?>
<?php $__env->startSection('content'); ?>
<h1>
    these are the blogs <?php echo e($nums); ?>

</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\homeats\resources\views/blogs/index.blade.php ENDPATH**/ ?>