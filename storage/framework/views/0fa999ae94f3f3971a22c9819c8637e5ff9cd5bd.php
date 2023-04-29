<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-around">

            <div class="col-4">
                <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img class="h-100 w-100" src="<?php echo e(url('/img')); ?>/<?php echo e($obprod->img_url); ?>" alt="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-4">
                <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h2><?php echo e($obprod->name); ?></h2>
                    <h2>Цена: <?php echo e($obprod->price); ?>рублей.</h2>
                    <?php if(auth()->check()): ?>
                    <?php if($obprod->count>0): ?>
                        <a href="<?php echo e(Route('cartAdd', $obprod->id)); ?>" class="btn btn-primary">Добавить в корзину</a>
                    <?php else: ?>
                        <a class="btn btn-primary disabled" href="">НЕТ В НАЛИЧИИ</a>
                    <?php endif; ?>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>"class="btn btn-info">Авторизируйтесь</a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <h3>Характеристики</h3>
                <h4>Дата производства: <?php echo e($obprod->year_of_production); ?></h4>
                <h4>Страна производитель: <?php echo e($obprod->country_of_origin); ?></h4>
                <h4>Модель:<?php echo e($obprod->model); ?></h4>
                <?php if($obprod->count>0): ?>
                    <p>В наличии: <?php echo e($obprod->count); ?></p>
                <?php else: ?>
                    <p>Нет в наличии</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vpfkmmdh/gfpykxy-m1/resources/views/oneprod.blade.php ENDPATH**/ ?>