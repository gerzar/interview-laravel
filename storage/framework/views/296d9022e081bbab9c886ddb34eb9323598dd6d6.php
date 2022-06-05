<?php $__env->startSection('content-header'); ?>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Links</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-sm btn-outline-secondary">Add new Product</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product name</th>
                <th scope="col">Category name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->ProductCategory->name); ?></td>
                    <td>
                        <a class="btn btn-info" href="<?php echo e(route('admin.products.edit', $product)); ?>">Edit</a>
                        <a class="btn btn-info" href="<?php echo e(route('admin.products.show', $product)); ?>">Show</a>
                        <button class="btn btn-danger" type="submit" onclick="deleteElement(this)"
                                data-url="<?php echo e(route('admin.products.destroy', $product)); ?>" value="<?php echo e(csrf_token()); ?>">Delete</button>


                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan=6>Nothing here...</td>
                </tr>
            <?php endif; ?>

            </tbody>
        </table>
        <?php echo $products->links(); ?>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('js/delete.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts/admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nodes/job/job/resources/views/admin/product/index.blade.php ENDPATH**/ ?>