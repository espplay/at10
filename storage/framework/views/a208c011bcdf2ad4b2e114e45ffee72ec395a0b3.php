<!doctype html>
<html lang="en">
  <head>
    <title>Bán xe quy mô lớn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <?php if(session('message')): ?>
      <div class="alert alert-success"> 
        <?php echo e(session('message')); ?>

      </div>  
      <?php endif; ?>
         <h1 style='color: red' text-align:center>Danh sách xe</h1>
         <div class="form-group">
         <a name="btnThem" id="" class="btn btn-success" href="<?php echo e(route('t_foods.create')); ?>" role="button" value="Thêm mới 1 sản phẩm">Thêm mới 1 sản phẩm</a>
            <form action="<?php echo e(route('postSearch')); ?>" method="post">
                 <?php echo csrf_field(); ?>
                  <input type="text" name="txtSearch" id="" class="form-control" placeholder="Tìm kiếm theo yêu cầu" aria-describedby="helpId"> 
                  <input name="btnSearch" id="" class="btn btn-primary"  type="submit" value="Tìm kiếm">
             </form>
         </div>


         <table class="table">
            <thead>
              
                <tr>
                  <th>STT</th>
                    <th>Id</th>
                    <th>Description</th>
                    <th>Model</th>
                    <th>Mf-Name</th>
                    <th>Produced_on</th>
                    <th>Image</th>             
                </tr>  
            </thead> 
            <tbody>
                <?php if(isset($t_foods)): ?>
                 <?php
                   $t_foods=$t_foods
                      ?>
                <?php else: ?>
                  
                <?php endif; ?>  
                <?php $__currentLoopData = $t_foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t_food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route('t_foods.destroy',['t_$t_food'=>$t_food->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <tr>
                    <td scope="row"><?php echo e($t_food->id); ?></td>
                    <td><?php echo e($t_food->name); ?></td>
                    <td><?php echo e($t_food->price); ?></td>
                    <td> <?php echo e($t_food->mf->lsp_name); ?></td> 
                    <td><?php echo e($t_food->detail); ?></td> 
                    <td><img src='/image/<?php echo e($t_food->image); ?>' style="height:70px;wight:70px; " class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></td>
                    <td>               
                         <a  name="btnchitiet" id="" class="btn btn-primary" href="<?php echo e(route('t_foods.show',['t_$t_food'=>$t_food->id])); ?>" role="button">Show</a>
<a  name="btnSua" id="" class="btn btn-info" href="<?php echo e(route('t_foods.edit',['t_$t_food'=>$t_food->id])); ?>" role="button">Edit</a>
                         <input name="btnXoa" id="" class="btn btn-primary" type="submit" value="Xóa">
                    </td>   
                </tr>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
            </tbody>  
          </table> 
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <?php echo e($t_foods->onEachSide(5)->links()); ?>

</html><?php /**PATH C:\xampp\htdocs\at10\resources\views/car/car-list.blade.php ENDPATH**/ ?>