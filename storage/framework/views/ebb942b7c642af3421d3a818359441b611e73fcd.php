<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Details</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>
   
    <body>
    <h1 style="text-align:center;" class="col-mb-3 mt-3"> BeeFlix </h1>
        <div class="container">
        <a href="<?php echo e(url('home')); ?>" class="btn btn-secondary ml-5">BACK</a> </h2>
        <div>

        <div class="card mb-3 mt-3 ml-5" style="max-width: 840px; max-height: 500px;">
    <div class="row">
        <div class="col-md-4">
        <img src="<?php echo e(url('assets')); ?>/<?php echo e($movie->Photo); ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($movie-> Title); ?></h5>
            <?php for($i = 0; $i < $movie->Rating; $i++): ?>
            &#11088;  
            <?php endfor; ?>
            <p class="card-text mt-2"><?php echo e($movie-> Description); ?></p>
            <p class="card-text"><small class="text-muted">Genre: <?php echo e($genre->Name); ?>  </small></p>

            <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Episode</th>
                <th scope="col">Title</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
              <?php $__currentLoopData = $episode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <td> <?php echo e($eps->Episode); ?> </td>
                <td> <?php echo e($eps->Title); ?> </td>
              </tr>  
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <?php echo e($episode->links()); ?>


        </div>
        </div>
    </div>
    </div>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\BeeFlix\resources\views/detail.blade.php ENDPATH**/ ?>