<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-mb-8"></div>
            <div class="card">
                <div class="card-header ">Отказано в доступе</div>
                <div class="card-body">
                    <div class="row justify-content-center">У вас не достаточно прав доступа к данной странице</div>
                    <div class="row"><a href="<?php echo e(url('/')); ?>" class="btn btn-danger">Вернуться на главную страницу</a></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vpfkmmdh/gfpykxy-m1/resources/views/Error.blade.php ENDPATH**/ ?>