<?php $__env->startSection('content-header'); ?>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Category</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('admin.categories.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="form-group">

            <label for="site_name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo e(@old('name')); ?>" required>

        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nodes/job/job/resources/views/admin/category/create.blade.php ENDPATH**/ ?>