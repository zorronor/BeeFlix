<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BeeFlix</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style>
        </style>
    </head>
    <body>
        <h1 style="text-align:center;" class="col-mb-3 mt-3"> BeeFlix </h1>
        <div class="container">
        <a href="" class="btn btn-secondary ml-5 mr-2 mb-2 pull-right">BACK</a> </h2>
        <div>
        <div class="container">
                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                <h2 class="ml-4 mb-3"> <?php echo e($genre->Name); ?>

                <a href="<?php echo e(url('genre')); ?>/<?php echo e($genre->GenreID); ?>" 
                class="btn btn-secondary mr-5 float-right">VIEW ALL</a> </h2>
                       
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $genre-> movie->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md2 mr-3 mb-5">
                    <div class="card bg-light" style="width: 15rem;">
                        <img src="<?php echo e(url('assets')); ?>/<?php echo e($movie->Photo); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold"><?php echo e($movie->Title); ?></h6>
                            <a href="<?php echo e(url('detail')); ?>/<?php echo e($movie->MovieID); ?>" 
                            class="btn btn-secondary right-panel-link">CHECK FILM</a>
                        </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>  
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\BeeFlix\resources\views/home.blade.php ENDPATH**/ ?>