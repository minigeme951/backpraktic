<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-mb-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="d-flex justify-content-center">Создание товара</h2>
                    </div>
                    <div class="card-body">
                        <form method="post"  action="<?php echo e(route('createprod')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Название товара</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="name" type="text" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="img_url" class="col-md-4 col-form-label text-md-end">Добавить фото
                                    товара</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="img_url" type="file" name="img_url" required
                                           autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Цена</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="price" type="text" name="price" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="year_of_production" class="col-md-4 col-form-label text-md-end">Дата выхода
                                    продукта</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="year_of_production" type="text"
                                           name="year_of_production" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="country_of_origin" class="col-md-4 col-form-label text-md-end">Страна
                                    производитель</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="country_of_origin" type="text"
                                           name="country_of_origin" required autofocus >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="category" class="col-md-4 col-form-label text-md-end">Категория</label>

                                <div class="col-md-6">
                                    <select class="form-select" name="category" id="category">
                                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($obcat->id); ?>"><?php echo e($obcat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="model" class="col-md-4 col-form-label text-md-end">Модель</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="model" type="text"
                                           name="model" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="count" class="col-md-4 col-form-label text-md-end">Количество</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="count" type="text"
                                           name="count" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Создать товар')); ?>

                                    </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vpfkmmdh/gfpykxy-m1/resources/views/createprod.blade.php ENDPATH**/ ?>