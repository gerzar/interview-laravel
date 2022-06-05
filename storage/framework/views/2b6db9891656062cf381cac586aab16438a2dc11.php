<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Almost TIMES</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet">


</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Test Job</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">

        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">

        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link <?php if(request()->routeIs('admin.products.*')): ?> active <?php endif; ?>"
                           aria-current="page" href="<?php echo e(route('admin.products.index')); ?>">
                            <span data-feather="file-text"></span>
                            Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if(request()->routeIs('admin.categories.*')): ?> active <?php endif; ?>"
                           aria-current="page" href="<?php echo e(route('admin.categories.index')); ?>">
                            <span data-feather="file-text"></span>
                            Categories
                        </a>
                    </li>




                </ul>

            </div>
        </nav>



        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="main-block">

            <?php echo $__env->yieldContent('content-header'); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>
</div>


<script type="javascript" src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>

<?php /**PATH /home/nodes/job/job/resources/views/layouts/admin-layout.blade.php ENDPATH**/ ?>