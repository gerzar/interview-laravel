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
    <form method="post" action="<?php echo e(route('admin.products.update', $product)); ?>" enctype="multipart/form-data">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>

        <div class="form-group">

            <label for="site_name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo e($product->name); ?>" required>

        </div>


        <div class="form-group">

            <label for="url">Price</label>
            <input type="number" class="form-control" value="<?php echo e($product->price); ?>" step="0.01" placeholder="price" id="price" name="price">

        </div>


        <div class="form-group">

            <label for="categories">Categories</label>
            <select name="category_id" id="category_id">
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($category->id); ?>" <?php if($category->id === $product->ProductCategory->id): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <option disabled>Create category first</option>
                <?php endif; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image</label>

            <input type="file" class="form-control" id="image" name="image">
            <small id="title" class="form-text text-muted">Upload image</small>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nodes/job/job/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>