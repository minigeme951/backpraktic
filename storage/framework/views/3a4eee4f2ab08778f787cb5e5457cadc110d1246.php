<?php $__env->startSection('content'); ?>
    <h1 class="d-flex justify-content-center">Каталог</h1>
    <div class="btn-group">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                Фильтры
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="dropdown-item" href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($obcat->id); ?>"><?php echo e($obcat->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li><a class="dropdown-item" href="<?php echo e(url('/catalog')); ?>">сборосить фильтр</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                Сортировка
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/id/desc"/>от недавно добавленных к
                    старым</a>
                </li>
                <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/id/asc"/>от старых к недавно добавленым</a>
                </li>
                <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/price/asc"/>от дешевых к дорогим</a>
                </li>
                <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/price/desc"/>от дорогих к дешевым</a>
                </li>
                <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/year_of_production/desc"/>от недавно
                    вышедшим к старым</a>
                </li>
                <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/year_of_production/asc"/>от старых к недавно
                    вышедшим</a>
                </li>
                <li><a class="dropdown-item" href="<?php echo e(url('/catalog')); ?>">сборосить фильтр</a></li>
            </ul>
        </div>

    </div>

    <div class="list">
        <div class="row">
            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-2">
                    <div class="card h-100 d-flex" style="width: 18rem;">
                        <img src="<?php echo e(url('/img')); ?>/<?php echo e($obprod->img_url); ?>" class="card-img-top h-75 " alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($obprod->name); ?></h5>
                            <p class="card-text">Цена:<?php echo e($obprod->price); ?>руб</p>
                            <div class="btn-group">
                            <a href="<?php echo e(url('/catalog/product')); ?>/<?php echo e($obprod->id); ?>" class="btn btn-primary">Подробнее</a>
                                <?php if(auth()->check()): ?>
                                    <?php if($obprod->count>0): ?>
                                        <a href="<?php echo e(Route('cartAdd', $obprod->id)); ?>" class="btn btn-primary">Добавить в корзину</a>
                                    <?php else: ?>
                                        <a class="btn btn-primary disabled" href="">НЕТ В НАЛИЧИИ</a>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="<?php echo e(url('/login')); ?>"class="btn btn-info">Авторизируйтесь</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vpfkmmdh/gfpykxy-m1/resources/views/cataloglist.blade.php ENDPATH**/ ?>