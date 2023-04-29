<?php $__env->startSection('content'); ?>
    <div class="container">


    <h1 class="d-flex justify-content-center">Корзина пользователя: <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></h1>
        <div class="cart">
            <div class="card-header">
                <div class="row">
                    <div class="col">название товара</div>
                    <div class="col">количество товара</div>
                    <div class="col">Удалить товар из корзинны</div>
                </div>
            </div>
            <div class="card-body">
                <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col"><?php echo e($item->prod->name); ?></div>
                    <div class="col"><div class="btn-group">
                            <form action="<?php echo e(route('cartUpadate', $item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <button type="submit" name="count" class="btn btn-danger" value="<?php echo e($item->count - 1); ?>">-</button>
                                    <span><?php echo e($item->count); ?></span>
                                    <button type="submit" class="btn btn-success" name="count" value="<?php echo e($item->count + 1); ?>">+</button>
                                </div>
                            </form>
                        </div></div>
                    <div class="col">


                    <a  href="<?php echo e(url('cart/remove')); ?>/<?php echo e($item->id); ?>" class="btn btn-danger">Удалить</a>
                        </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="row">
            <form action="<?php echo e(route('order.save')); ?>">
                <input placeholder="Введите пароль для подтверждения заказа" type="password" name="pass" required>
                <div class="btn-group d-flex justify-content-center">
                    <button  type="submit" class="btn btn-success">Сформировать заказ</button>
            </form>
            <a class="btn btn-primary" href="<?php echo e(url('/catalog')); ?>">Продолжить покупки</a>
        </div>
        </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vpfkmmdh/gfpykxy-m1/resources/views/cart.blade.php ENDPATH**/ ?>