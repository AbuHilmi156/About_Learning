<?php $__env->startSection('title', 'Kalkulator laravel'); ?>
<?php $__env->startSection('header', 'Kalkulator'); ?>
<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
<h4>Terjadi Kesalahan</h4>
<hr>
<ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>

<?php endif; ?>
    <form action="/kalkulator" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="angka1" class="form-label">Angka 1</label>
            <input type="number" class="form-control" id="angka1" name="angka1" value="<?php echo e(old('angka1')); ?>">
        </div>
        <div class="mb-3">
            <label for="angka2" class="form-label">Angka 2</label>
            <input type="number" class="form-control" id="angka2" name="angka2"value="<?php echo e(old('angka2')); ?>">
        </div>
        <h2>Hasil :
            <?php if(isset($hasil)): ?>
                <?php echo e($hasil); ?>

            <?php endif; ?>
        </h2>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kalkulatorlv\resources\views/kalkulator.blade.php ENDPATH**/ ?>