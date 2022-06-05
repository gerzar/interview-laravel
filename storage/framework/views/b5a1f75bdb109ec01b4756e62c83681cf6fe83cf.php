<?php $__env->startSection('content'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><?php echo e($product->name); ?></h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$<?php echo e($product->price); ?></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Category: <?php echo e($product->ProductCategory->name); ?></li>
                    </ul>

                    <button class="w-100 btn btn-lg btn-outline-primary" type="button"
                            onclick="addToCart(this)" data-url="<?php echo e(route('addToCart', $product->id)); ?>"
                            value="<?php echo e(csrf_token()); ?>" >Add to Cart</button>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        Nothing here...
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('ui-js'); ?>

    <script src="<?php echo e(asset('js/addToCart.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts/ui-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nodes/job/job/resources/views/ui/product/index.blade.php ENDPATH**/ ?>