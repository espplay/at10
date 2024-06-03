<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h2 style='color: red'>Phi Hùng</h2>
        <h2 style='color: red'>Chi tiết xe</h2> <!-- c   -->
        <?php if(isset($car)): ?>
        <li class="list-group-item active"><?php echo e($car->id); ?></li>
            <li class="list-group-item"><?php echo e($car->description); ?></li>
            <li class="list-group-item"><?php echo e($car->mf->mf_name); ?></li>
            <li class="list-group-item"> <img src='/image/<?php echo e($car->image); ?>' style="height:70px;wight:70px; " class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></li>
            <li class="list-group-item "><?php echo e($car->model); ?></li>
            <li class="list-group-item "><?php echo e($car->product_on); ?></li>
        </ul>
        <?php endif; ?>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/car/car-show.blade.php ENDPATH**/ ?>