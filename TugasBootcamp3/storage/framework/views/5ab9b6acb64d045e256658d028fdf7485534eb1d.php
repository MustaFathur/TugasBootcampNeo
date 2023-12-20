<?php $__env->startSection('title','Tambah'); ?>

<?php $__env->startSection('navbar'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('navbar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>Tambah Data Game</h2>

<form action="" method="post">
    <div class="form-group">
        <label for="nama_game">Nama Game:</label>
        <input type="text" class="form-control" id="nama_game" name="nama_game" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>

<br>
<a href="index.php" class="btn btn-primary">Kembali ke Daftar Game</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TugasBootcamp3\resources\views/tambah.blade.php ENDPATH**/ ?>