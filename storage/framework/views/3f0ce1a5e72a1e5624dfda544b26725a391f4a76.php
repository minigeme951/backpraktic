<?php $__env->startSection('content'); ?>
    <h1 class="d-flex justify-content-center">Админка</h1>
    <h3 class="d-flex justify-content-center">Управление товаром</h3>
    <div class="container">
        <div class="row">
            <a href="<?php echo e(url('/admin/product')); ?>" class="btn btn-info justify-content-center">создать товар</a>
        </div>
        <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col">
                    <h3><?php echo e($obprod->name); ?></h3>  <!-- тут назавние товара выводится из базы данных-->
                </div>
                <div class="col">
                    <a href="<?php echo e(route('productedit',$obprod->id)); ?>" class="btn btn-primary ">Редактировать</a>
                    <!-- это кнопка отвечает за редактирования товара -->
                </div>
                <div class="col">
                    <a href="<?php echo e(url('/admin/product/delete/')); ?>/<?php echo e($obprod->id); ?>" class="btn btn-danger">Удалить</a>
                </div> <!-- это кнопка отвечает за удаление товара из базы данных -->

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <h3 class=" d-flex justify-content-center">Упрваление категориями</h3>
    <div class="container">
        <div class="row">
            <a href="<?php echo e(url('/admin/category')); ?>" class="btn btn-info justify-content-center">создать категорию</a>
        </div>
        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col">
                    <h3><?php echo e($obcat->name); ?></h3>
                </div>
                <div class="col">
                    <a href="<?php echo e(route('catedit',$obcat->id)); ?>" class=" btn btn-primary">Редактировать</a>
                </div>
                <div class="col">
                    <a href="<?php echo e(url('/admin/category/delete/')); ?>/<?php echo e($obcat->id); ?>" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vpfkmmdh/gfpykxy-m1/resources/views/admin.blade.php ENDPATH**/ ?>