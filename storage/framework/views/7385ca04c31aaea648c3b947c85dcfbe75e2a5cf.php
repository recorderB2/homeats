<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(url('css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
</head>
<body>
    <nav>
        <a href="<?php echo e(route('homeats')); ?>">Homeats</a>
        <a href="<?php echo e(route('vendors')); ?>">Vendors</a>
        <a href="<?php echo e(route('blogs')); ?>">Blogs</a>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
    <footer>
        by: RcB2 
    </footer>
</body>
</html><?php /**PATH C:\laragon\www\homeats\resources\views/layout.blade.php ENDPATH**/ ?>