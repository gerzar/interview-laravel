<?php $__env->startSection('content-header'); ?>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>


        <div class="card" style="width: 18rem;">
            <img src="<?php if($product->image): ?><?php echo e(Storage::disk('public')->url($product->image)); ?><?php endif; ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($product->name); ?></h5>
                <p class="card-text"><?php echo e($product->ProductCategory->name); ?></p>
                <p class="card-text"><?php echo e($product->price); ?></p>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nodes/job/job/resources/views/admin/product/show.blade.php ENDPATH**/ ?>