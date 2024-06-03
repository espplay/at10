<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body> 
<form action="<?php echo e(route('Giaipt')); ?>" method="post">
    <?php echo csrf_field(); ?>
  <div class="container">
    <H1>Nguyễn Phi Hùng</H1>
    <h1>Giải phương trình bậc 1</h1>
    <div>
      <label for="a">Nhập hệ số a:</label>
      <input type="number" name="hsa" id="a" value="<?php echo e(isset ($a)?$a:''); ?>">
    </div>
    <div>
      <label for="b">Nhập hệ số b:</label>
      <input type="number" name="hsb" id="b" value="<?php echo e(isset ($b)?$b:''); ?>">
    </div>
    <button submit="solveEquation()">Giải</button>
</form>
<h1>kết quả:<?php if(isset($kq)): ?>
        <?php echo e($kq); ?>

        <?php endif; ?>
</h1> 
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/giaipt.blade.php ENDPATH**/ ?>